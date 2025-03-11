<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard()
    {

        return view('admin.index');
    } // End Mehtod 

    public function InactiveVendor()
    {
        return view('backend.vendor.inactive_vendor');
    } // End Method 


    public function ActiveVendor()
    {
        return view('backend.vendor.active_vendor');
    } // End Method 

    public function InactiveVendorDetails()
    {
        return view('backend.vendor.inactive_vendor_details');
    } // End Method 


    public function ActiveVendorDetails()
    {
        return view('backend.vendor.active_vendor_details');
    } // End Method 


    public function AllAdmin()
    {
        $admins = User::all();
        return view('backend.admin.all_admin', compact('admins'));
    } // End Method         


    public function AddAdmin()
    {
        return view('backend.admin.add_admin');
    } // End Method


    // store admin
    public function StoreAdmin(Request $request)
    {
        $request->validate([
            'username' => 'nullable|string|unique:users,username',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:11',
            'address' => 'nullable|string',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,vendor,user'
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('all.admin')->with('success', 'Admin added successfully!');
    }

    // delete
    public function DeleteAdmin(Request $request)
    {
        $admin = User::findOrFail($request->id);
        if (!$admin) {
            return redirect()->back()->with('error', 'Can not find this account');
        }
        $admin->delete();
        return redirect()->route('all.admin')->with('success', 'Delete Successfully!');
    }

    // edit page
    public function EditAdmin(Request $request)
    {
        $admin = User::findOrFail($request->id);
        return view('backend.admin.edit_admin', compact('admin'));
    }

    // update
    public function UpdateAdmin(Request $request, $id)
    {
        $admin = User::findOrFail($id);

        $request->validate([
            'username' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
            'password' => 'nullable|min:6',
            'role' => 'required|in:admin,vendor,user',
        ]);

        // Cập nhật thông tin
        $admin->username = $request->username;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->role = $request->role;

        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('all.admin')->with('success', 'Update Successfully!');
    }
}
