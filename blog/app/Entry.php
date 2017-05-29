<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = array('name', 'title');

    public function blogger()
    {
    	return $this->belongsTo('App\Blogger');
    }

    public function design()
    {
    	return $this->hasOne('App\Design');
    }

    public function story()
    {
    	return $this->hasOne('App\Story');
    }

    public function tags()
    {
    	return $this->hasMany('App\EntryTag');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function likes()
    {
    	return $this->hasMany('App\Like');
    }
}
