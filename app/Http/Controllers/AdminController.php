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
        $category = Category::all();
        $subcategory = Subcategory::all();
        if(auth()->user()->id != 1){
            return redirect('/')->with('error', 'Unauthorized page');
        }
        return view('admin.dashboard', ['categories' => $category, 'subcategories' => $subcategory]);
    }

    // Display registered users
    public function users(){
        //
    }

    /*
        <--------- CATEGORIES -------->
    */

    // Display form for adding new category
    public function createCategory(){
        return view('catsub.createCategory');
    }
    // Add new category
    public function storeCategory(Request $request){
        // validate $request
        $this->validate($request, [
            'category_name' => 'required',
        ]);
        // Create new category
        $category = new Category();
        $category_name = $request->input('category_name');
        if(Category::where('category_name', '=', $category_name)->first() != true){
            $category->category_name = $request->input('category_name');
            $category->save();
            return redirect('/admin')->with('success', 'Category created successfully');
        } else {
            return redirect('/admin')->with('error', 'This category already exists');
        }

       
    }
    // Edit existing category
    public function editCategory($id){
        return view('catsub.editCategory')->with('category', Category::find($id));
    }
    public function updateCategory(Request $request, $id){

        $this->validate($request, [
            'category_name' => 'required',
        ]);
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->save();

        return redirect('/admin')->with('success', 'Category edited successfuly');

    }
    // Delete existing category
    public function deleteCategory($id){
        $category = Category::find($id);
        if(!isset($category)){
            return redirect('/admin')->with('error', 'Category does not exist');
        }
        $category->delete();
        Subcategory::where('category_id', '=', $id)->delete();
        return redirect('/admin')->with('success', 'Category removed');
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
