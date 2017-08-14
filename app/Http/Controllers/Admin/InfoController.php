<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class InfoController extends DashboardController
{
    public function showInfo()
    {
        $userInfo = $this->getUserInfo();
        return view('dashboard.home', compact('userInfo'));
    }

    public function editInfo()
    {
        $userInfo = $this->getUserInfo();
        return view('dashboard.edit_info', compact('userInfo'));
    }

    public function updateInfo(Request $request)
    {
        $rules = [
            'about' => 'required|min:50',
            'facebook_url' => 'required|url',
            'instagram_url' => 'required|url',
            'sayat_url' => 'required|url',
        ];

        $this->validate($request, $rules);

        $userInfo = $this->getUserInfo();
        $data = [
            'about' => $request->input('about'),
            'facebook_url' => $request->input('facebook_url'),
            'instagram_url' => $request->input('instagram_url'),
            'sayat_url' => $request->input('sayat_url')
        ];
        if($userInfo) {
            $userInfo->update($data);
        }
        else {
            UserInfo::create($data);
        }

        return redirect()->route('dashboard.info')
            ->with('success', 'Information updated successfully');

    }
}
