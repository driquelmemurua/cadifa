<?php

namespace App\Http\Controllers;

use App\Story;
use App\EntriesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;

class StoriesController extends Controller
{
    public function index(EntriesService $service)
    {
    	$page = Input::get('page', 1);
        $max = 5; /*A MODO DE PRUEBA, EXIGIMOS SI O SI SOLO 5 stories*/ 
    	$entries = $service->sortEntries();
        $stories = $service->getStories($page, $max);
        foreach($stories as $story){
            $story['likes'] = $service->getEntryLikes($story->id);
            $story['comments'] = $service->getEntryComments($story->id);
        }

        $endpage = ceil(Story::count()/$max);
        return View::make('stories')
        	->with('stories', $stories)
        	->with('entries', $entries)
            ->with('page', $page)
            ->with('endpage', $endpage)
            ->with('type', 'stories');
    }
}
