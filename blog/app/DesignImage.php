<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignImage extends Model
{
    protected $fillable = array('design_id', 'image_id');

   	public function design()
    {
    	return $this->belongsTo('Design');
    }

   	public function image()
    {
    	return $this->belongsTo('Image');
    }
}
