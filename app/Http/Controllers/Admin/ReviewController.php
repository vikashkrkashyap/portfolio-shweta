<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends DashboardController
{
    public function showReview()
    {
        $reviews = $this->getReviews();
        return view('dashboard.review', compact('reviews'));
    }

    public function saveReview(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'message' => 'required|min:10'
        ];

        $message = [
            'name.required'    => 'Name field is mandatory',
            'name.min'         => 'Name should be minimum of 3 characters',
            'message.required' => 'Message field is mandatory',
            'message.min'      => 'Message should be minimum of 10 characters'
        ];

        $validator = validator($request->all(), $rules, $message);
        if($validator->fails())
        {
            return response()->json(['success' => false, 'error' => $validator->getMessageBag()]);
        }

        $name = trim($request->input('name'));
        $message = trim($request->input('message'));

        try{
            Review::create([
                'name' => $name,
                'review' => $message,
                'reviewed_at' => date('Y-m-d, H:i:s')
            ]);
        }catch (\Exception $e){
            Log::info('Review submit error website :: '.$e->getMessage());
            return response()->json(['success' => false]);
        }

        return response()->json(['success' => true]);
    }

    public function setStatus($reviewId)
    {
        $review = Review::findOrFail($reviewId);
        $isApproved = $review->is_approved ? 0 : 1;
        $status = $review->is_approved ? "disapproved" : "approved";
        $review->update(['is_approved'=> $isApproved]);

        return redirect()->back()->with('success', "Review $status successfully");
    }

    public function pinReview($reviewId)
    {
        $review = Review::findOrFail($reviewId);
        $isPinned = $review->is_pinned ? 0 :1;
        $status = $review->is_pinned ? "pinned" : "un-pinned";
        $review->update(['is_pinned'=> $isPinned]);

        return redirect()->back()->with('success', "Review $status successfully");
    }

    public function reviewReply(Request $request, $reviewId)
    {
        $review = Review::findOrFail($reviewId);
        $validator = validator($request->all(), ['reply' => 'required'],['reply.required' => 'Review reply field is required']);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'error' => $validator->getMessageBag()
            ]);
        }

        $review->update([
            'reply' => $request->input('reply'),
            'replied_at' => date('Y-m-d, H:i:s')
        ]);

        return response()->json(['success' => true]);
    }
}
