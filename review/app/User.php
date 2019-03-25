<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    public function comment() {
		return $this->hasMany('App\Comment');
	}
	public function restaurants() {
		return $this->belongsToMany('App\Restaurant','restaurants_have_users');
	}
	public function ratings() {
		return $this->hasOne('App\Rating');
	}
}
