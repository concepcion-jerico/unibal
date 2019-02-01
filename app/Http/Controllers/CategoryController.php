<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\LaptopRequest;
use Auth;

class CategoryController extends Controller
{
    public function findItems($id) {
    	$category = Category::find($id);
    	$items = $category->items;
	     $laptoprequest = LaptopRequest::where('status_id', '=', 2)->where('user_id', '=', Auth::user()->id)->get();

    	return view('items.laptops', compact(['items', 'laptoprequest']));

    }
}
