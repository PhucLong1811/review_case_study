<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Slide;
use Auth;
use App\Category;
use Illuminate\Http\Request;

class pageController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$slide = Slide::all();
		$restaurant = Restaurant::all();
		$category = Category::all();
		return view('page.user.home', compact('slide', 'restaurant','category'));
	}



	public function LogoutUser() {
		Auth::logout();
		return redirect()->route('home');
	}

	public function search(Request $request) {
		$product = Restaurant::where('name', 'like', '%' . $request->key . '%')->get();
		$category=Category::all();
		return view('page.user.search', compact('product','category'));
	}

	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
