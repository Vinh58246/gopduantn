<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;

class BannerController extends Controller
{
     public function AllBanner(){
        return view('backend.banner.banner_all');
    } // End Method 

 public function AddBanner(){
            return view('backend.banner.banner_add');
    }// End Method 

}
 