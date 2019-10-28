@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin's Dashboard</h1>
    <div class='row'>
        <div class='col-sm-12'>
            <table class='table table-dark mt-2'>
                    <thead>
                        <tr>
                            <td><a class='btn btn-primary'>List of all users on forum</a></td>
                        </tr>
                    </thead>
            </table>
            <table class='table table-dark mt-2'>
                <thead>
                    <tr>
                        <td>Operations on categories</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class='btn btn-primary'>Add category</a></td>
                        <td><a class='btn btn-primary'>Edit category</a></td>
                        <td><a class='btn btn-primary'>Delete category</a></td>
                    </tr>
                </tbody>
            </table>
            <table class='table table-dark mt-2'>
                <thead>
                    <tr>
                        <td>Operations on subcategories</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class='btn btn-primary'>Add subcategory</a></td>
                        <td><a class='btn btn-primary'>Edit subcategory</a></td>
                        <td><a class='btn btn-primary'>Delete subcategory</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
