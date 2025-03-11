<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Carbon\Carbon;
 
class CouponController extends Controller
{
    public function AllCoupon(){
        return view('backend.coupon.coupon_all');
    } // End Method 


    public function AddCoupon(){
        return view('backend.coupon.coupon_add');
    }// End Method 


}
 