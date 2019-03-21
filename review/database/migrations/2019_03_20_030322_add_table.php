<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('restaurants', function (Blueprint $table) {
			$table->unsignedInteger('categories_id')->after('id')->nullable();
			$table->foreign('categories_id')->references('id')->on('categories');
		});
		Schema::table('comments', function (Blueprint $table) {
			$table->unsignedInteger('user_id')->after('id')->nullable();
			$table->foreign('user_id')->references('id')->on('users');
		});
		Schema::table('comments', function (Blueprint $table) {
			$table->unsignedInteger('restaurant_id')->after('id')->nullable();
			$table->foreign('restaurant_id')->references('id')->on('restaurants');
		});

		Schema::table('users', function (Blueprint $table) {
			$table->unsignedInteger('rating_id')->after('id')->nullable();
			$table->foreign('rating_id')->references('id')->on('ratings');
		});

		Schema::table('ratings', function (Blueprint $table) {
			$table->unsignedInteger('restaurant_id')->after('id')->nullable();
			$table->foreign('restaurant_id')->references('id')->on('restaurants');
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
