<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\LaptopRequest;
use Auth;

class StatusController extends Controller
{
    public function showAvailableItems() {
    	$items = Item::where('status_id', '=', '3')->get();
        $laptoprequest = LaptopRequest::where('user_id', '=', Auth::user()->id)->where('status_id', '=', '2')->count();
	     
    	return view('items.laptops', compact(['items', 'laptoprequest']));
    }
}
