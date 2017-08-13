<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends BaseController
{
    public function getMainPage()
    {
        $userInfo = $this->getUserInfo();


        $data = [
            'userInfo' => $userInfo
        ];

        return view('website.portfolio')->with($data);
    }
}
