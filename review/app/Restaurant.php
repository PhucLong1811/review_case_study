<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model {
	protected $table = 'restaurants';

	public function category() {
		return $this->belongsTo('App\Category','categories_id');
	}
	public function users() {
		return $this->belongsMany('App\User');
	}
	
}
