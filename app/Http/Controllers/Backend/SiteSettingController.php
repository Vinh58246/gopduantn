<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Seo;
use Image;

class SiteSettingController extends Controller
{
    public function editSiteSetting() {
        $setting = SiteSetting::first();
        return view('backend.setting.setting_update', compact('setting'));
    }
    

    

    public function UpdateSiteSetting(Request $request, $id)
{
    $setting = SiteSetting::findOrFail($id);
    
    $data = $request->except('logo');

    if ($request->hasFile('logo')) {
        // Xóa logo cũ(níu có)
        if ($setting->logo && file_exists(public_path($setting->logo))) {
            unlink(public_path($setting->logo));
        }

        $image = $request->file('logo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/logo'), $imageName);
        $data['logo'] = 'upload/logo/' . $imageName;
    }

    $setting->update($data);

    return redirect()->route('site.setting')->with('success', 'Site setting updated successfully');
}


    //////////// Seo Setting /////////////
    public function SeoSetting(){
        $seo = Seo::first();
        return view('backend.seo.seo_update', compact('seo'));
    }

    public function UpdateSeoSetting(Request $request, Seo $seo){
        $seo->update($request->all());
        return redirect()->route('seo.setting')->with('success', 'SEO setting updated successfully');
    }
    
}
