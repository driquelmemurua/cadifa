<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = array('entry_id', 'content');

    public function entry()
    {
    	return $this->belongsTo('App\Entry');
    }
}
