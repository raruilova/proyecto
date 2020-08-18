@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h1> Users </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('users.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($users))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Name</td>
                
                                                <td>Email</td>
                
                                
                                                <td>Password</td>
                
                                                <td>Remember Token</td>
                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>
                    <a href="{{route('users.show',['user'=>$user] )}}">Show</a>
                    <a href="{{route('users.edit',['user'=>$user] )}}">Edit</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-user-{{$user->id}}').submit();">
                        Delete
                    </a>
                    <form id="delete-user-{{$user->id}}" action="{{route('users.destroy',['user'=>$user])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$user->name}}</td>
                                                                <td>{{$user->email}}</td>
                                                                                                <td>{{$user->password}}</td>
                                                                <td>{{$user->remember_token}}</td>
                                                                                                
            </tr>
            @empty
            <p>No Users</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection