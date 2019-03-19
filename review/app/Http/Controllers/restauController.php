<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Restaurant;

class restauController extends Controller
{
    public function listRest()
    {
        $restaurant = Restaurant::all();
        return view('page.action_admin.restaurant.list',compact('restaurant'));
    }

    public function createRest()
    {
        $category = Category::all();
        return view('page.action_admin.restaurant.create',compact('category'));
    }

    public function postRest(Request $request)
    {
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

    public function showRest($id)
    {
        $product = Restaurant::find($id);
        return view('page.action_admin.restaurant.show',compact('product'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
