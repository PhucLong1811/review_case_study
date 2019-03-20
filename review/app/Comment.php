<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	protected $table = 'comments';
	public function users() {
		return $this->belongsTo('App\User', 'user_id');
	}
<<<<<<< HEAD
	public function restaurants() {
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
	}
=======
	
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842
}
