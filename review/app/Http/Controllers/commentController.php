<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\User;

use App\Restaurant;

use Auth;

class commentController extends Controller
{
    public function listComment()
    {
        $comment = Comment::all();

        return view('page.action_admin.restaurant.show',compact('comment'));
    }



    public function postComment(Request $request)
    {
        
        $restaurant = Restaurant::find($request->id);
        $comments->restaurant_id = $request->id;
        $comments->user_id = auth()->user()->id;   
        $comments->content = $request->comment;
        $comments->comments()->save($comments);
        return redirect()->with('thongbao','thành công'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
