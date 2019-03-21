<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;

class categoryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
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

	public function edit($id) {
		//
	}

	public function update(Request $request, $id) {
		//
	}

	public function destroy($id) {
		//
	}
}
