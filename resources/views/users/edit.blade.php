@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h1> User Edit </h1>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('users.update',['user'=>$user->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        

                                        <div class="form-group">
            <label for="name">Name</label>
                    <input class="form-control String"  type="text"  name="name" id="name" value="{{old('name',$user->name)}}"
                                    required="required"
                        >
                    @if($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="email">Email</label>
                    <input class="form-control String"  type="text"  name="email" id="email" value="{{old('email',$user->email)}}"
                                    required="required"
                        >
                    @if($errors->has('email'))
            <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="email_verified_at">Email Verified At</label>
                    <input class="form-control DateTime"  type="text"  name="email_verified_at" id="email_verified_at" value="{{old('email_verified_at',$user->email_verified_at)}}"
                                    >
                    @if($errors->has('email_verified_at'))
            <p class="text-danger">{{$errors->first('email_verified_at')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="password">Password</label>
                    <input class="form-control String"  type="text"  name="password" id="password" value="{{old('password',$user->password)}}"
                                    required="required"
                        >
                    @if($errors->has('password'))
            <p class="text-danger">{{$errors->first('password')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="remember_token">Remember Token</label>
                    <input class="form-control String"  type="text"  name="remember_token" id="remember_token" value="{{old('remember_token',$user->remember_token)}}"
                                    >
                    @if($errors->has('remember_token'))
            <p class="text-danger">{{$errors->first('remember_token')}}</p>
            @endif
        </div>
                                                        <div>
            <button class="btn btn-primary" type="submit">Save</button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection