<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blogger extends Authenticatable
{
	protected $fillable = array('id');

    public function user()
    {
    	return $this->belongsTo('App\User', 'id', 'id');
    }

    public function socialNetworks()
    {
    	return $this->hasMany('App\BloggerSocialNetwork');
    }

    public function entries()
    {
    	return $this->hasMany('App\Entry');
    }
}
