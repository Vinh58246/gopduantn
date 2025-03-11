<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Carbon\Carbon;
 
class CouponController extends Controller
{
    public function AllCoupon() {
        $coupons = Coupon::all(); 
        return view('backend.coupon.coupon_all', compact('coupons'));
    }
    
    public function AddCoupon(Request $request) {
        if ($request->isMethod('post')) {
            // Validate dữ liệu từ form
            $request->validate([
                'coupon_name' => 'required|string|max:255',
                'coupon_discount' => 'required|numeric|min:0|max:100',
                'coupon_validity' => 'nullable|date|after_or_equal:today',
            ]);
    
            // Lưu dữ liệu vào database
            Coupon::create([
                'name' => $request->coupon_name,
                'discount' => $request->coupon_discount,
                'expiry_date' => $request->coupon_validity,
            ]);
    
           
            return redirect()->route('all.coupon')->with('success', 'Coupon added successfully.');
        }
    
        
        return view('backend.coupon.coupon_add');
    }
    
    public function EditCoupon($id) {
        $coupon = Coupon::findOrFail($id);
        return view('backend.coupon.edit_coupon', compact('coupon'));
    }

    public function UpdateCoupon(Request $request, $id) {
        $coupon = Coupon::findOrFail($id);
        $request->validate([
            'coupon_name' => 'required|string|max:255',
            'coupon_discount' => 'required|numeric|min:0|max:100',
            'coupon_validity' => 'nullable|date|after_or_equal:today',
        ]);

        $coupon->update([
            'name' => $request->coupon_name,
            'discount' => $request->coupon_discount,
            'expiry_date' => $request->coupon_validity,
        ]);

        return redirect()->route('all.coupon')->with('success', 'Coupon updated successfully.');
    }

    public function DeleteCoupon($id) {
        $coupon = Coupon::find($id);
        if (!$coupon) {
            return redirect()->route('all.coupon')->with('error', 'Coupon not found.');
        }

        try {
            $coupon->delete();
            return redirect()->route('all.coupon')->with('success', 'Coupon deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('all.coupon')->with('error', 'Failed to delete coupon. It may be referenced elsewhere.');
        }
    }
}
