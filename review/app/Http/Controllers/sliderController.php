<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class sliderController extends Controller
{
    
    public function createSlide()
    {
        $slide = Slide::all();
        return view('page.action_admin.slide.create');
    }

    public function postSlide(Request $request)
    {
        $slide = new Slide;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $slide->image = $path;
        }
        $slide->save();
        return redirect()->route('list.Slide');
    }

    public function listSlide()
    {
        $slide = Slide::paginate(4);
        return view('page.action_admin.slide.list',compact('slide'));
    }

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
