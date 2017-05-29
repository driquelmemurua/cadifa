<?php

namespace App;

use App\Entry;
use Illuminate\Support\Facades\DB;

class EntriesService
{
	
    /**public function sortOldEntries()
    {
    	$entries = array();
        $result = Entry::orderBy('id', 'desc')->get();
        foreach($result as $entry){
        	$year = Carbon::createFromFormat('Y-m-d H:i:s', $entry)->year;
        	$month = Carbon::createFromFormat('Y-m-d H:i:s', $entry)->month;
        	$entries[ $year ][ $month ][ $entry->id ] = $entry;
        }
    }*/

    public function getStories($page, $quantity)
    {
    /*$stories = array();*/
	for($i = 0; $i < $quantity; $i++)
	{   /*$result = Entry::select(DB::raw('count(likes.entry_id) as likes_count'))
                ->join('likes', 'entries.id', '=', 'likes.entry_id')
                ->groupBy('entries.id')
                ->get();*/
        $result = Entry::select(DB::raw('entries.title as entries_title, entries.created_at as creation_date, comments.content as comment_content, stories.content as stories_content, count(likes.entry_id) as likes_count'))
				->join('stories', 'entries.id', '=', 'stories.entry_id')
		    		->leftJoin('likes', 'entries.id', '=', 'likes.entry_id') 
		    		->leftJoin('comments', 'entries.id' ,'=', 'comments.entry_id')
				->orderBy('entries.created_at', 'desc')
		    		->skip($page-1 * $quantity)
				->take($quantity)
                ->groupBy('entries.title', 'entries.id', 'entries.created_at', 'comments.content', 'stories.content')
				->get();
	}
        /* AQUI AGREGAR AL ARREGLO $result, en su última posicion, LA CANTIDAD DE LIKES DE LA ENTRY */

        return $result/*$stories*/;
    }
}
