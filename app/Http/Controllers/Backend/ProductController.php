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
use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
     public function AllProduct(){
        return view('backend.product.product_all');
    } // End Method 


    public function AddProduct(){
        return view('backend.product.product_add');

    } // End Method 




}
 