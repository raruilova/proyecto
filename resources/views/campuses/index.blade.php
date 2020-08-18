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
                    <h4> Campus </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('campuses.create')}}" class="waves-effect btn blue lighten-1">
                    <i class="medium material-icons">add_circle_outline</i>    
                    </a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($campuses))
        <thead class="lime">
            <tr>
                <th>&nbsp;</th>
                
                                <td>Nombre</td>

                                <td>Direccion</td>

                
                
                
            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($campuses as $campus)
            <tr>
                <td>
                    <a href="{{route('campuses.show',['campus'=>$campus] )}}" class="waves-effect btn grey">
                    <i class="medium material-icons">visibility</i>
                    </a>
                    <a href="{{route('campuses.edit',['campus'=>$campus] )}}" class="waves-effect cyan btn">
                    <i class="medium material-icons">create</i> 
                    </a>
                    <form id="delete-campus-{{$campus->id}}" action="{{route('campuses.destroy',['campus'=>$campus])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="waves-effect red btn" onclick="return confirm('Desea eliminar.....?')" style="margin-left:20px;">
                        <i class="medium material-icons">delete</i>  
                        </button>
                    </form>
                </td>
                                                                                <td>{{$campus->nombre}}</td>
                                                                <td>{{$campus->direccion}}</td>
                                                                                                                                
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