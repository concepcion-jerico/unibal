<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\LaptopRequest;
use Auth;
use Session;

class CategoryController extends Controller
{
    public function findItems($id) {
    	$category = Category::find($id);
    	$items = $category->items;
        $laptoprequest = LaptopRequest::where('user_id', '=', Auth::user()->id)->where('status_id', '=', '2')->count();

    	return view('items.laptops', compact(['items', 'laptoprequest']));

    }

    public function showCategories() {
    	$categories = Category::all();

    	return view('items.categories', compact('categories'));
    }

    public function addCategory(Request $request) {

    	$category = new Category;
    	$category->name = $request->catname;
    	$category->save();
    	// dd($category);
    	Session::flash("success_message", "Category added successfully");
    	return redirect('/categories');
    }

    public function deleteCategory($id) {
    	$category = Category::find($id);
    	$category->delete();
    	session::flash("success_message", "Category successfully deleted");
    	return redirect("/categories");
    }
}
