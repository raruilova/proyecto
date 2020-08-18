@extends('layouts.barra')

@section('content')

<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Editar Bar </h3>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('bars.update',['bar'=>$bar->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
                        <div class="form-group">
            <label for="campus_id">Campus</label>
            <select class="form-control" name="campus_id" id="campus_id">
                @foreach((\App\Campus::all() ?? [] ) as $campus)
                <option value="{{$campus->id}}"
                    @if($bar->campus_id == old('campus_id', $campus->id))
                    selected="selected"
                    @endif
                >{{$campus->nombre}}</option>

                @endforeach
            </select>
        </div>
                                                                

                                                        <div class="form-group">
            <label for="nombre">Nombre</label>
                    <input class="form-control String"  type="text"  name="nombre" id="nombre" value="{{old('nombre',$bar->nombre)}}"
                                    required="required"
                        >
                    @if($errors->has('nombre'))
            <p class="text-danger">{{$errors->first('nombre')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="abierto">Abierto</label>
                    <input class="form-control Boolean"  type="text"  name="abierto" id="abierto" value="{{old('abierto',$bar->abierto)}}"
                                    required="required"
                        >
                    @if($errors->has('abierto'))
            <p class="text-danger">{{$errors->first('abierto')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('bars.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection