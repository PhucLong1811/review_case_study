<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Restaurant;
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

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function createComment() {
		return view('page.action_admin.restaurant.show');
	}

<<<<<<< HEAD
	public function postComment(Request $request, $restaurantId) {

		$comment = new Comment();
		$comment->restaurant_id = $restaurantId;
		$comment->content = $request->content;
		$comment->user_id = auth()->user()->id;

		$comment->save();

		return redirect()->back();
	}
=======
use App\Restaurant;

use Auth;

class commentController extends Controller
{
    public function listComment()
    {
        $comment = Comment::all();

        return view('page.action_admin.restaurant.show',compact('comment'));
    }

    public function createComment()
    {
        return view('page.action_admin.restaurant.show');
    }

    public function postComment(Request $request,$id)
    {
        $idrestaurant = $id;
        $restaurant = Restaurant::find($id);
        $comments->restaurant_id = $idrestaurant;
        $comments->user_id = Auth()->user()->id;   
        $comments->content = $request->comment;
        $comments->save();
        return redirect()->with('thongbao','thành công'); 
    }
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
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
