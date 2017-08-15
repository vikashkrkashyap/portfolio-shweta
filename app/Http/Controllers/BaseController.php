<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            $galleries =$galleries->where('is_live', 1)->take(3);
        }

        return $galleries->get();
    }

    public function getImage($title, $image)
    {
        $path = storage_path('gallery').'/'.$title.'/'. $image;
        if (file_exists($path)) {

            $file = File::get($path);
            $type = File::mimeType($path);

            $response = response()->make($file, 200);
            $response->header("Content-Type", $type);
            return $response;
        }
    }
}
