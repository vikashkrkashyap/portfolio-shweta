<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class PortfolioController extends BaseController
{
    public function getMainPage()
    {
        $userInfo = $this->getUserInfo();
        $galleries = $this->getGalleries(true);
        $reviews = $this->getReviews(true);

        $data = [
            'userInfo' => $userInfo,
            'galleries' => $galleries,
            'reviews'  => $reviews
        ];

        return view('website.portfolio')->with($data);
    }

    public function showReview()
    {
        $reviews = $this->getReviews(true);

        return response()->json([
            'success' => true,
            'reviews' => $reviews
        ]);
    }
}
