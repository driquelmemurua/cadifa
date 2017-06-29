<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $fillable = array('name', 'icon_route', 'url');

    public function bloggers()
    {
    	return $this->hasMany('App\BloggerSocialNetwork');
    }
}
