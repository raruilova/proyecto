<!--Si quiero saber como cree un ruta para crear otra pagina, y acceder a ella a traves de un boton
DEVO IR AL PROYECTO LLAMADO GYM, LUEGO A RUTES Y AHI A WEB.PHP,LUEGO DEBO IR A WELCOME.BLADE.PHP-->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div id="app">
      <div class="navbar-fixed">
        <nav class="navbar navbar-expand-md  green shadow-sm">
            <button class="sidenav-trigger green text-white btn waves-effect btn-flat" data-target="menu-side">
                <i class="small material-icons">menu</i>
            </button>
                <a class="navbar-brand">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
          </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
        <!---UTILIZACION DE MATERIALIZE UN SIDENAV--->
        <div class="section "> 
    <ul class="sidenav  green darken-1" id="menu-side">
      <li>
        <div class="container user-view">
          <div class="background">
            <img src="s3.jpg" alt="">
          </div>
          <a href="#">
             <i class="large material-icons text-white">account_circle</i>
          </a>
            <span class="email white-text">Admin@tucorreo.com</span>
        </div>
      </li>
      <li>
        <a href="campuses" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">account_balance</i>
          Campus
        </a>
      </li>
      <li>
        <a href="bars" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">food_bank</i>
          Bares
        </a>
      </li>
      <li>
        <a href="menus" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">restaurant</i>
          Menus
        </a>
      </li>
      <li>
        <a href="snacks" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">fastfood</i>
          Snacks
        </a>
      </li>
      <li>
        <a href="preferencias" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">menu_book</i>
          Preferencias
        </a>
      </li>
      <li>
        <a href="buzons" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">comment</i>
          Buzon
        </a>
      </li>
      <li>
        <a href="reportes" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">content_paste</i>
          Reportes
        </a>
      </li>
      <li>
        <a href="home" class="waves-effect text-white" style="text-decoration:none">
          <i class="material-icons white-text">home</i>
          Home
        </a>
      </li>
    </ul>

  </div>
  <!--FIN DEL SIDENAV-->
  <!--SCRIPTS DE MATERIALIZE-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems, {
    height:550,
    indicators:false
  });

  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems);//borre options para que funcione este script y se vea la animacion de materialize

  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
//para saber mas, debo ir al CursoMaterialize que esta fuera de htdocs en mi workspace
M.AutoInit();
});

</script>
</body>
</html>
