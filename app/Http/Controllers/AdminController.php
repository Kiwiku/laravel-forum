<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Subcategory;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Display admins dashboard
    public function index(){
        if(auth()->user()->id != 1){
            return redirect('/')->with('error', 'Unauthorized page');
        }
        return view('admin.dashboard');
    }

    // Display registered users
    public function users(){
        //
    }

    /*
        <--------- CATEGORIES -------->
    */

    // Add new category
    public function addCategory(){
        //
    }
    // Edit existing category
    public function editCategory(){
        //
    }
    // Delete existing category
    public function deleteCategory(){
        //
    }

    /*
        <--------- SUBCATEGORIES -------->
    */

    // Add new subcategory
    public function addSubcategory(){

    }
    // Edit existing subcategory
    public function editSubcategory(){

    }
    // Delete existing subcategory
    public function deleteSubcategory(){

    }

    /*
        <--------- ROLES -------->
    */

    // Add new role
    public function addRole(){
        //
    }

    // Delete existing role
    public function deleteRole(){
        //
    }

}
