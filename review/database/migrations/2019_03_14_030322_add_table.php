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
