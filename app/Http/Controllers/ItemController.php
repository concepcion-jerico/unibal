<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\User;
use App\LaptopRequest;
use Session;
use Auth;

class ItemController extends Controller
{
    public function showItems() {
    	$items = Item::all();
        /*if status of laptop is already in use for that user*/
  
        $laptoprequest = LaptopRequest::where('user_id', '=', Auth::user()->id)->where('status_id', '=', '2')->count();

        // dd($laptoprequest);
    	return view('items.laptops', compact(['items', 'laptoprequest']));
    }

    public function showAddItemForm() {
    	$categories = Category::all();
    	return view('items.add_items', compact('categories'));
    }

    public function saveItems(Request $request) {
    	$rules = array
		(
			"name" => "required",
			"serial_number" => "required",
			"description" => "required",
			"status_id" => "required",
			"image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
		);

		$this->validate($request, $rules);

    	$item = new Item;
    	$item->name = $request->name;
    	$item->serial_number = $request->serial_number;
    	$item->description = $request->description;
    	$item->quantity = $request->quantity;
    	$item->status_id = $request->status_id;
    	$item->category_id = $request->category;
    	
    	$image = $request->file('image');
    	$image_name = time(). "." .$image->getClientOriginalExtension();
    	$destination = "images/";
    	$image->move($destination, $image_name);

    	$item->image_path = $destination.$image_name;
    	$item->save();

    	Session::flash("success_message", "Item added successfully");
    	return redirect('/laptops');
    }

    public function itemDetails($id) {
    	$items = Item::find($id);

    	return view('items.item_details', compact('items'));
    }

    public function showEditForm($id) {
    	$item = Item::find($id);
    	$categories = Category::all();
    	return view('items.edit_form', compact('item', 'categories'));
    }

	public function editItem($id, Request $request) {
    	$item = Item::find($id);

	   	$rules = array
    	(
    		"name" => "required",
    		"description" => "required",
    		"serial_number" => "required",
    		"status_id" => "required",
    		"quantity" => "required|numeric|min:0",
    		"image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
    	);

    	//to validate
    	$this->validate($request, $rules);
    	//if validation fails, it would not proceed to the next step

    	$item->name = $request->name;
    	$item->description = $request->description;
    	$item->quantity = $request->quantity;
    	$item->serial_number = $request->serial_number;
    	$item->status_id = $request->status_id;
    	$item->category_id = $request->category;

    	if($request->file('image')!=null) { //if I uploaded an image
	    	$image = $request->file('image');
	    	$image_name = time(). "." .$image->getClientOriginalExtension();
	    	$destination = "images/";
	    	$image->move($destination, $image_name);

	    	$item->image_path = $destination.$image_name;

	    }

    	$item->save();
    	Session::flash("success_message", "Item successfully updated");
    	return redirect("/laptops/$id");

    }

    public function deleteItem($id) {
    	$item = Item::find($id);
    	$item->delete();
    	session::flash("success_message", "Item successfully deleted");
    	return redirect("/laptops");
    }

    public function searchFilterItems(Request $request) {
    	$keyword = $request->searchbar;

    	$items = Item::where('name', 'LIKE', "%{$keyword}%")->get();
        // $laptoprequest = LaptopRequest::where('user_id', '=', Auth::user()->id)->where('status_id', '=', '2')->count();


    	return view('items.laptops', compact(['items', 'laptoprequest']));

    	
    }



}
