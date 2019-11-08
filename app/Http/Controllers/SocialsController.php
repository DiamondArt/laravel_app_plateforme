<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;

class SocialsController extends Controller
{
    //

    public function auth($provider)
    {
    return SocialAuth::authorize($provider);
    }
    public function auth_callback($provider)
    {
    SocialAuth::login($provider,function($user,$detail){

        $user->email= $detail->email;
        $user->password= $detail->access_token;
        $user->name= $detail->full_name;
        $user->save();
    });
    return redirect('dash');
    }
}
