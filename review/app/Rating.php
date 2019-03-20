<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {
	protected $table = 'ratings';
	public function users() {

<<<<<<< HEAD
		return $this->belongsOne('App\User', 'user_id');
	}
	public function restaurants() {
		return $this->belongsOne('App\User', 'restaurant_id');

		return $this->belongsOne('App\User', 'user_id');

	}
=======
		return $this->belongsOne('App\User','user_id');
	}
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842
	public function restaurant() {
		return $this->belongsOne('App\Restaurant', 'restaurant_id');
	}

}
