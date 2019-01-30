<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function findItems($id) {
    	$category = Category::find($id);
    	$items = $category->items;

    	return view('items.laptops', compact("items"));

    }
}
