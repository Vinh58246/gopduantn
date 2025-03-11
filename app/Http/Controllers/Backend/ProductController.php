<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\brands;
use App\Models\products;
use App\Models\variant_name;
use App\Models\variant_attribute;
use App\Models\infor_option;
use App\Models\variant_option;
use App\Models\multi_imgs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\User;

use Image;
use Carbon\Carbon;
use PDOException;

class ProductController extends Controller
{
     public function AllProduct(){
        $show_products = products::all();
        return view('backend.product.product_all',compact('show_products'));
    } // End Method 


    public function AddProduct(){
        $show_brands = brands::all();
        $show_categories = Category::where('parent_id', 0)->get();
        return view('backend.product.product_add', compact('show_brands','show_categories'));
    } // End Method 

    public function InactiveProduct($id){
        $show_product = products::where('id', $id)->first();
        $show_product->status = 5;
        $show_product->save();
        return redirect()->route('all.product');
    } // End Method 

    public function DeleteProduct($id){
        try{
            $pd = products::where('id', $id)->first();
            $muti_img = multi_imgs::where('product_id', $id)->get();


            $thumnail = $pd->product_thumnail;
            $pd->delete();

            File::delete(public_path($thumnail));

            foreach ($muti_img as $i) {
                File::delete(public_path($i->photo_name));
            }


            return redirect()->route('all.product');


        }catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                return redirect()->route('all.product')->with('errdetele','không thể xóa sản phẩm này, vì có thể trong đơn hàng đang có sản phẩm này');
            } else {
                echo "Lỗi: " . $e->getMessage();
            }
        }
    } // End Method 
    
    public function StoreProduct(Request $request){

        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:categories,id',
            'product_name' => 'required|string|max:255',
            'product_code' => 'required|string|max:255',
            'product_qty' => 'required|integer|min:1',
            'product_tags' => 'required|string|max:255',
            'selling_price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lt:selling_price',
            'short_descp' => 'required|string|max:500',
            'detailed_description' => 'required|string',
            'product_thambnail' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'list_image' => 'required|array',
            'list_image.*' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ], [
            'brand_id.required' => 'Vui lòng chọn thương hiệu.',
            'category_id.required' => 'Vui lòng chọn danh mục.',
            'subcategory_id.required' => 'Vui lòng chọn danh mục con.',
            'subcategory_id.exists' => 'Danh mục con không hợp lệ.',
            'product_name.required' => 'Tên sản phẩm không được để trống.',
            'product_code.required' => 'Mã sản phẩm không được để trống.',
            'product_qty.required' => 'Số lượng sản phẩm là bắt buộc.',
            'product_qty.integer' => 'Số lượng phải là số nguyên.',
            'product_tags.required' => 'Vui lòng nhập tag cho sản phẩm.',
            'selling_price.required' => 'Vui lòng nhập giá bán.',
            'selling_price.numeric' => 'Giá bán phải là số.',
            'discount_price.numeric' => 'Giá giảm phải là số.',
            'discount_price.lt' => 'Giá giảm phải nhỏ hơn giá bán.',
            'short_descp.required' => 'Vui lòng nhập mô tả ngắn.',
            'detailed_description.required' => 'Vui lòng nhập mô tả chi tiết.',
            'product_thambnail.required' => 'Vui lòng tải lên hình ảnh sản phẩm.',
            'product_thambnail.image' => 'Ảnh sản phẩm phải là file hình ảnh.',
            'list_image.required' => 'Vui lòng tải lên danh sách hình ảnh sản phẩm.',
            'list_image.*.image' => 'Mỗi tệp trong danh sách hình ảnh phải là ảnh hợp lệ.',
        ]);

        $product = new products();

        if ($request->hasFile('product_thambnail')) {
            $fileImg = $request->file('product_thambnail');
            $path = 'upload/products/thambnail';
            $nameimg = Str::random(30).'.'.$fileImg->extension();
            $pathFromImg = public_path($path);
            $fileImg->move($pathFromImg, $nameimg);
            $filePath = $path.'/'.$nameimg;
            $pthimage = $filePath;
        }

        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->subcategory_id;
        $product->product_name = $request->product_name;
        $product->product_slug = Str::slug($request->product_name);
        $product->product_code = $request->product_code;
        $product->product_qty = $request->product_qty;
        $product->product_tags = $request->product_tags;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->short_descp = $request->short_descp;
        $product->long_descp = $request->detailed_description;
        $product->vendor_id = $request->vendor_id;
        $product->status = $request->status;
        $product->product_thumnail = $pthimage;

        $product->save();

        $idproduct = $product->id;

        // echo $request->detailed_description;

        


        if(isset($idproduct) && !empty($idproduct)){
            
            // xử lý multi_images
            for ($i=0; $i < count($request->list_image); $i++) {
                $multi_image = new multi_imgs();
                $fileImg = $request->file('list_image')[$i];
                $path = 'upload/products/multi-image';
                $nameimg = Str::random(30).'.'.$fileImg->extension();
                $pathFromImg = public_path($path);
                $fileImg->move($pathFromImg, $nameimg);
                $filePath = $path.'/'.$nameimg;
                $path_image = $filePath;
                $multi_image->product_id = $idproduct;
                $multi_image->photo_name = $path_image;
                $multi_image->save();
            }







            // bắt đầu xử lý biến thể
            // nếu biến quantity_attribute có tồn tại
            if(isset($_POST['quantity_attribute'])){

                // biến tên biến thể
                $name_variant = $_POST['name_variant'];
                // biến giá trị biến thể
                $value_variant = $_POST['value_variant'];
                // biến giá của mỗi option biến thể
                $price_attribute = $_POST['price_attribute'];
                // biến số lượng mỗi option biến thể
                $quantity_attribute = $_POST['quantity_attribute'];
                // biến của từng giá trị option
                $value_attribute = $_POST['value_attribute'];


                // -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+--+-+- xử lý bảng variant_name -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-

                // -++++++- mảng chứa tên biến thể và id tên biến thể đã lưu -+++++++-
                $arrname = [];

                // lọc qua số lượng tên biến thể rồi lưu vào csdl, sau đó lấy từng id đó, để thêm vào mảng $arrname
                for ($i=0; $i < count($name_variant); $i++) {
                    $variant_name = new variant_name();

                    $variant_name->idproduct = $idproduct;
                    $variant_name->name = $name_variant[$i];

                    $variant_name->save();

                    $idvariant_name = $variant_name->id;

                    $arrname[] = ['name' => $name_variant[$i], 'id' => $idvariant_name];

                    

                }

            // -*-*-*-*-*-*-*-**-*-*-*-**-*-*- kết quả của mảng $arrname[]
                // kết quả sau khi đã lọc qua hết các tên biến thể
                // [
                //     0 => ['name' => 'màu sắc', 'id' => '1'],
                //     1 => ['name' => 'kích thước', 'id' => '2'],
                //     2 => ['name' => 'chất liệu', 'id' => '3']
                // ]


                // -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+--+-+- xử lý bảng variant_attribute -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-

                
                // trước tiên xử lý chuỗi giá trị 'vàng,đỏ,xanh' này thành mảng trước ['vàng','đỏ','xanh']

                // -++++++++- mảng chứa các attribute -+++++++++-
                $arrvaluevariant = [];

                // từ: 
                // [
                //     0 => ['vàng,đỏ,xanh'],
                //     1 => ['S,M,L'],
                //     2 => ['vải']
                // ]

                for ($i=0; $i < count($value_variant); $i++) { 
                    $arrvaluevariant[] = explode(',', $value_variant[$i]);
                }

                // kết quả của mảng $arrvaluevariant[]
                // kết quả sau khi đã lọc qua từng chuỗi và biến nó thành mảng
                // [
                //     0 => ['vàng','đỏ','xanh'],
                //     1 => ['S','M','L'],
                //     2 => ['vải']
                // ]

                // sau khi đã có từ giá trị rồi thì bắt đầu thêm vào csdl, sau đó lấy từng id đã thêm vào đó

                // -++++++++- mảng chứa giá trị biến thể và id của biến thể đã lưu -+++++++-
                $arrvalue = [];

                // bắt đầu lọc qua số lượng tên biến thể để có thể thêm id tên và field khóa ngoại idvariantname
                for ($i=0; $i < count($name_variant); $i++) { 

                    // tiếp theo dựa trên số lượng name để lọc qua mảng giá trị biến thể $arrvaluevariant
                    for ($j=0; $j < count($arrvaluevariant[$i]); $j++) { 
                        // mỗi lần lặp sẽ ra kết quả sau
                        // lần 0: ['vàng','đỏ','xanh']
                        // lần 1: ['S','M','L']
                        // lần 2: ['vải']
                        $variant_attribute = new variant_attribute();

                        $variant_attribute->idvariantname = $arrname[$i]['id'];
                        $variant_attribute->value = $arrvaluevariant[$i][$j];
                        $variant_attribute->save();
                        $idvaluevariant = $variant_attribute->id;


                        $arrvalue[] = ['value' => $arrvaluevariant[$i][$j], 'id' => $idvaluevariant];

                        
                    }
                }

            //  -*-*-*-*-*-*-*-**-*-*-*-**-*-*- kết quả của mảng $arrvalue[]
                // kết quả sau khi đã lọc qua hết các giá trị biến thể
                // [
                //     0 => ['value' => 'vàng', 'id' => '1'],
                //     1 => ['value' => 'đỏ', 'id' => '2'],
                //     2 => ['value' => 'xanh', 'id' => '3'],
                //     3 => ['value' => 'S', 'id' => '4'],
                //     4 => ['value' => 'M', 'id' => '5'],
                //     5 => ['value' => 'L', 'id' => '6'],
                //     6 => ['value' => 'vải', 'id' => '7'],
                // ]


                // -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+--+-+- xử lý bảng infor_option -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-

                // -++++++++- mảng chứa các số thứ tự của các option có giá trị số lượng -+++++++++-
                $listquantitycovalue = [];
                // -++++++++- mảng chứa các id của các option có giá trị số lượng (sau khi đã thêm vào csdl) -+++++++++-
                $arridinforoption = [];

                // trước tiên lọc qua các option số lượng
                for ($i=0; $i < count($quantity_attribute); $i++) { 
                    // kiểm tra option nào có giá trị thì sẽ thực thi tiếp
                    if(!empty($quantity_attribute[$i])){

                        // lưu số thứ tự của option có giá trị
                        $listquantitycovalue[] = $i;

                        // bắt đầu lưu thông tin vào bảng
                        $infor_option = new infor_option();
                        $infor_option->idproduct = $idproduct;
                        $infor_option->code = Str::random(10);
                        // nếu option có giá trị số lượng nào mà có thêm price nữa thì sẽ thực thi câu lệnh sau
                        if(!empty($price_attribute[$i])){
                            $infor_option->price = $price_attribute[$i];
                        }
                        $infor_option->quantity = $quantity_attribute[$i];
                        $infor_option->save();
                        $idinforoption = $infor_option->id;

                        
                        $arridinforoption[] = ['id' => $idinforoption];
                    }
                }

            //  -*-*-*-*-*-*-*-**-*-*-*-**-*-*- kết quả của mảng $listquantitycovalue[]
                // kết quả sau khi đã lọc qua hết các option có giá trị số lượng
                // [
                //     0 => 0,
                //     1 => 1,
                //     2 => 3,
                //     2 => 4,
                //     2 => 6,
                // ]
            //  -*-*-*-*-*-*-*-**-*-*-*-**-*-*- kết quả của mảng $arridinforoption[]
                // kết quả sau khi đã lọc qua hết các option có giá trị số lượng
                // [
                //     0 => ['id' => '1'],
                //     1 => ['id' => '2'],
                //     2 => ['id' => '3'],
                //     ....
                // ]
            

                // -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+--+-+- xử lý bảng variant_option -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-

                // Part 1:

                // -++++++++- mảng chứa giá trị và id của từng field option -+++++++++-
                $arrvalueid = [];

                // đầu tiên lọc qua tất cả các giá trị đã gộp
                // vd:
                // [
                //     0 => 'vàng',
                //     1 => 'S',
                //     2 => 'vải',
                //     3 => 'vàng',
                //     4 => 'M',
                //     5 => 'vải',
                //     ....
                // ]
                for ($i=0; $i < count($value_attribute); $i++) { 

                    // sau đó lọc qua các attribute có trong csdl để lấy id
                    for ($j=0; $j < count($arrvalue); $j++) { 
                        // nếu giá trị 'vàng' mà bằng với 'vàng' trong csdl, thì lấy id dể thêm vào các giá trị đã gộp
                        if($value_attribute[$i] == $arrvalue[$j]['value']){
                            $arrvalueid[] = ['value' => $value_attribute[$i], 'id' => $arrvalue[$j]['id']];
                        };
                    }
                }

            //  -*-*-*-*-*-*-*-**-*-*-*-**-*-*- kết quả của mảng $arrvalueid[]
                // kết quả sau khi đã lọc qua hết các giá trị đã gộp
                // [
                //     0 => ['value' => 'vàng', 'id' => '1'],
                //     1 => ['value' => 'S', 'id' => '4'],
                //     2 => ['value' => 'vải', 'id' => '7'],
                //     3 => ['value' => 'vàng', 'id' => '1'],
                //     4 => ['value' => 'L', 'id' => '5'],
                //     5 => ['value' => 'vải', 'id' => '7'],
                //     ....
                // ]


                // Part 2:

                // sau khi đã có đầy đủ các dữ liệu cần thiết, tiếp theo sẽ tiến hành so sánh và thêm dữ liệu vào bảng variant_option

                // trước tiên xem vd và tưởng tượng logic
                //          +-------------------------------------------------------------------------------------------+
                //          |       số thứ tự của option có giá trị     |               tổng các giá trị đã gộp         |
                //          |         $listquantitycovalue[]            |                    $arrvalueid[]              |
                //          +-------------------------------------------------------------------------------------------+
                //          |                0 => 0                     |       0 => ['value' => 'vàng', 'id' => '1']   |
                //          |                1 => 1                     |       1 => ['value' => 'S', 'id' => '4']      |
                //          |                2 => 3                     |       2 => ['value' => 'vải', 'id' => '7']    |
                //          |                3 => 4                     |       3 => ['value' => 'vàng', 'id' => '1']   |
                //          |                4 => 6                     |       4 => ['value' => 'L', 'id' => '5']      |
                //          |                                           |       5 => ['value' => 'vải', 'id' => '7']    |
                //          |                                           |       ...                                     |
                //          |                                           |       18 => ['value' => 'xanh', 'id' => '3']  |
                //          |                                           |       19 => ['value' => 'S', 'id' => '4']     |
                //          |                                           |       20 => ['value' => 'vải', 'id' => '7']   |
                //          |                                           |       ...                                     |
                //          +-------------------------------------------------------------------------------------------+

                // theo như bảng thì thấy:
                //  0 = 0-1-2
                //  1 = 3-4-5
                //  ...
                //  6 = 18-19-20

                // suy ra số thứ tự option có giá trị sẽ bằng ( số thứ tự option * số lượng tên biến thể + số lần lặp theo tên)





                // biến chứa tổng số tên biến thể
                $tongsoten = count($arrname);

                // bắt đầu lọc qua số lượng của các option có giá trị
                for ($i=0; $i < count($arridinforoption); $i++) {
                    // vd: có 5 infor option
                    // lần 0: id = 1
                    // lần 1: id = 2
                    // lần 2: id = 3
                    // lần 3: id = 4
                    // lần 4: id = 5

                    // sau đó lọc qua số lượng tên để thực hiện phép tính, sau đó lưu vào csdl với giá trị tương ứng
                    for ($j=0; $j < $tongsoten; $j++) { 

                        # code...
                        // phép tính option giá trị
                        $soidattcanthem = $listquantitycovalue[$i] * $tongsoten + $j;

                        $variant_option = new variant_option();

                        $variant_option->varant_attribute_id = $arrvalueid[$soidattcanthem]['id'];
                        $variant_option->infor_option_id = $arridinforoption[$i]['id'];

                        $variant_option->save();


            // --------------------------------------------
                // lần lặp 0 với infor option
                    // lần 0 với tổng số tên biến thể
                        // id attribute = 1
                        // id infor = 1
                    // lần 1 với tổng số tên biến thể
                        // id attribute = 4
                        // id infor = 1
                    // lần 2 với tổng số tên biến thể
                        // id attribute = 7
                        // id infor = 1
            // --------------------------------------------
                // lần lặp 1 với infor option
                    // lần 0 với tổng số tên biến thể
                        // id attribute = 1
                        // id infor = 2
                    // lần 1 với tổng số tên biến thể
                        // id attribute = 5
                        // id infor = 2
                    // lần 2 với tổng số tên biến thể
                        // id attribute = 7
                        // id infor = 2
            // --------------------------------------------
            // ....
            // --------------------------------------------
                // lần lặp 4 với infor option
                    // lần 0 với tổng số tên biến thể
                        // id attribute = 3
                        // id infor = 5
                    // lần 1 với tổng số tên biến thể
                        // id attribute = 4
                        // id infor = 5
                    // lần 2 với tổng số tên biến thể
                        // id attribute = 7
                        // id infor = 5
            // --------------------------------------------


                    }

                }

            }
            // kết thúc xử lý biến thể
        }

        return redirect()->route('edit.product', $idproduct);


    } // End Method 


    public function EditProduct($id){
        $show_brands = brands::all();
        $show_categories = Category::where('parent_id', 0)->get();
        $show_product = products::where('id', $id)->first();
        $show_multi_imgs = multi_imgs::where('product_id', $id)->get();
        $show_subcate = Category::where('parent_id', $show_product->category_id)->get();
        $show_vendor = User::all();
        $option_variant = DB::table('infor_option')
                ->select(
                    'infor_option.id as id_infor',
                    'products.product_name as product_name',
                    DB::raw("GROUP_CONCAT(variant_name.name, ': ', variant_attribute.value SEPARATOR ', ') as name_value"),
                    'infor_option.price as price',
                    'infor_option.quantity as quantity'
                )
                ->join('products', 'infor_option.idproduct', '=', 'products.id')
                ->join('variant_option', 'infor_option.id', '=', 'variant_option.infor_option_id')
                ->join('variant_attribute', 'variant_option.varant_attribute_id', '=', 'variant_attribute.id')
                ->join('variant_name', 'variant_attribute.idvariantname', '=', 'variant_name.id')
                ->where('products.id', $id)
                ->groupBy('infor_option.id')
                ->get();
    

        return view('backend.product.product_edit', compact('show_brands','show_categories', 'show_product','show_multi_imgs', 'show_subcate','show_vendor','option_variant'));
    }

    public function UpdateProduct(Request $request){
        $product = products::findOrFail($request->id);;

        if ($request->hasFile('product_thambnail')) {
            File::delete(public_path($product->product_thumnail));

            $fileImg = $request->file('product_thambnail');
            $path = 'upload/products/thambnail';
            $nameimg = Str::random(30).'.'.$fileImg->extension();
            $pathFromImg = public_path($path);
            $fileImg->move($pathFromImg, $nameimg);
            $filePath = $path.'/'.$nameimg;
            $pthimage = $filePath;
            $product->product_thumnail = $pthimage;

        }

        if ($request->hasFile('list_image')) {
            // xóa các ảnh cũ
            $muti_img = multi_imgs::where('product_id', $request->id)->get();
            foreach ($muti_img as $i) {
                File::delete(public_path($i->photo_name));
                // echo $i->photo_name;
            }
            multi_imgs::where('product_id', $request->id)->delete();


        // xử lý multi_images
            for ($i=0; $i < count($request->list_image); $i++) {
                $multi_image = new multi_imgs();
                $fileImg = $request->file('list_image')[$i];
                $path = 'upload/products/multi-image';
                $nameimg = Str::random(30).'.'.$fileImg->extension();
                $pathFromImg = public_path($path);
                $fileImg->move($pathFromImg, $nameimg);
                $filePath = $path.'/'.$nameimg;
                $path_image = $filePath;
                $multi_image->product_id = $request->id;
                $multi_image->photo_name = $path_image;
                $multi_image->save();
            }
        }

        // xử lý infor_option
        if(isset($request->id_infor) && !empty($request->id_infor)){
            for ($i=0; $i < count($request->id_infor); $i++) { 
                # code...
                $infor_op = infor_option::find($request->id_infor[$i]);
                $infor_op->price = $request->price_attribute[$i];
                $infor_op->quantity = $request->quantity_attribute[$i] != '' ? $request->quantity_attribute[$i] : 0;
    
                $infor_op->save();
            }
        }

        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->subcategory_id;
        $product->product_name = $request->product_name;
        $product->product_slug = Str::slug($request->product_name);
        $product->product_code = $request->product_code;
        $product->product_qty = $request->product_qty;
        $product->product_tags = $request->product_tags;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->short_descp = $request->short_descp;
        $product->long_descp = $request->detailed_description;
        $product->vendor_id = $request->vendor_id;
        $product->status = $request->status;

        $product->save();


        return redirect()->route('edit.product', $request->id);
    }


}
 