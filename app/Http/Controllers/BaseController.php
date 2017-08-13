<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected function getUserInfo()
    {
        return  UserInfo::orderBy('created_at')->first();
    }
}
