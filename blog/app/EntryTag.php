<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryTag extends Model
{
    protected $fillable = array('entry_id', 'tag_id');

    public function tag()
    {
    	return $this->belongsTo('App\Tag');
    }

    public function entry()
    {
    	return $this->belongsTo('App\Entry');
    }
}
