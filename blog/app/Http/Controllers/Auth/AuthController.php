<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\Blogger;
use App\User;
use App\AuthService;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleProviderCallback(AuthService $service)
    {
        $account = $service->createOrGetUser(Socialite::driver('facebook')->user());
        if(get_class($account) == 'App\User')
        {
            Auth::loginUsingId($account->id, true);
            return redirect()->to('/');
        }
        else if(get_class($account) == 'App\Blogger')
        {
            Auth::guard('bloggers')->loginUsingId($account->id, true);
            return redirect()->to('/');
        }
        return redirect()->to('auth');
    }

    public function logout()
    {
        
        if(Auth::check())
        {
            Auth()->logout();
        }
        else if (Auth::guard('bloggers')->check())
        {
            Auth()->guard('bloggers')->logout(); 
        }
        return redirect()->to('/');
    }
}