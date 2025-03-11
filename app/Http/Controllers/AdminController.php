<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
class AdminController extends Controller
{
    public function AdminDashboard()
    {

        return view('admin.index');
    } // End Mehtod

    public function InactiveVendor()
    {
        $inactiveVendors = Vendor::where('status', 'Inactive')->get();
        return view('backend.vendor.inactive_vendor', compact('inactiveVendors'));
    } // End Method


    public function ActiveVendor()
    {
        $activeVendors = Vendor::where('status', 'Active')->get();
        return view('backend.vendor.active_vendor', compact('activeVendors'));
    } // End Method

    public function InactiveVendorDetails($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('backend.vendor.inactive_vendor_details', compact('vendor'));
    } // End Method


    public function ActiveVendorDetails($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('backend.vendor.active_vendor_details', compact('vendor'));
    } // End Method


    public function UpdateVendorStatus($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = $vendor->status == 'Active' ? 'Inactive' : 'Active';
        // $vendor->status = $vendor->status == 'Active' ? 'Inactive' : 'Active';
        // $vendor->status = 'Inactive';
        $vendor->save();

        $path = $vendor->status == 'Active' ? 'inactive.vendor.details' : 'active.vendor.details';
        return redirect()->route($path, $id)->with('success', 'Vendor status updated successfully.');
    }


    public function AllAdmin()
    {
        return view('backend.admin.all_admin');
    } // End Method


    public function AddAdmin()
    {
        return view('backend.admin.add_admin');
    } // End Method
}
