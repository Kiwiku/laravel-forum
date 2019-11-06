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
        if(auth()->user()->role_id != 1){
            return redirect('/')->with('error', 'Unauthorized page');
        }
        return view('admin.dashboard', ['categories' => $category, 'subcategories' => $subcategory]);
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
    public function createSubcategory(){
        $category = Category::pluck('category_name', 'category_id');
        return view('catsub.createSubcategory')->with('categories', $category);
    }
    public function storeSubcategory(Request $request){
        // validate $request
        $this->validate($request, [
            'subcategory_name' => 'required',
            'category_name' => 'required',
        ]);
        // Create new category
        $subcategory = new Subcategory();
        $subcategory_name = $request->input('subcategory_name');
        if(Subcategory::where('subcategory_name', '=', $subcategory_name)->first() != true){
            $subcategory->subcategory_name = $request->input('subcategory_name');
            $subcategory->category_id = $request->input('category_name');
            $subcategory->save();
            return redirect('/admin')->with('success', 'Subcategory created successfully');
        } else {
            return redirect('/admin')->with('error', 'This category already exists');
        }

       
    }
    // Edit existing subcategory
    public function editSubcategory($id){
        $category = Category::pluck('category_name', 'category_id');
        return view('catsub.editSubcategory', ['subcategory' => Subcategory::find($id), 'category' => $category]);
    }
    public function updateSubcategory(Request $request, $id){
        $this->validate($request, [
            'category_name' => 'required',
            'subcategory_name' => 'required',
        ]);
        
        $subcategory = Subcategory::find($id);
        $subcategory->subcategory_name = $request->input('subcategory_name');
        $subcategory->category_id = $request->input('category_name');
        $subcategory->save();
        return redirect('/admin')->with('success', 'Subcategory edited succsesfully');

    }
    // Delete existing subcategory
    public function deleteSubcategory($id){
        $subcategory = Subcategory::find($id);
        if(!isset($subcategory)){
            return redirect('/admin')->with('error', 'Subcategory does not exist');
        }
        $subcategory->delete();
        return redirect('/admin')->with('success', 'Subcategory removed');
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
