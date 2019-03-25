<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Restaurant;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class commentController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function listComment() {
		$comment = Comment::all();
		$restaurant = Restaurant::all();
		return view('page.action_admin.comment.list', compact('comment', 'restaurant'));
	}

	public function createComment() {
		return view('page.action_admin.restaurant.show');
	}

	public function postComment(Request $request, $restaurantId) {

		$comment = new Comment();
		$comment->restaurant_id = $restaurantId;
		$comment->content = $request->content;
		$comment->user_id = auth()->user()->id;

		$comment->save();

		return redirect()->back();
	}

	public function editComment($id) 
	{
		$category = Category::all();
		$product = Restaurant::find($id);
		$comment_id = $id;
		$comment_user_id = Comment::where('id', $id)->value('user_id');
		$user_id = auth()->user()->id;
		$user_level = User::where('id', $user_id)->value('level');
		$comment_content = Comment::where('id', $id)->value('content');
		if ($user_id == $comment_user_id || $user_level == 1) {
			return view('page.action_admin.comment.edit',compact('comment_content','id','product','category'));
		} else {
			return redirect()->back();
		}
	}
	public function updateComment(request $request, $id) {
		$category = Category::all();
		$product = Restaurant::find($id);
		$comment = Comment::findOrFail($id);
		$comment->content = $request->content;
		$comment->save();
		return view('page.action_admin.restaurant.show',compact('product','category'));
	}

}
