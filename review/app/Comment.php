<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	protected $table = 'comments';
	public function users() {
		return $this->belongsTo('App\User','user_id');
	}
	public function restaurants() {
		return $this->belongsTo('App\Comment','restaurant_id');
	}
}
