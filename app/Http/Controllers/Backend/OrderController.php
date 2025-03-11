<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem; 
use App\Models\Product; 
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

class OrderController extends Controller
{
    public function PendingOrder(){
        return view('backend.orders.pending_orders');
    } // End Method 


     public function AdminOrderDetails(){
        return view('backend.orders.admin_order_details');
    }// End Method 


     public function AdminConfirmedOrder(){
        return view('backend.orders.confirmed_orders');
    } // End Method 


 public function AdminProcessingOrder(){
        return view('backend.orders.processing_orders');
    } // End Method 


    public function AdminDeliveredOrder(){
        return view('backend.orders.delivered_orders');
    } // End Method 

 
}
 