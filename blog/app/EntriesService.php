<?php

namespace App;

use App\Entry;

class EntriesService
{
	/*
    public function sortOldEntries()
    {
        
    }*/

    public function getStories($page)
    {
    	$stories = [
    		0 => NULL,
    		1 => NULL,
    		2 => NULL,
    		3 => NULL,
    		4 => NULL,
    	];
        $result = Entry::with('stories', 'likes', 'comments')
        				->orderBy('id', 'desc')
        				->take(5 * $page)
        				->get();
        $end = count($result)-1;
        for($i = $end, $j = 0;($i > 0 && $j < 5); $i--, $j++){
        	$stories [$j] = $result[$i];
        }

        return $stories;
    }
}