<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Session;
use Auth;

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

    public function showEditUsersPage($id) {
        $user = User::find($id);
        $roles = Role::all();
    	return view('users.edit_user', compact(['user', 'roles']));
    }

    public function updateUserInfo($id, Request $request) {
        $user = User::find($id);
        $roles = Role::all();
  
        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'student_id' => ['required', 'string', 'max:9'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:6', 'confirmed'],
            'role_id' => ['required', 'integer'],
        ]);

     
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->student_id = $request->student_id;
            $user->email = $request->email;
            $user->role_id = $request->role_id;

            if($request->newpassword != '' ) {
                if($request->newpassword === $request->password_confirm) {
                    $user->password = Hash::make($request->newpassword);
                } else {
                    Session::flash('password_match', "New Password and Confirm Password fields should match");
                    return view('users.edit_user', compact(['user', 'roles']));
                } 
            }

     
            $user->save();
            Session::flash("user_updated", "User " . $user->student_id." successfully updated");
            return redirect('/users');

       }

    
}
