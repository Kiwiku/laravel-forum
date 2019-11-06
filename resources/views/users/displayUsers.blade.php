@extends('layouts.app')

@section('content')
<div class="container">
    <a href={{route('displayDashboard')}} class='btn btn-primary'>Back to dashboard</a>
    <div class='row mt-2'>
        <div class='col-sm-12'>
            <h1>Users</h1>
            <table class='table table-dark mt-2'>
                <thead>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                            <tr>
                                <td><span style="color: red;">Username:</span> {{$user->name}}</td>
                                <td><a href="{{route('editUsersRole') . '/' . $user->id}}" class='btn btn-primary'>Edit users role</a></td>
                                <td>{!!Form::open(['action' => ['UsersController@deleteUser', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
