<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function AllBrand()
    {
        return view('backend.brand.brand_all');
    } // End Method 


    public function AddBrand()
    {
        return view('backend.brand.brand_add');
    } // End Method 

}
