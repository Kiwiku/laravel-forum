@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin's Dashboard</h1>
    <div class='row'>
        <div class='col-sm-12'>
            <table class='table table-dark mt-2'>
                    <thead>
                        <tr>
                            <td><a class='btn btn-primary'>List all users on forum</a></td>
                        </tr>
                    </thead>
            </table>
            <table class='table table-dark mt-2'>
                <thead>
                    <tr>
                        <td>Operations on categories</td>
                        <td><a href={{route('createCategory')}} class='btn btn-primary'>Add new category</a></td>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->category_name}}</td>
                            <td><a class='btn btn-primary'>Edit category</a></td>
                            <td><a class='btn btn-primary'>Delete category</a></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <table class='table table-dark mt-2'>
                <thead>
                    <tr>
                        <td>Subcategory name</td>
                        <td>Category name which subcategory belongs to</td>
                        <td><a class='btn btn-primary'>Add subcategory</a></td>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{$subcategory->subcategory_name}}</td>
                            <td>{{$subcategory->category->category_name}}
                            <td><a class='btn btn-primary'>Edit subcategory</a></td>
                            <td><a class='btn btn-primary'>Delete subcategory</a></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
