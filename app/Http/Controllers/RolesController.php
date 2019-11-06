<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display roles
    public function displayRoles(){
        $roles = Roles::all();
        if(auth()->user()->role_id != 1){
            return redirect('/')->with('error', 'Unauthorized page');
        }
        return view('roles.display')->with('roles', $roles);
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
