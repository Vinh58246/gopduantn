<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brands;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use PDOException;

class BrandController extends Controller
{
    public function AllBrand()
    {
        $show_brands = brands::all();
        return view('backend.brand.brand_all',compact('show_brands'));
    } // End Method 


    public function AddBrand()
    {
        return view('backend.brand.brand_add');
    } // End Method 

    public function StoreBrand(Request $rq)
    {

        $rq->validate([
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ], [
            'brand_name.required' => 'Tên sản phẩm không được để trống.',
            'brand_image.required' => 'Vui lòng tải lên hình ảnh sản phẩm.',
            'brand_image.image' => 'Ảnh sản phẩm phải là file hình ảnh.',
        ]);

        $brands = new brands();

        $brand_name = $rq->brand_name;
        
        if ($rq->hasFile('brand_image')) {
            $fileImg = $rq->file('brand_image');
            $path = 'upload/brand';
            $nameimg = Str::random(30).'.'.$fileImg->extension();
            $pathFromImg = public_path($path);
            $fileImg->move($pathFromImg, $nameimg);
            $filePath = $path.'/'.$nameimg;
            $brand_image = $filePath;
        }

        $brands->brand_name = $brand_name;
        $brands->brand_slug = Str::slug($brand_name);
        $brands->brand_image = $brand_image;

        $brands->save();

        return redirect()->route('all.brand');
    } // End Method 

    public function EditBrand($id){
        $detail_brands = brands::where('id', $id)->first();
        return view('backend.brand.brand_edit', compact('detail_brands'));

    }
    public function UpdateBrand(Request $rq){
        $brand = brands::findOrFail($rq->id);

        if ($rq->hasFile('brand_image')) {
            File::delete(public_path($brand->brand_image));
            $fileImg = $rq->file('brand_image');
            $path = 'upload/brand';
            $nameimg = Str::random(30).'.'.$fileImg->extension();
            $pathFromImg = public_path($path);
            $fileImg->move($pathFromImg, $nameimg);
            $filePath = $path.'/'.$nameimg;
            $brand_image = $filePath;
            $brand->brand_image = $brand_image;
        }

        $brand->brand_name = $rq->brand_name;
        $brand->brand_slug = Str::slug($rq->brand_slug);
        $brand->save();

        return redirect()->route('edit.brand', ['id' => $rq->id]);
    }

    public function DeleteBrand($id){
        try{
            $brand = brands::findOrFail($id);
            $imgbrand = $brand->brand_image;
            $brand->delete();
            File::delete(public_path($imgbrand));
            return redirect()->route('all.brand');
        }catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                return redirect()->route('all.brand')->with('errdetele','không xóa nhánh này được, do nhánh này vẫn có trong sản phẩm');
            } else {
                echo "Lỗi: " . $e->getMessage();
            }
        }
    }
}
