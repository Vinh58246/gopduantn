<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
 
class SliderController extends Controller
{
      public function AllSlider(){
        return view('backend.slider.slider_all');
    } // End Method 

    public function AddSlider(){
            return view('backend.slider.slider_add');
    }// End Method 

} 
