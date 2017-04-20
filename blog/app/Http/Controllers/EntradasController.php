<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entradas;

class EntradasController extends Controller
{

    public function index()
    {
        return Entradas::all();
    }

    public function show($id)
    {
        return Entradas::find($id);
    }

    public function store(Request $request)
    {
        $entrada = new Entrada;

        $entrada->id_administrador = request('id_administrador');

        $entrada->titulo = request('titulo');

        $entrada->ruta = request('ruta');

        $entrada->save();

        return response(201);
    }

    public function update($id, $titulo = null)
    {
        if($titulo)
        {
            $entrada = Entradas::find($id);
            $entrada->titulo = $titulo;
            return response(200);
        }
        return response(304);
    }

    public function delete($id)
    {
        $entrada = Entradas::find($id);
        $entrada->delete();
        return response(200);
    }
}
