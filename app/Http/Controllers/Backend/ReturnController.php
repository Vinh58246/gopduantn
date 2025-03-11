<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ReturnController extends Controller
{
    public function ReturnRequest(){
        return view('backend.return_order.return_request');

    } // End Method 

     public function CompleteReturnRequest(){
        return view('backend.return_order.complete_return_request');

    } // End Method 


}
 