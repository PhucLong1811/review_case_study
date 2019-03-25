<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestaurantsHasUsers extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('restaurants_have_users', function (Blueprint $table) {
			$table->increments('id');
		});
		Schema::table('restaurants_have_users', function (Blueprint $table) {
			$table->unsignedInteger('restaurant_id')->after('id')->nullable()->onDelete('cascade');
			$table->foreign('restaurant_id')->references('id')->on('restaurants');
		});
		Schema::table('restaurants_have_users', function (Blueprint $table) {
			$table->unsignedInteger('user_id')->after('id')->nullable();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}
}
