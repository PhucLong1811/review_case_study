<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Restaurant extends Model {
	protected $table = 'restaurants';

	public function category() {

<<<<<<< HEAD
		return $this->belongsTo('App\Category', 'categories_id');

=======
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842
		return $this->belongsTo('App\Category', 'categories_id');

	}
	public function users() {
		return $this->belongsMany('App\User');
	}
	public function comments() {
<<<<<<< HEAD
		return $this->hasMany('App\Comment', 'restaurant_id', 'id');
	}
=======
		return $this->hasMany('App\Comment','restaurant_id');
	}

	

>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842
	use Rateable;

}
