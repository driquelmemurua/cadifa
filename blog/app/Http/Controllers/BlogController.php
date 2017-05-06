<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

$uri = env('APP_URL', 'http://localhost') . ':' . env('APP_PORT', '8000') . '/api/';
$client = new Client(['base_uri' => $uri]);

class BlogController extends Controller
{
	public function index()
    {
    	//$entradas = $client->get('/entradas/comentarios');
        //return view('index', $entradas);
    }

    public function show($id)
    {
    	$entrada = $client->get('/entradas/'.$id.'/comentarios');
      	return view('mostrarEntrada', $entrada);
    }
}
