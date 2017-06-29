<?php

namespace App\Http\Controllers;

use App\Blogger;
use Illuminate\Http\Request;
use View;

class ContactController extends Controller
{
    public function index()
    {
    	$bloggers = Blogger::with('user')->get();

    	return View::make('contact')->with('bloggers', $bloggers);
    }
}
