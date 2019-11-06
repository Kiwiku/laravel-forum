@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin's Dashboard</h1>
    <div class='row'>
        <div class='col-sm-12'>
            <table class='table table-dark mt-2'>
                    <thead>
                        <tr>
                            <td><a href={{route('displayUsers')}} class='btn btn-primary'>Display users</a></td>
                            <td><a href={{route('displayRoles')}} class='btn btn-primary'>Display roles</a></td>
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
                            <td><a href="{{route('editCategory') . '/' . $category->category_id}}" class='btn btn-primary'>Edit category</a></td>
                            <td>{!!Form::open(['action' => ['AdminController@deleteCategory', $category->category_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger', 'title' => 'Danger: It deletes subcatogories!'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <table class='table table-dark mt-2'>
                <thead>
                    <tr>
                        <td>Subcategory name</td>
                        <td>Category name which subcategory belongs to</td>
                        <td><a href={{route('createSubcategory')}} class='btn btn-primary'>Add new subcategory</a></td>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{$subcategory->subcategory_name}}</td>
                            <td>{{$subcategory->category->category_name}}</td>
                            <td><a href="{{route('editSubcategory') . '/' . $subcategory->subcategory_id}}" class='btn btn-primary'>Edit category</a></td>
                            <td>{!!Form::open(['action' => ['AdminController@deleteSubcategory', $subcategory->subcategory_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger', 'title' => 'Danger: It deletes subcatogories!'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
