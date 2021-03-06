@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Subcategory</h1>
    {!! Form::open(['action' => ['AdminController@updateSubcategory', $subcategory->subcategory_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('category_name', 'Select category to which you want to create new subcategory')}}
        {{Form::select('category_name', $category, '', ['class' => 'form-control', 'selected' => $subcategory->category->category_name])}}
    </div> 
    <div class="form-group">
        {{Form::label('subcategory_name', 'Subcategory name')}}
        {{Form::text('subcategory_name', $subcategory->subcategory_name, ['class' => 'form-control', 'placeholder' => 'Category name'])}}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection
