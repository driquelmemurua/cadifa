<?php

namespace App;

use App\Entry;

class EntriesService
{
	
    public function sortOldEntries()
    {
    	$entries = array();
        $result = Entry::orderBy('id', 'desc')->all();
        foreach($result as $entry){
        	$year = Carbon::createFromFormat('Y-m-d H:i:s', $entry)->year;
        	$month = Carbon::createFromFormat('Y-m-d H:i:s', $entry)->month;
        	$entries[ $year ][ $month ][ $entry->id ] = $entry;
        }
    }

    public function getStories($page)
    {
    	$stories = array();
        $result = Entry::with('stories', 'likes', 'comments')
        				->orderBy('id', 'desc')
        				->take(5 * $page)
        				->get();
        $end = count($result)-1;
        for($i = $end, $j = 0;($i > 0 && $j < 5); $i--, $j++){
        	$stories[$j] = $result[$i];
        }

        return $stories;
    }
}