<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {
	protected $table = 'ratings';
	public function users() {

		return $this->belongsOne('App\User', 'user_id');
	}
	public function restaurants() {
		return $this->belongsOne('App\User', 'restaurant_id');

		return $this->belongsOne('App\User', 'user_id');

	}
	public function restaurant() {
		return $this->belongsOne('App\Restaurant', 'restaurant_id');
	}

}
