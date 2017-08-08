<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SocialAuthController extends Controller
{
    public function getFbAccessToken()
    {
        $clientId = config('social.facebook.clientId');
        $clientSecret = config('social.facebook.clientSecret');
        $shortToken = config('social.facebook.shortToken');

        $url = "https://graph.facebook.com/v2.8/oauth/access_token?grant_type=fb_exchange_token&client_id=$clientId&client_secret=$clientSecret&fb_exchange_token=$shortToken";
        $client = new Client();
        try{
            $res = $client->request('GET',$url);
            if($res->getStatusCode() == 200) {
              return json_decode($res->getBody(), true);
            }
            else {
                return json_decode($res->getBody(), true);
            }
        }catch (\Exception $e)
        {
            Log::info($e->getMessage());
            return "Error";
        }
    }

    public function getFbFeed()
    {
        $accessToken = config('social.facebook.access_token');
        $url = "https://graph.facebook.com/v2.10/me/feed?access_token=$accessToken";

        $client = new Client();
        try{
            $res = $client->request('GET',$url);
            if($res->getStatusCode() == 200) {
                $response = json_decode($res->getBody(), true);
                $response['code'] = 200;
            }
            else {
                $response = json_decode($res->getBody(), true);
                $response['code'] = 500;
            }
        }catch (\Exception $e){
            Log::info($e->getMessage());

            $response = [
                'success' => false,
                'error' => 403
            ];
        }

        return response()->json($response);
    }
}
