@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> User Show </h1>
        </div>

    <div class="card-body">
                                        <div class="form-group">
            <label class="col-form-label" for="value">Name</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->name}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->email}}">
        </div>
                                                <div class="form-group">
            <label class="col-form-label" for="value">Password</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->password}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Remember Token</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->remember_token}}">
        </div>
                                                    </div>

    </div>

    <div class="card mb-4">

        
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection