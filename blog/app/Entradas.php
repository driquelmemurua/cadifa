<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
   	public function comentarios()
    {
        return $this->hasMany('App\Comentarios');
    }
}
