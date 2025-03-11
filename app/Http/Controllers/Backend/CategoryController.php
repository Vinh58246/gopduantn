<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $categories = Category::latest()->get(); // Lấy danh sách danh mục mới nhất
        return view('backend.category.category_all', compact('categories')); // compact: Truyền dữ liệu Controller sang View
    } // End Method 


    public function AddCategory()
    {
        $categories = Category::latest()->get(); // Lấy danh sách danh mục mới nhất
        return view('backend.category.category_add', compact('categories'));
    } // End Method 


    public function StoreCategory(Request $request)
    {
        $image = $request->file('category_image');
        $name_random = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/category/' . $name_random);
        $manager = new ImageManager(new Driver());
        $img = $manager->read($image);
        $img = $img->resize(120, 120);
        $img->toJpeg(80)->save($path);
        $save_url = $name_random;

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'category_image' => $save_url,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('all.category');
    } // End Method 


    public function EditCategory($id)
    {
        $categories = Category::latest()->get(); // Lấy danh sách danh mục mới nhất
        $category_by_id = Category::firstWhere('id', $id);
        return view('backend.category.category_edit', compact('categories', 'category_by_id'));
    } // End Method 

    public function UpdateCategory(Request $request)
    {


        $cat_id = $request->id;
        $old_image = 'upload/category/' . $request->old_image;

        if ($request->category_image) {

            $image = $request->file('category_image');
            $name_random = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $path = public_path('upload/category/' . $name_random);
            $manager = new ImageManager(new Driver());
            $img = $manager->read($image);
            $img = $img->resize(120, 120);
            $img->toJpeg(80)->save($path);
            $save_url = $name_random;

            if (file_exists($old_image)) {
                unlink($old_image);
            }
            Category::findOrFail($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'category_image' => $save_url,
                'parent_id' => $request->parent_id,
            ]);

            return redirect()->route('all.category');
        } else {
            Category::findOrFail($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'parent_id' => $request->parent_id,
            ]);

            return redirect()->route('all.category');
        }
    } // End Method 


    public function DeleteCategory($id)
    {

        Category::findOrFail($id)->delete();
        return redirect()->route('all.category');
    } // End Method 
}
