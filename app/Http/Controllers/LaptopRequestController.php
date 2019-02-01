<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaptopRequest;
use App\Item;
use Auth;
use Session;

class LaptopRequestController extends Controller
{
    public function showRequestPage($id) {
    	// $requests = LaptopRequest::all();
    	$item = Item::find($id);

    	return view('requests.request_page', compact('item'));
    }

    public function submitRequest($id, Request $request) {
    	$laptoprequest = new LaptopRequest;

    	$laptoprequest->user_id = Auth::user()->id;
    	$laptoprequest->status_id = 1; //status is set as default = Pending request
    	$laptoprequest->item_id = $request->item_id;
    	$laptoprequest->save();

    	//to update in items table the status id of this item
    	$item = Item::find($id);
    	$item->status_id = 1;
    	$item->save(); 

    	Session::flash("request_sent", "Request successfully sent for approval");
    	
    	return view('requests.request_page', compact('item'));


    }

    public function showUserRequests() {
    	// $laptoprequests = LaptopRequest::all();
    	$approved = LaptopRequest::where('status_id', '=', '2')->get();
    	$rejected = LaptopRequest::where('status_id', '=', '4')->get();
    	$pending = LaptopRequest::where('status_id', '=', '1')->get();

    	return view('requests.user_requests', compact(['rejected', 'approved', 'pending']));
    }

    public function approveUserRequest($id, Request $request) {
    	$laptoprequest = LaptopRequest::find($id);

    	$laptoprequest->status_id = 2; //after approval, status will change to already in use
    	$laptoprequest->save();

    	$item = Item::find($request->item_id);
    	$item->status_id = 2;
    	$item->save();

        // return redirect('/user_requests');
    	return redirect('/history');

    }

    public function rejectUserRequest($id, Request $request) {
    	$laptoprequest = LaptopRequest::find($id);

    	$laptoprequest->status_id = 4; //after rejection, status will change to rejected
    	$laptoprequest->save();

    	$item = Item::find($request->item_id);
    	$item->status_id = 3; //item will become available for use
    	$item->save();

        // return redirect('/user_requests');
    	return redirect('/history');

    }


    public function showHistory() {
        // $history = LaptopRequest::whereIn('status_id', ['2','4', '6', '5'])->get();
        $history = LaptopRequest::all();

        return view('requests.history', compact('history'));
    }

	public function showHistoryUser() {
		$history = LaptopRequest::where('user_id', '=', Auth::user()->id)->get();
        // dd(Auth::user()->id);
        return view('requests.history', compact('history'));
    }

    public function returnItem($id, Request $request) {
        $laptoprequest = LaptopRequest::find($id);

        $laptoprequest->status_id = 6; //when user clicks return button, status will change to pending return confirmation
        $laptoprequest->save();

        return redirect('/history/user');
    }

    public function confirmReturnItem($id, Request $request) {
        $laptoprequest = LaptopRequest::find($id);

        $laptoprequest->status_id = 5; //when admin clicks confirm return button, status will change to RETURNED
        $laptoprequest->save();

        $item = Item::find($request->item_id);
        $item->status_id = 3; //item will become available for use
        $item->save();

        return redirect('/history');
    }
  

}
