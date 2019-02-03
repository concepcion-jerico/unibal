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
        $laptoprequest = LaptopRequest::where('user_id', '=', Auth::user()->id)->where('status_id', '=', '2')->count();

    	return view('items.laptops', compact(['items', 'laptoprequest']));

    }
}
