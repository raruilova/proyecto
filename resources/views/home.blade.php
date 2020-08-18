@extends('layouts.app')

@section('content')
<html>
<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://images.pexels.com/photos/1580466/pexels-photo-1580466.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="height:580px; width:1330px;"> <!-- random image -->
        
      </li>
      <li>
        <img src="https://images.pexels.com/photos/3893682/pexels-photo-3893682.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"> <!-- random image -->
        
      </li>
      <li>
        <img src="https://images.pexels.com/photos/365459/pexels-photo-365459.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"> <!-- random image -->
        
      </li>
      <li>
        <img src="https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"> <!-- random image -->
        
      </li>
    </ul>
  </div>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  M.toast({html: 'Bienvenid@!',
    classes:"teal darken-1"})
</script>

  </body>
 </html>   
@endsection
