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
                    <h4> Buzon </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('buzons.create')}}" class="waves-effect btn blue lighten-1">
                    <i class="medium material-icons">add_circle_outline</i>    
                    </a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($buzons))
        <thead class="lime">
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($buzons as $buzon)
            <tr>
                <td>
                    <a href="{{route('buzons.show',['buzon'=>$buzon] )}}" class="waves-effect btn grey">
                    <i class="medium material-icons">visibility</i>
                    </a>
                    <a href="{{route('buzons.edit',['buzon'=>$buzon] )}}" class="waves-effect cyan btn">
                    <i class="medium material-icons">create</i> 
                    </a>
                    <form id="delete-buzon-{{$buzon->id}}" action="{{route('buzons.destroy',['buzon'=>$buzon])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="waves-effect red btn" onclick="return confirm('Desea eliminar.....?')" style="margin-left:20px;">
                        <i class="medium material-icons">delete</i>  
                        </button>
                    </form>
                </td>
                                                                                                                <td>{{$buzon->descripcion}}</td>
                                                                                                                                
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