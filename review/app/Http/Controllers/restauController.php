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

	public function postPost(Request $request, $id)
	{
		request()->validate(['rate' => 'required']);
		$restaurant = Restaurant::find($request->id);
		$rating = new \willvincent\Rateable\Rating;
		$rating->rating = $request->rate;
		$rating->user_id = Auth()->user()->id;
		$rating->restaurant_id = $request->id;
		$restaurant->ratings()->save($rating);

		return redirect()->back();
	}

	


}
