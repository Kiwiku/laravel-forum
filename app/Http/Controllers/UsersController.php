<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display registered users
    public function displayUsers(){
        $users = User::orderBy('created_at', 'desc')->paginate(25);
        if(auth()->user()->role_id != 1){
            return redirect('/')->with('error', 'Unauthorized page');
        }
        return view('users.displayUsers')->with('users', $users);
    }
}
