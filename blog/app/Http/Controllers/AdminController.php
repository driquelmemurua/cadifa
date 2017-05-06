<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

$uri = env('APP_URL', 'http://localhost').':'.env('APP_PORT', '8000').'/api/';
$client = new Client(['base_uri' => $uri]);

class WebController extends Controller
{
	public function index()
    {
        return view('admin');
    }

    public function create()
    {
      	return view('crearEntrada', $uri);
    }

    public function store()
    {
        return redirect('/admin')->with('status', 'Entrada ingresada con exito');
    }

        public function edit($id)
    {
    	$entradas = $client->get('/entradas/'.$id);
      	return view('actualizarEntrada', $uri);
    }

        public function update()
    {
      	return redirect('/admin')->with('status', 'Entrada actualizada con exito');
    }

        public function delete()
    {
      	return redirect('/admin')->with('status', 'Entrada borrada con exito');
    }
}
