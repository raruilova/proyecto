@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-stripped highlight responsive-table">
                <thead class=" light-green lighten-3">
                    <tr>
                        <th>Ordinal</th>
                        <th>Menu</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Obervacion</th>
                    </tr>
                </thead>
                <?php $ord=1 ?>
                @foreach($preferencias as $preferencia)
                <tr>
                    <td>{{$ord++}}</td>
                    <td>{{$preferencia->nombre}}</td>
                    <td>{{$preferencia->descripcion}}</td>
                    <td>{{$preferencia->fecha}}</td>
                    <td>{{$preferencia->observacion}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection