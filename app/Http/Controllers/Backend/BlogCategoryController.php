<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Image;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory()
    {
        $categories = BlogCategory::latest()->get();
        return view('backend.blog.category.blogcategory_all', compact('categories'));
        // return view('backend.category.category_all');
    } // End Method


    public function AddBlogCategory()
    {

        return view('backend.blog.category.blogcategory_add');
    } // End Method

    public function StoreBlogCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:blog_categories|max:255',
        ]);

        BlogCategory::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('admin.blog.category')->with('success', 'Thêm danh mục thành công!');
    } // End Method

    // public function EditBlogCategory($id)
    // {
    //     $category = BlogCategory::findOrFail($id);
    //     return view('backend.blog.category.blogcategory_edit', compact('category'));
    // } // End Method

    public function EditBlogCategory($id)
    {
        $category = BlogCategory::find($id);

        if (!$category) {
            abort(404, "Category Not Found");
        }

        return view('backend.blog.category.blogcategory_edit', compact('category'));
    }

    // public function UpdateBlogCategory(Request $request, $id)
    // {
    //     $request->validate([
    //         'category_name' => 'required|max:255|unique:blog_categories,category_name,' . $id,
    //     ]);

    //     $category = BlogCategory::findOrFail($id);
    //     $category->update([
    //         'category_name' => $request->category_name,
    //     ]);

    //     return redirect()->route('admin.blog.category');
    // } // End Method

    public function UpdateBlogCategory(Request $request, $id)
{
    $request->validate([
        'blog_category_name' => 'required|max:255|unique:blog_categories,category_name,' . $id,
    ]);

    $category = BlogCategory::find($id);

    if (!$category) {
        return redirect()->route('admin.blog.category')->with('error', 'Category not found!');
    }

    $category->update([
        'category_name' => $request->blog_category_name,
    ]);

    return redirect()->route('admin.blog.category')->with('success', 'Cập nhật danh mục thành công!');
}

    public function DeleteBlogCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();
        return redirect()->route('admin.blog.category');
    } // End Method




}
