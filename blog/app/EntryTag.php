<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryTag extends Model
{
    protected $fillable = array('entry_id', 'tag_id');

    public function tag()
    {
    	return $this->belongsTo('Tag');
    }

    public function entry()
    {
    	return $this->belongsTo('Entry');
    }
}
