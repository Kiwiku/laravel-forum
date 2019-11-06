<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Add new role
    public function addRole(){
        //
    }

    // Delete existing role
    public function deleteRole(){
        //
    }
}
