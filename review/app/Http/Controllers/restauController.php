<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Category;
use App\Rating;
use App\Restaurant;
use Illuminate\Http\Request;

class restauController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function listRest() {
		$restaurant = Restaurant::all();
		return view('page.action_admin.restaurant.list', compact('restaurant'));
	}

	public function createRest() {
		$category = Category::all();
		return view('page.action_admin.restaurant.create', compact('category'));
	}

	public function postRest(Request $request) {
		$restaurant = new Restaurant;
		$restaurant->name = $request->name;
		$restaurant->description = $request->description;
		$restaurant->address = $request->address;
		$restaurant->phone = $request->phone;
		$restaurant->categories_id = $request->category_id;

		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('images', 'public');
			$restaurant->image = $path;
		}
		$restaurant->save();
		return redirect()->route('list.Restaurant');
	}


	public function showRest($id) {
		$product = Restaurant::find($id);
		return view('page.action_admin.restaurant.show', compact('product'));
	}

<<<<<<< HEAD
	public function postPost(Request $request) {
		request()->validate(['rate' => 'required']);
		$user_id = Like::find($restaurantId);
		if (!$user_id) {
			$rating = new \willvincent\Rateable\Rating;
			$rating->user_id = auth()->user()->id;
			$rating->restaurant_id = $request->id;
			$rating->rating = $request->rate;
			$restaurant->ratings()->save($rating);
		}
=======
	public function postPost(Request $request, $id)
	{
		request()->validate(['rate' => 'required']);
		$restaurant = Restaurant::find($request->id);
		$rating = new \willvincent\Rateable\Rating;
		$rating->rating = $request->rate;
		$rating->user_id = Auth()->user()->id;
		$rating->restaurant_id = $request->id;
		$restaurant->ratings()->save($rating);
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842

		return redirect()->back();
	}

	


}
