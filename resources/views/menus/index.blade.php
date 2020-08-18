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
                    <h4> Menus </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('menus.create')}}" class="waves-effect btn blue lighten-1">
                    <i class="medium material-icons">add_circle_outline</i>    
                    </a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($menus))
        <thead class="lime">
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Nombre</td>
                
                                                <td>Precio</td>
                
                                                <td>Disponible</td>
                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($menus as $menu)
            <tr>
                <td>
                    <a href="{{route('menus.show',['menu'=>$menu] )}}" class="waves-effect btn grey">
                    <i class="medium material-icons">visibility</i>    
                    </a>
                    <a href="{{route('menus.edit',['menu'=>$menu] )}}" class="waves-effect cyan btn">
                    <i class="medium material-icons">create</i>     
                    </a>
                    <!---<a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-menu-{{$menu->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>-->
                    <form id="delete-menu-{{$menu->id}}" action="{{route('menus.destroy',['menu'=>$menu])}}" method="POST" ><!--style="display: none;" ESTO BORRE DE ESTA LIENA Y DE LAS DEMAS TABLAS-->
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="waves-effect red btn" onclick="return confirm('Desea eliminar.....?')" style="margin-left:20px;">
                        <i class="medium material-icons">delete</i>  
                        </button>
                        
                    </form>
                </td>
                                                                                                                <td>{{$menu->nombre}}</td>
                                                                <td>{{$menu->precio}}</td>
                                                                <td>{{$menu->disponible}}</td>
                                                                <td>{{$menu->descripcion}}</td>
                                                                                                                                
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