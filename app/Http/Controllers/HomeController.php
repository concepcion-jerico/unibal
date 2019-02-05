<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Item;
use App\LaptopRequest;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $items = Item::all();
        /*if status of laptop is already in use for that user*/
  
        $laptoprequest = LaptopRequest::where('user_id', '=', Auth::user()->id)->where('status_id', '=', '2')->count();

        // dd($laptoprequest);
        return view('items.laptops', compact(['items', 'laptoprequest']));
    }

    // public function checkUser() {
    //     $user = User::
    // }
}
