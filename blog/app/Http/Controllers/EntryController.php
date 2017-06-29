<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
