@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Subcategory</h1>
    {!! Form::open(['action' => 'AdminController@storeSubcategory', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('category_name', 'Select category to which you want to create new subcategory')}}
        {{Form::select('category_name', $categories, ['class' => 'form-control'])}}
    </div> 
    <div class="form-group">
        {{Form::label('subcategory_name', 'Subcategory name')}}
        {{Form::text('subcategory_name', '', ['class' => 'form-control', 'placeholder' => 'Category name'])}}
    </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection
