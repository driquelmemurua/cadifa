<?php

namespace App\Http\Controllers;

use App\EntriesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;

class StoriesController extends Controller
{
    public function index(EntriesService $service)
    {
    	$page = Input::get('page', 1);
    	$entries = $service->sortOldEntries();
    	$quantity = 5; /*A MODO DE PRUEBA, EXIGIMOS SI O SI SOLO 5 stories*/
    	$stories = $service->getStories($page, $quantity);

        return View::make('stories')
        	->with('stories', $stories)
        	->with('entries', $entries);
    }
}
