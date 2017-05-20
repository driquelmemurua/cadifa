<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = array('image_route');

	public function designs()
    {
    	return $this->hasMany('DesignImage');
    }
}
