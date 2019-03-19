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
		return $this->belongsTo('App\Category','categories_id');
>>>>>>> 7069182f03ac4d76c3eb4ce18c3253a98d21b458
	}
	public function users() {
		return $this->belongsMany('App\User');
	}
	use Rateable;
}
