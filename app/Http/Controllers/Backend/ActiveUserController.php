<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ActiveUserController extends Controller
{
    //user
    public function AllUser()
    {
        $users = User::where('role', 'user')->get();
        return view('backend.user.user_all_data', compact('users'));
    }


    public function editUser($id)
    {
        $user = User::find($id);
        return view('backend.user.user_edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric',
            'role' => 'required|in:admin,vendor,user',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate ảnh
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('photo')) {
            //xoá ảnh cũ nếu có trong file
            if (!empty($user->photo) && file_exists(public_path('upload/user_images/' . $user->photo))) {
                unlink(public_path('upload/user_images/' . $user->photo));
            }

            //lưu ảnh mới
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images/'), $fileName);

            //cập nhật ảnh mới
            $user->photo = $fileName;

            //cập nhật các thông tin còn lại
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'status' => $request->status,
                'photo' => $user->photo,
            ]);
        } else {
            //cập nhật các thông tin còn lại
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'status' => $request->status,
            ]);
        }


        return redirect()->route('all-user')->with('success', 'User Updated Successfully');
    }

    public function delelteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('all-user')->with('success', 'User Deleted Successfully');
    }




    //vendor
    public function AllVendor()
    {
        $vendors = User::where('role', 'vendor')->get();
        return view('backend.user.vendor_all_data', compact('vendors'));
    }

    public function editVendor($id)
    {
        $vendors = User::find($id);
        return view('backend.user.vendor_edit', compact('vendors'));
    }

    public function updateVendor(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric',
            'role' => 'required|in:admin,vendor,user',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate ảnh
        ]);

        $vendors = User::findOrFail($id);

        if ($request->hasFile('photo')) {
            //xoá ảnh cũ nếu có trong file
            if (!empty($user->photo) && file_exists(public_path('upload/vendor_images/' . $vendors->photo))) {
                unlink(public_path('upload/vendor_images/' . $vendors->photo));
            }

            //lưu ảnh mới
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/vendor_images/'), $fileName);

            //cập nhật ảnh mới
            $vendors->photo = $fileName;

            //cập nhật các thông tin còn lại
            $vendors->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'status' => $request->status,
                'photo' => $vendors->photo,
            ]);
        }


        return redirect()->route('all-vendor')->with('success', 'Vendor Updated Successfully');
    }

    public function delelteVendor($id)
    {
        $vendors = User::findOrFail($id);
        $vendors->delete();
        return redirect()->route('all-vendor')->with('success', 'Vendor Deleted Successfully');
    }



}
