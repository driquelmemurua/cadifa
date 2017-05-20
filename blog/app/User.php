<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = array('id', 'name', 'avatar_route');

    public function blogger()
    {
    	return $this->hasOne('Blogger');
    }

    public function likes()
    {
    	return $this->hasMany('Like');
    }

    public function comments()
    {
    	return $this->hasMany('Comment');
    }
}
