<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {
	protected $table = 'ratings';
	public function users() {
<<<<<<< HEAD
		return $this->belongsOne('App\User','user_id');
	}
	public function restaurants() {
		return $this->belongsOne('App\User','restaurant_id');
=======
		return $this->belongsOne('App\User', 'user_id');
>>>>>>> ca04c6e1f863dc22a77e98feec2c14e11cd47d2c
	}
	public function restaurant() {
		return $this->belongsOne('App\Restaurant', 'restaurant_id');
	}

}
