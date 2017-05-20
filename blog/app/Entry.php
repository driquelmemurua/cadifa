<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = array('name', 'title');

    public function blogger()
    {
    	return $this->belongsTo('Blogger');
    }

    public function design()
    {
    	return $this->hasOne('Design');
    }

    public function story()
    {
    	return $this->hasOne('Story');
    }

    public function tags()
    {
    	return $this->hasMany('EntryTag');
    }

    public function comments()
    {
    	return $this->hasMany('Comment');
    }

    public function likes()
    {
    	return $this->hasMany('Like');
    }
}
