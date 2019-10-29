@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Category</h1>
    {!! Form::open(['action' => ['AdminController@updateCategory', $category->category_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('category_name', 'Category name')}}
        {{Form::text('category_name', $category->category_name, ['class' => 'form-control', 'placeholder' => 'Category name'])}}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection
