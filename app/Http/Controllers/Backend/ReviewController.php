<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Image;

class ReviewController extends Controller
{
    public function PendingReview()
    {
        return view('backend.review.pending_review');
    } // End Method 


    public function PublishReview()
    {
        return view('backend.review.publish_review');
    } // End Method 








}
