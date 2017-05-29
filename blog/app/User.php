<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = array('id', 'name', 'avatar_route');

    public function blogger()
    {
    	return $this->hasOne('App\Blogger');
    }

    public function likes()
    {
    	return $this->hasMany('App\Like');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
