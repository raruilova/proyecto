@extends('layouts.app')

@section('content')
<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>

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
        </ul>

    </div>
    <div class="container">
        <br>
        <div>
            <h1 class="text-center">Bienvenido</h1>
            <h2 class="text-center">Navega por todas nuestras opciones</h1>
        </div>
        <br>

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="images/fondo1.jpeg"> <!-- random image -->
                </li>
                <li>
                    <img src="images/fondo2.jpg"> <!-- random image -->
                </li>
                <li>
                    <img src="images/fondo3.jpeg"> <!-- random image -->
                </li>
            </ul>
        </div>
        <br>
        <!--testimonios-->
        <h2 class="text-center">Testomonios</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="images/t1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">"Esta pagina me gusto mucho me ayuda a saber si cuentan con mis
                                golosinas preferidas."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="images/t2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">"Antes no me agradaba el servicio, pero ahora lo amo!."</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="images/t3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">"Gracias a esta página puedo saber el menú de cada día."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <br><br><br>
    <footer class="py-0.5 bg-success">
        <a href="https://es-la.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"
                title="Facebook" style="font-size: 30px;"></i></a>
        <a href="https://twitter.com/login?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"
                title="Twitter" style="font-size: 30px;"></i></a>
        <a href="https://www.instagram.com/?hl=es-la" target="_blank"><i class="fa fa-instagram" aria-hidden="true"
                title="Instagram" style="font-size: 30px;"></i></a>
        <p style="text-align: center;"><b> Copyright &copy; 2020 David Pérez y Robinson Ruilova todos los derechos
                reservados.</b></p>
    </footer>
    <!--Scripts Bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
    <script>
    M.toast({
        html: 'Bienvenid@!',
        classes: "teal darken-1"
    })
    </script>

</body>

</html>
@endsection