<?php

namespace App;

use App\Entry;

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
	{
	    $result = Entry::select(DB::raw("SELECT entries.*, entries.created_at as creation_date, comments.content as comment_content))
				->join('stories', 'entries.id', '=', 'stories.entry_id')
		    		->leftJoin('likes', 'entries.id', '=', 'likes.entry_id') 
		    		->leftJoin('comments', 'entries.id' ,'=', 'comments.entry_id')
				/*->orderBy('created_at', 'desc')*/
		    		->skip($page-1 * $quantity)
				->take($quantity)
				->get();
	}
        /* AQUI AGREGAR AL ARREGLO $result, en su última posicion, LA CANTIDAD DE LIKES DE LA ENTRY */

        return $result/*$stories*/;
    }
}
