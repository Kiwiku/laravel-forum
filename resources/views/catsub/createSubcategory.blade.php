@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Subcategory</h1>
    {!! Form::open(['action' => 'AdminController@storeCategory', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('category_name', 'Category name')}}
        {{Form::text('category_name', '', ['class' => 'form-control', 'placeholder' => 'Category name'])}}
    </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection
