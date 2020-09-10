@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-stripped highlight responsive-table">
                <thead class=" light-green lighten-3">
                    <tr>
                        <th>Ordinal</th>
                        <th>Bar</th>
                        <th>Menu</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <?php $ord=1 ?>
                @foreach($bares as $bar)
                <tr>
                    <td>{{$ord++}}</td>
                    <td>{{$bar->nombrebar}}</td>
                    <td>{{$bar->nombre}}</td>
                    <td>{{$bar->descripcion}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection