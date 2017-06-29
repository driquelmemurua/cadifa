<?php

namespace App;

use App\Entry;
use App\Image;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EntriesService
{
	
    public function sortEntries()
    {
    	$entries = array(array(array()));
        $result = Entry::orderBy('id', 'desc')->get();
        foreach($result as $entry)
        {
        	$year = Carbon::parse($entry->created_at)->year;
        	$month = Carbon::parse($entry->created_at)->month;
        	$entries[ $year ][ $month ][ $entry->id ] = $entry;
        }

        return $entries;
    }

    public function getStories($page, $max)
    {
        $result = Entry::select('entries.id', 'entries.title', 'entries.created_at as creation_date', 'stories.content')
                        ->join('stories', 'entries.id', '=', 'stories.entry_id')
                        ->skip($page-1 * $max)
                        ->take($max)
                        ->get();

        return $result;
    }

    public function getDesigns($page, $max)
    {
        $result = Entry::select('entries.id', 'entries.title', 'entries.created_at as creation_date', 'designs.description')
                        ->join('designs', 'entries.id', '=', 'designs.entry_id')
                        ->skip($page-1 * $max)
                        ->take($max)
                        ->get();

        return $result;
    }

    public function getEntryLikes($id)
    {
        $result = Entry::join('likes', 'entries.id', '=', 'likes.entry_id')
                        ->where('entries.id', $id)
                        ->count();
        
        return $result;
    }

    public function getEntryComments($id)
    {
        $result = Entry::select('users.name', 'users.avatar_route', 'comments.content')
                        ->join('comments', 'entries.id', '=', 'comments.entry_id')
                        ->join('users', 'users.id', '=', 'comments.user_id')
                        ->where('entries.id', $id)
                        ->get();
        
        return $result;
    }

    public function getDesignImages($id)
    {
        $result = Entry::select('images.image_route')
                        ->join('design_images', 'entries.id', '=', 'design_images.design_id')
                        ->join('images', 'images.id', '=', 'design_images.image_id')
                        ->where('entries.id', $id)
                        ->get();
        return $result;
    }
}
