<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;

class BannerController extends Controller
{
    public function AllBanner()
    {
        $banners = Banner::all();
        return view('backend.banner.banner_all', compact('banners'));
    } // End Method 

    public function AddBanner()
    {
        return view('backend.banner.banner_add');
    }// End Method 

    public function storeBanner(Request $request)
    {
        $request->validate([
            'banner_title' => 'required|string|max:255',
            'banner_url' => 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);


        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Kiểm tra nếu thư mục không tồn tại thì tạo mới
            if (!file_exists(public_path('upload/banner/'))) {
                mkdir(public_path('upload/banner/'), 0777, true);
            }

            // Lưu file vào thư mục public/upload/banner/
            $file->move(public_path('upload/banner/'), $fileName);

            // Kiểm tra file đã lưu chưa
            // if (file_exists(public_path('upload/banner/' . $fileName))) {
            //     dd('File đã được lưu tại: ' . public_path('upload/banner/' . $fileName));
            // } else {
            //     dd('File không lưu được.');
            // }
            Banner::create([
                'banner_title' => $request->banner_title,
                'banner_url' => $request->banner_url,
                'banner_image' => $fileName,
            ]);
        }
        return redirect()->route('all.banner')->with('success', 'Banner Added Successfully');

    }

    public function deleteBanner($id)
    {
        // dd('đã tìm ra id thằng này', $id);  
        $banner = Banner::findOrFail($id);
        if ($banner->banner_image) {
            unlink(public_path('upload/banner/' . $banner->banner_image));
        }
        $banner->delete();
        if (file_exists(public_path('upload/banner/' . $banner->banner_image))) {
            dd('File không xóa được');
        } else {
            return redirect()->route('all.banner')->with('success', 'Banner Deleted Successfully');
        }
    }

    public function editBanner($id)
    {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.banner_edit', compact('banner'));
    }

    public function updateBanner(Request $request, $id)
    {

        $request->validate([
            'banner_title' => 'required|string|max:255',
            'banner_url' => 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $fileName = time() . '_' . $file->getClientOriginalName();


            $oldImagePath = public_path($banner->banner_image);

            if(!empty($banner->banner_image) && file_exists($oldImagePath)){
                unlink($oldImagePath);
            }

            $request->banner_image->move(public_path('upload/banner/'), $fileName);
            $banner->banner_image = $fileName;
        }

        $banner->update([
            'banner_title' => $request->banner_title,
            'banner_url' => $request->banner_url,
            'banner_image' => $banner->banner_image,
        ]);
        return redirect()->route('all.banner')->with('success', 'Banner Updated Successfully');
    }

}
