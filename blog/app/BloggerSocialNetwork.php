<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloggerSocialNetwork extends Model
{
    protected $fillable = array('blogger_id', 'social_network_id', 'username');

    public function blogger()
    {
    	return $this->belongsTo('Blogger');
    }

    public function socialNetwork()
    {
    	return $this->belongsTo('SocialNetwork');
    }
}
