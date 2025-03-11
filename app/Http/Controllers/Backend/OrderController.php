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
    //lấy danh sách đơn hàng đang chờ xử lý
    public function PendingOrder()
    {
        $orders = Order::where('status', 'pending')->get();
        return view('backend.orders.pending_orders', compact('orders'));
    }
    // End Method 

    //xem chi tiết đơn hàng
    public function AdminOrderDetails($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.orders.admin_order_details', compact('order'));
    }// End Method 
    

    // danh sách đơn hàng đã xác nhận
    public function AdminConfirmedOrder()        
    {
        $orders = Order::where('status', 'confirmed')->get();
        return view('backend.orders.confirmed_orders', compact('orders'));
    }
    // Method cap nhat trang thai don hang pending->confirmed
    public function ChangeConfirmedOrder($id)        
    {
        $order = Order::findOrFail($id); // Nếu không tìm thấy sẽ tự động báo lỗi 404
    
        if ($order->status === 'pending') {
            $order->update(['status' => 'confirmed']);
        }
    
        return redirect()->route('admin.confirmed.order');
        
    }


    // End Method 



    public function AdminProcessingOrder()
    {
        $orders = Order::where('status', 'processing')->get();
        return view('backend.orders.processing_orders', compact('orders'));
    } // End Method 

    public function ChangeProcessingOrder($id)        
    {
        $order = Order::findOrFail($id); // Nếu không tìm thấy sẽ tự động báo lỗi 404
    
        if ($order->status === 'confirmed') {
            $order->update(['status' => 'processing']);
        }
    
        return redirect()->route('admin.processing.order');
        
    }


    public function AdminDeliveredOrder()
    {
        $orders = Order::where('status', 'delivered')->get();
        return view('backend.orders.delivered_orders', compact('orders'));
    } // End Method 

    public function ChangeDeliveryOrder($id)        
    {
        $order = Order::findOrFail($id); // Nếu không tìm thấy sẽ tự động báo lỗi 404
    
        if ($order->status === 'processing') {
            $order->update(['status' => 'delivered']);
        }
    
        return redirect()->route('admin.delivered.order');
        
    }
}
