<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Seo;
use Image;

class SiteSettingController extends Controller
{
    public function SiteSetting(){
        return view('backend.setting.setting_update');

    } // End Method 

    //////////// Seo Setting /////////////

 public function SeoSetting(){
        return view('backend.seo.seo_update');
    } // End Method 

}
 