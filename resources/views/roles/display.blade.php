@extends('layouts.app')

@section('content')
<div class="container">
    <a href={{route('displayDashboard')}} class='btn btn-primary'>Back to dashboard</a>
    <div class='row mt-2'>
        <div class='col-sm-12'>
            <h1>Roles</h1>
            <table class='table table-dark mt-2'>
                <thead>
                    <tr>
                        <td><a href={{route('createRole')}} class='btn btn-primary'>Add new role</a></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->role_name}}</td>
                                <td><a href="{{route('editCategory') . '/' . $role->role_id}}" class='btn btn-primary'>Edit role</a></td>
                                <td>{!!Form::open(['action' => ['AdminController@deleteCategory', $role->role_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
