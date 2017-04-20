<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
   	public function entrada()
    {
        return $this->belongsTo('App\Entradas');
    }
}
