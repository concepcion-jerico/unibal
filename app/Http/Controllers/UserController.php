<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function showUsers() {
    	$users = User::all();
    	return view('users.user_list', compact('users'));
    }

    public function approveUsers($id) {
    	$user = User::find($id);

    	$user->userstatus_id = "1";
    	$user->save();
    	return redirect('/users');
    }

    public function deactivateUsers($id) {
    	$user = User::find($id);

    	$user->userstatus_id = "2";
    	$user->save();
    	return redirect('/users');
    }
}
