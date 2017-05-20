<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $fillable = array('entry_id', 'description');

    public function entry()
    {
    	return $this->belongsTo('Entry');
    }

    public function images()
    {
    	return $this->hasMany('DesignImage');
    }
}
