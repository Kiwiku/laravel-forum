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
        return view('users.displayUsers')->with('users', $users);
    }
}
