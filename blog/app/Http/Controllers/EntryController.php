<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Story;
use Auth;

class EntryController extends Controller
{
	public function __construct()
	{
    	$this->middleware('auth:bloggers');
	}

    public function index()
    {
    	return View('menu');
    }

    public function story()
    {
    	return View('story');
    }

    public function design()
    {
    	return View('design');
    }

    public function newStory(Request $request)
    {

        $entry = new Entry;
        $entry->title = $request->title;
        $entry->blogger_id = Auth::guard('bloggers')->user()->id;
        $entry->save();
                
        $story = new Story;
        $story->entry_id = $entry->id;
        $story->content = $request->content;
        $story->save();

        return redirect(route('stories'));
    }
}
