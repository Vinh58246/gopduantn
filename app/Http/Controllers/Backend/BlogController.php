<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Image;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function AllBlogCateogry(){
        return view('backend.blog.category.blogcategroy_all');

    } // End Method 

    public function AddBlogCateogry(){
        return view('backend.blog.category.blogcategroy_add');
    } // End Method 


    //////////////////// Blog Post Methods //////////////////


 public function AllBlogPost(){
        return view('backend.blog.post.blogpost_all');

    } // End Method 


    public function AddBlogPost(){
        return view('backend.blog.post.blogpost_add');
    } // End Method 

}
 