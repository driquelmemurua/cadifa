<?php

namespace App;

use App\Entradas;

class Entradas extends Model
{
    public function index()
    {
    	return Entradas::all();
    }

    public function show(Entradas $entrada)
    {
    	return entrada;
    }
}
