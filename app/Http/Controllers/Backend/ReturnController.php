<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ReturnOrder;

class ReturnController extends Controller
{
    public function index()
    {
        $returnOrders = ReturnOrder::with('order')->get();
        return view('backend.return_order.return_request', compact('returnOrders'));



    }

    public function CompleteReturnRequest()
{
    $completedReturns = ReturnOrder::where('status', 'completed')->with('order')->get();
    return view('backend.return_order.complete_return_request', compact('completedReturns'));

}


    public function create()
    {
        $orders = Order::where('status', 'delivered')->get();
        return view('admin.return_orders.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'reason' => 'required|string|max:255',
        ]);

        ReturnOrder::create([
            'order_id' => $request->order_id,
            'reason' => $request->reason,
            'status' => 'pending',
        ]);

        return redirect()->route('return.request')->with('success', 'Return order created successfully.');
    }

    public function show(ReturnOrder $returnOrder)
    {
        return view('admin.return_orders.order_details', compact('returnOrder'));
    }

    public function edit(ReturnOrder $returnOrder)
    {
        return view('admin.return_orders.edit', compact('returnOrder'));
    }

    public function update(Request $request, ReturnOrder $returnOrder)
    {
        $request->validate([
            'reason' => 'required|string|max:255',
            'status' => 'required|in:pending,completed',
        ]);

        $returnOrder->update([
            'reason' => $request->reason,
            'status' => $request->status,
        ]);

        return redirect()->route('return.request')->with('success', 'Return order updated successfully.');
    }

    public function destroy(ReturnOrder $returnOrder)
    {
        $returnOrder->delete();
        return redirect()->route('return.request')->with('success', 'Return order deleted successfully.');
    }

    public function processReturn(ReturnOrder $returnOrder)
    {
        $returnOrder->update(['status' => 'completed']);

        $order = Order::findOrFail($returnOrder->order_id);
        $order->update(['status' => 'return_completed']);

        return redirect()->route('return.request')->with('success', 'Return request processed successfully.');
    }
}
