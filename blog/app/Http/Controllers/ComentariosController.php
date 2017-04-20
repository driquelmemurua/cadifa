<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentarios;

class Comentarios extends Controller
{
    public function index()
    {
        return Comentarios::with(['usuario'])->get();
    }

    public function show($id)
    {
        return Comentarios::with(['usuario'])
        ->where('usuario_id', $id)
        ->get();
    }
}
