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
        $reviews = Review::where('status', '0')->orderBy('id', 'DESC')->get();
        return view('backend.review.pending_review', compact('reviews'));
    } // End Method 

    public function ReviewApprove($id)
    {

        Review::where('id', $id)->update(['status' => 1]);
        return redirect()->back();
    } // End Method 


    public function PublishReview()
    {
        $reviews = Review::where('status', '1')->orderBy('id', 'DESC')->get();
        return view('backend.review.publish_review', compact('reviews'));
    } // End Method 

    public function ReviewDelete($id)
    {

        Review::findOrFail($id)->delete();

        return redirect()->back();
    } // End Method 








}
