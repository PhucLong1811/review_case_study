<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {
	protected $table = 'ratings';
	public function users() {
		return $this->belongsOne('App\User');
	}
	public function restaurant() {
		return $this->belongsOne('App\Restaurant');
	}
	protected $fillable = array('rating');
}
