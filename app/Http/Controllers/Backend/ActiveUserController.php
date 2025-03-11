<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ActiveUserController extends Controller
{
    public function AllUser(){
        return view('backend.user.user_all_data');

    } // End Mehtod 

    public function AllVendor(){
        return view('backend.user.vendor_all_data');

    } // End Mehtod 



} 
