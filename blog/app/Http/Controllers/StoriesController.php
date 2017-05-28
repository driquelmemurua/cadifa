<?php

namespace App\Http\Controllers;

use App\EntriesService;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function index()
    {
    	$page = Input::get('page', 1);
    	$entries = $service->sortOldEntries();
    	$stories = $service->getStories($page);
        return view('home', $entries, $stories);
    }
}
