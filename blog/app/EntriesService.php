<?php

namespace App;

use App\Entry;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EntriesService
{
	
    public function sortOldEntries()
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

    public function getStories($page, $quantity)
    {
        $result = Entry::select(DB::raw('entries.id as id, comments.id as comment_id, entries.title as entries_title, entries.created_at as creation_date, comments.content as comment_content, stories.content as stories_content, count(likes.entry_id) as likes_count'))
			->join('stories', 'entries.id', '=', 'stories.entry_id')
	    	->leftJoin('likes', 'entries.id', '=', 'likes.entry_id') 
	    	->leftJoin('comments', 'entries.id' ,'=', 'comments.entry_id')
			->orderBy('entries.created_at', 'desc')
	    	->skip($page-1 * $quantity)
			->take($quantity)
            ->groupBy('entries.title', 'entries.id', 'entries.created_at', 'comments.content', 'stories.content', 'comment_id')
			->get();
		
        /* AQUI AGREGAR AL ARREGLO $result, en su última posicion, LA CANTIDAD DE LIKES DE LA ENTRY */

        return $result;
    }
}
