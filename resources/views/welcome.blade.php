<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!--cdm de bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!--Encabezado de la pagina-->
        <div class="text-center">
          <nav class="bg-dark">
            <a href="#"><img class="img-fluid " src="https://www.espe-innovativa.edu.ec/ambiente/wp-content/uploads/logo-espe-blanco.png" class="mx-auto d-block"  alt="encabezado" >  </a>
        </nav>
          </div>
  
  <div class="container-fluid  bg-danger sticky-top" >
    <nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <!--Logo -->
      <a class="navbar-brand" href="#">
                <img src="https://ofercopy.com/wp-content/uploads/2017/12/icono-menu.png" alt="logo" style="width:35px;">
            </a>
      <a class="navbar-brand text-white" href="#">BarEspe-L</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-right">
        <li class="nav-item">
          <a class="nav-link text-white" href="#seccion">Menú</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#seccion">Snacks</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('login') }}">Buzón</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('login') }}">Preferencias</a>
        </li>
        <li class="nav-item">
        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="text-white" style="text-decoration:none" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="text-white" style="text-decoration:none" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </li>
      </ul>
    </div>
</nav>
</div>
<br>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <br><br><br><br><br>
        <h1 class="text-center">BarEspe-L</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <a href="#" class="btn btn-outline-success rounded-pill">Leer más...</a>
        <br>
      </div>

      <div class="col-md">
          <img class="img-fluid" src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="height:530px; width:630px;">
          <br><br>
          <!--centrado de redes sociales-->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-3 offset-md-3">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true" title="Facebook" style="font-size: 20px;"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true" title="Twitter" style="font-size: 20px;"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true" title="Instagram" style="font-size: 20px;"></i></a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div id="seccion">

  <div class="container">
    <div class="row">
      <div  class="col-md-6">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Menus</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <td>Campus</td>
                  <td>Bar</td>
                  <td>Nombre</td>
                  <td>Disponible</td>
                  <td>Precio</td>
                </tr>
              </thead>
              <tbody>
            @foreach($menus as $menu)<!--recorre toda la tabla, pongo la varible que declarre en el PublicController el as es un alias-->
            @if ($menu->id <= 4)
            <tr>
              <td>{{$menu->bar->campus->nombre}}</td>
              <td>{{$menu->bar->nombre}}</td><!--me escribe la tabla pero el nombre-->
              <td>{{$menu->nombre}}</td>
              <td>
                @if ($menu->disponible==1)
                {{'Si'}}
                @endif 
                  @if($menu->disponible==0)
                  {{'No'}}
                @endif
              </td>
              <td>{{$menu->precio}} $</td> 
              @continue
            <tr>
              @endif
              
            @endforeach
            </tbody>
          </table> 
           <!-- @foreach($menus as $menu)<!--recorre toda la tabla, pongo la varible que declarre en el PublicController el as es un alias-->
              <!--Campus: {{$menu->bar->campus->nombre}}
              Bar: {{$menu->bar->nombre}}<br><!--me escribe la tabla pero el nombre-->
              <!--{{$menu->nombre}}: {{$menu->precio}} $ <br>
            @endforeach-->   
          
          </div>
        </div>
      </div>  
      <div  class="col-md-6">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Snacks</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <td>Campus</td>
                  <td>Bar</td>
                  <td>Nombre</td>
                  <td>Disponible</td>
                  <td>Precio</td>
                </tr>
              </thead>
              <tbody>
            @foreach($snacks as $snack)<!--recorre toda la tabla, pongo la varible que declarre en el PublicController el as es un alias-->
            @if ($snack->id <= 4)
            <tr>
              <td>{{$snack->bar->campus->nombre}}</td>
              <td>{{$snack->bar->nombre}}</td><!--me escribe la tabla pero el nombre-->
              <td>{{$snack->nombre}}</td>
              <td>
                @if ($snack->disponible==1)
                {{'Si'}}
                @endif 
                  @if($snack->disponible==0)
                  {{'No'}}
                @endif
              </td>
              <td>{{$snack->precio}} $</td> 
              @continue
            <tr>
              @endif
              
            @endforeach
            </tbody>
          </table>   
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ver mas.. </a>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Snacks</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <table class="table">
              <thead>
                <tr class="bg-success text-white">
                  <td>Campus</td>
                  <td>Bar</td>
                  <td>Nombre</td>
                  <td>Disponible</td>
                  <td>Precio</td>
                </tr>
              </thead>
              <tbody>
            @foreach($snacks as $snack)<!--recorre toda la tabla, pongo la varible que declarre en el PublicController el as es un alias-->
            <!--Ejemplo de commit--->
            <tr>
              <td>{{$snack->bar->campus->nombre}}</td>
              <td>{{$snack->bar->nombre}}</td><!--me escribe la tabla pero el nombre-->
              <td>{{$snack->nombre}}</td>
              <td><!--Validaciones para el cambio de nombre de 1 a Si y de 0 a No-->
                @if ($snack->disponible==1)
                {{'Si'}}
                @endif 
                  @if($snack->disponible==0)
                  {{'No'}}
                @endif
              </td>
              <td> {{$snack->precio}} $</td> 
            <tr>
              
            @endforeach
            </tbody>
          </table>   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
  
      
    <!--</div>
    <!--    <div class="content">
    <!--<div class="title m-b-md">
    <!--Laravel {{$mensaje}}
    <!--</div>
    <!--<div>
    <!--Datos: <br>
    <!--<div>
    <!--@foreach($menus as $menu)<!--recorre toda la tabla, pongo la varible que declarre en el PublicController el as es un alias-->
    <!--  Campus: {{$menu->bar->campus->nombre}}
    <!--  Bar: {{$menu->bar->nombre}}<br><!--me escribe la tabla pero el nombre-->
    <!--  {{$menu->nombre}}: {{$menu->precio}} $ <br>
    <!--@endforeach    
    <!--</div>-->
    
        <!--scripts bootstrap-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    
</html>
