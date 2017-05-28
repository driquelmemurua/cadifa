<?php

namespace App\Http\Controllers;

use App\EntriesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StoriesController extends Controller
{
    public function index(EntriesService $service)
    {
    	$page = Input::get('page', 1);
    	$entries = $service->sortOldEntries();
    	$stories = $service->getStories($page);
        return view('stories', $entries, $stories);
    }
}
