<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display registered users
    public function displayUsers(){
        echo 'Hello world!';
    }
}
