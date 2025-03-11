<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;
use App\Models\User;

class ReportController extends Controller
{
    public function ReportView(){
        return view('backend.report.report_view');
    } // End Method 

    public function OrderByUser(){
        return view('backend.report.report_by_user');
    }// End Method 

}
 