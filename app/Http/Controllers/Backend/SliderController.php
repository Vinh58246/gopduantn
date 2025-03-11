<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use Image;

class SliderController extends Controller
{

      public function AllSlider(){
            // $sliders = Slider::all();
            // $sliderCount = $sliders->count(); // Đếm số lượng slider
            // return view('backend.slider.slider_all', compact('sliders', 'sliderCount'));
            $sliders = Slider::latest()->get();
            return view('backend.slider.slider_all', compact('sliders'));
        //     $sliders = Slider::all();
        // return view('backend.slider.slider_all');
    } // End Method

// form add
    public function AddSlider(){
            return view('backend.slider.slider_add');
    }// End Method

// add
    public function StoreSlider(Request $request){


        if ($request->hasFile('slider_image')) {
            $fileImg = $request->file('slider_image');
            $path = 'upload/slider';
            $nameimg = Str::random(30).'.'.$fileImg->extension();
            $pathFromImg = public_path($path);
            $fileImg->move($pathFromImg, $nameimg);
            $filePath = $path.'/'.$nameimg;
            $slider_image = $filePath;
        }


        Slider::create([
            'title' => $request->slider_title,
            'short_title' => $request->short_title,
            'image' => $slider_image,
        ]);

        return redirect()->route('add.slider');
    }

// form edit
public function EditSlider($id){
    $slider = Slider::findOrFail($id);
    return view('backend.slider.slider_edit', compact('slider'));
}

// edit
public function UpdateSlider(Request $request)
{
    $slider = Slider::findOrFail($request->id);

    // Cập nhật dữ liệu từ request
    $slider->title = $request->slider_title;
    $slider->short_title = $request->short_title;

    // Kiểm tra nếu có file ảnh mới được upload
    if ($request->file('slider_image')) {
        // Xóa ảnh cũ
        if (file_exists($slider->image)) {
            unlink($slider->image);
        }

        // Lưu ảnh mới
        $file = $request->file('slider_image');
        $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/slider/'), $filename);
        $slider->image = 'upload/slider/' . $filename;
    }

    $slider->save();

    return redirect()->route('all.slider')->with('success', 'Slider Updated Successfully');
}


// delete
    public function DeleteSlider($id)
{
    $slider = Slider::findOrFail($id);
    $slider->delete();
    return redirect()->route('all.slider');
}
}
