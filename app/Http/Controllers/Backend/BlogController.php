<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    // public function AllBlogCateogry(){
    //     return view('backend.blog.category.blogcategroy_all');

    // } // End Method

    // public function AddBlogCateogry(){
    //     return view('backend.blog.category.blogcategroy_add');
    // } // End Method


    //////////////////// Blog Post Methods //////////////////


 public function AllBlogPost(){
    $blogposts = BlogPost::latest()->get();
    return view('backend.blog.post.blogpost_all', compact('blogposts'));
        // return view('backend.blog.post.blogpost_all');

    } // End Method


    public function AddBlogPost(){
        $blogcategory = BlogCategory::orderBy('id', 'DESC')->get();
        return view('backend.blog.post.blogpost_add', compact('blogcategory'));
    } // End Method


    public function StoreBlogPost(Request $request)
    {
        $data = new BlogPost();
        $data->category_id = $request->category_id;
        $data->title = $request->post_title;
        $data->blog_short_decs = $request->post_short_description;
        $data->blog_long_decs = $request->detailed_description;

        if ($request->file('post_image')) {
            $file = $request->file('post_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $data->image = 'upload/blog_images/' . $filename;
        }

        $data->save();
        return redirect()->route('admin.blog.post')->with('success', 'Blog post added successfully.');
    } // End Method

    // Hiển thị trang sửa bài viết
    public function EditBlogPost($id)
    {
        $blogpost = BlogPost::findOrFail($id);
        $blogcategory = BlogCategory::orderBy('id', 'DESC')->get();
        return view('backend.blog.post.blogpost_edit', compact('blogpost', 'blogcategory'));
    }

    // Xử lý cập nhật bài viết
    public function UpdateBlogPost(Request $request)
    {
        $data = BlogPost::findOrFail($request->id);
        $data->category_id = $request->category_id;
        $data->title = $request->post_title;
        $data->blog_short_decs = $request->post_short_description;
        $data->blog_long_decs = $request->detailed_description;

        if ($request->file('post_image')) {
            $file = $request->file('post_image');

            // Xóa ảnh cũ nếu có
            if (File::exists(public_path($request->old_image))) {
                File::delete(public_path($request->old_image));
            }

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $data->image = 'upload/blog_images/' . $filename;
        }

        $data->save();
        return redirect()->route('admin.blog.post')->with('success', 'Blog post updated successfully.');
    }

    // Xóa bài viết
    public function DeleteBlogPost($id)
    {
        $blogpost = BlogPost::findOrFail($id);

        // Xóa ảnh nếu có
        if (File::exists(public_path($blogpost->image))) {
            File::delete(public_path($blogpost->image));
        }

        $blogpost->delete();
        return redirect()->route('admin.blog.post')->with('success', 'Blog post deleted successfully.');
    }
}
