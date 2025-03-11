<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        return view('backend.category.category_all');
    } // End Method 


    public function AddCategory()
    {
        return view('backend.category.category_add');
    } // End Method 

    public function subcategoryapi($idpr)
    {
        $detail_news = $categories = Category::where('parent_id', $idpr)->get();
        $js = [
            'status' => 200,
            'msg' => 'Successfully',
            'data'=> $detail_news
        ];
        return response()->json($js, 200);
    } // End Method 





}
