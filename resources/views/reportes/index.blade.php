@extends('layouts.app')
@section('content')
<body class="bg green lighten-5">
    <ul class="tabs tabs-fixed-width  green ">
        <li class="tab"><a href="#test1" class=" active  text-white" style="text-decoration:none">Reportes</a></li>
        <li class="tab"><a class="text-white" href="#test2" style="text-decoration:none">Graficas</a></li>
    </ul>
    <div id="test1" class="col s12">
        <dic class="container">
            <div class="row">
                <div class="col s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Reporte de Preferencias
                                <p><a href="{{route('reportes.preferencias')}}" class="green-text ">Ver</a></p>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Reporte de Menu por Bar
                                <p><a href="{{route('reportes.buzons')}}" class="green-text ">Ver</a></p>
                        </div>
                    </div>
                </div>
                

            </div>
        </dic>


    </div>
    <div id="test2" class="col s12">
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img
                                src="https://images.pexels.com/photos/159888/pexels-photo-159888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Grafica Cantidad de Snacks
                                <p><a href="{{route('reportes.grafica')}}" class="green-text ">Ver</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection