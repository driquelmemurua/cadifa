<?php

namespace App\Http\Controllers;

use App\Entry;
use App\EntriesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;

class DesignsController extends Controller
{
    public function index(EntriesService $service)
    {
        $page = Input::get('page', 1);
        $max = 5; /*A MODO DE PRUEBA, EXIGIMOS SI O SI SOLO 5 stories*/
        $entries = $service->sortEntries();
        $designs = $service->getDesigns($page, $max);
        foreach($designs as $design){
            $design['images'] = $service->getDesignImages($design->id);
            $design['likes'] = $service->getEntryLikes($design->id);
            $design['comments'] = $service->getEntryComments($design->id);
        }
         
        $endpage = ceil(Story::count()/$max);
        return View::make('designs')
            ->with('designs', $designs)
            ->with('entries', $entries)
            ->with('page', $page)
            ->with('endpage', $endpage)
            ->with('type', 'designs');
    }
}
