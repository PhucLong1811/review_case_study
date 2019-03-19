<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingsTable extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up() {
		Schema::create('ratings', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('rating');
			$table->morphs('rateable');
			$table->unsignedInteger('user_id')->index();
			$table->index('rateable_id')->default(1);
			$table->index('rateable_type')->nullable();
			$table->foreign('user_id')->references('id')->on('users');
			$table->unsignedInteger('restaurant_id')->index();
			$table->foreign('restaurant_id')->references('id')->on('restaurants');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down() {
		Schema::drop('ratings');
	}
}
