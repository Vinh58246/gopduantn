<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;
use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function AllProduct()
    {
        $products = Product::all();
        return view('backend.product.product_all', compact('products'));
    } // End Method 

    // add product page
    public function AddProduct()
    {

        return view('backend.product.product_add');
    } // End Method 

    // add product
    public function Storeproduct(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|integer',
            'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
            'product_name' => 'required|string|max:255',
            'product_slug' => 'required|string|max:255|unique:products,product_slug',
            'product_code' => 'required|string|max:255|unique:products,product_code',
            'product_qty' => 'required|integer|min:1',
            'selling_price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'short_descp' => 'required|string',
            'long_descp' => 'required|string',
            'product_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vendor_id' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        // Upload ảnh thumbnail
        if ($request->hasFile('product_thumbnail')) {
            $image = $request->file('product_thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
        } else {
            $imageName = null;
        }

        // Lưu sản phẩm vào database
        Product::create([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => $request->product_slug,
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'product_thumbnail' => $imageName,
            'vendor_id' => $request->vendor_id,
            'status' => $request->status,
        ]);

        return redirect()->route('product.create')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    // delete product
    public function Deleteproduct($id)
    {
        Product::find($id)->delete();
        return redirect()->route('all.product')->with('success', 'Delete Successfully !');
    }

    // update product page
    public function Editproduct($id)
    {
        $product = Product::find($id);
        return view('backend.product.product_edit', compact('product'));
    }
    // update product
    public function Updateproduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'product_name' => $request->product_name,
            'product_slug' => Str::slug($request->product_name),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'status' => $request->status ?? 0,
        ]);

        return redirect()->route('product.list')->with('success', 'Update Successfully !');
    }
}