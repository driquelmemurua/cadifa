<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('entry_id', 'user_id', 'content');

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function entry()
    {
    	return $this->belongsTo('App\Entry');
    }
}
