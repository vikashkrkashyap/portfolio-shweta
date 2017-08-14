<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected function getUserInfo()
    {
        return  UserInfo::orderBy('created_at')->first();
    }

    public function getGalleries($checkLive = false)
    {
        $galleries =  Gallery::orderBy('priority','ASC')
            ->orderBy('updated_at','DESC');
        if($checkLive){
            $galleries =$galleries->where('is_live', 1);
        }

        return $galleries->get();
    }
}
