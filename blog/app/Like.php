<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = array('entry_id', 'user_id');

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function entry()
    {
    	return $this->belongsTo('App\Entry');
    }
}
