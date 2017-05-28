<?php

namespace App\Http\Controllers;

use App\EntriesService;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function index($page = null)
    {
    	$entries = $service->sortOldEntries();
    	$stories = $service->getEntries($page);
        return view('home');
    }
}
