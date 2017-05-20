<?php

namespace App\Http\Controllers\Blogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.blogger', ['only' => ['index']]);
    }

    public function index()
    {
        return view('blogger.home');
    }
}
