<?php

namespace App\Http\Controllers;

use App\EntriesService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$entries = $service->sortOldEntries(Socialite::driver('facebook')->user());
        return view('home');
    }
}
