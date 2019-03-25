<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Category;
use App\Rating;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;

class restauController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function favorite( $id)
	{
		$user = Auth()->user();
		$restaurant= Restaurant::findOrFail($id);
		$user->restaurants()->attach($restaurant);
		 return redirect()->route('home');
	}
	public function showfavorite()
	{
		$user = auth()->user();
		$category = Category::all();    
       $restaurants = $user->restaurants;
       return view('page.user.favorite',compact('restaurants','category'));
	}
	
	public function deleteFravorite($id)
	{
		$user = Auth()->user();
		$restaurant= Restaurant::findOrFail($id);
		$user->restaurants()->detach($restaurant);
		return redirect()->route('home');

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
		$category = Category::all();
		return view('page.action_admin.restaurant.show', compact('product','category'));
	}


	// public function postPost(Request $request) {
	// 	request()->validate(['rate' => 'required']);
	// 	$user_id = Like::find($restaurantId);
	// 	if (!$user_id) {
	// 		$rating = new \willvincent\Rateable\Rating;
	// 		$rating->user_id = auth()->user()->id;
	// 		$rating->restaurant_id = $request->id;
	// 		$rating->rating = $request->rate;
	// 		$restaurant->ratings()->save($rating);
	// 	}

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
