<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('backend.admin.all_admin');
    } // End Method 


    public function AddAdmin()
    {
        return view('backend.admin.add_admin');
    } // End Method 
}
