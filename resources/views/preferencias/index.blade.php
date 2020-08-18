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
            <div class="row">
                <div class="col-8">
                    <h4> Preferencias </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('preferencias.create')}}" class="waves-effect btn blue lighten-1">
                    <i class="medium material-icons">add_circle_outline</i>    
                    </a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($preferencias))
        <thead class="lime">
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Fecha</td>
                
                                                <td>Observacion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($preferencias as $preferencia)
            <tr>
                <td>
                    <a href="{{route('preferencias.show',['preferencia'=>$preferencia] )}}" class="waves-effect btn grey">
                    <i class="medium material-icons">visibility</i>
                    </a>
                    <a href="{{route('preferencias.edit',['preferencia'=>$preferencia] )}}" class="waves-effect cyan btn">
                    <i class="medium material-icons">create</i>  
                    </a>
                   <!--- <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-preferencia-{{$preferencia->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>-->
                    <form id="delete-preferencia-{{$preferencia->id}}" action="{{route('preferencias.destroy',['preferencia'=>$preferencia])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="waves-effect red btn" onclick="return confirm('Desea eliminar.....?')" style="margin-left:20px;">
                        <i class="medium material-icons">delete</i>  
                        </button>
                    </form>
                </td>
                                                                                                                <td>{{$preferencia->fecha}}</td>
                                                                <td>{{$preferencia->observacion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection