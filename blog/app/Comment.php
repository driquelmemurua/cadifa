<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('entry_id', 'user_id', 'content');

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function entry()
    {
    	return $this->belongsTo('Entry');
    }
}
