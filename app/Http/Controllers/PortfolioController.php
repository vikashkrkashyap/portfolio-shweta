<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends BaseController
{
    public function getMainPage()
    {
        $userInfo = $this->getUserInfo();
        $galleries = $this->getGalleries(true);

        $data = [
            'userInfo' => $userInfo,
            'galleries' => $galleries
        ];

        return view('website.portfolio')->with($data);
    }
}
