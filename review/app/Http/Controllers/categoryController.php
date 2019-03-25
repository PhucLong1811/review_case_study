<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;

class categoryController extends Controller {

	public function listCate() {
		$cate = Category::all();
		return view('page.action_admin.category.list', compact('cate'));
	}

	public function createCate() {
		return view('page.action_admin.category.create');
	}

	public function postCate(Request $request) {
		$category = new Category;
		$category->name = $request->name;
		$category->save();
		return redirect()->back();
	}

	public function show($id) {
		$categories_id=$id;
		$category = Category::all();
		$restaurant = Restaurant::findOrFail($categories_id)->get();
		return view('page.user.category',compact('category','restaurant','categories_id'));

	}

	public function editCate($id) 
	{
		$categories = Category::find($id);
		return view('page.action_admin.category.edit',compact('categories'));
	}

	public function updateCate(Request $request, $id) 
	{
		$categories = Category::find($id);
		$categories->name = $request->name;
		$categories->save();
		return redirect()->route('list.Category');
	}

	public function destroy($id) {
		//
	}
}
