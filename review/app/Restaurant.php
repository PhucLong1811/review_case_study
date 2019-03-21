<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Restaurant extends Model {
	protected $table = 'restaurants';

	public function category() 
	{
		return $this->belongsTo('App\Category', 'categories_id');

	}
	public function users() 
	{
		return $this->belongsMany('App\User');
	}
	public function comments() 
	{

		return $this->hasMany('App\Comment', 'restaurant_id', 'id');
	}
use Rateable;
}






