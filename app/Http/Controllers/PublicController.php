<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use App\Snack;

class PublicController extends Controller
{
    public function index()
    {
        $mensaje= 'Hola mundo';
        $menus= Menu::all();//recuperar datos el all y de la tabla que quiero
        $snacks= Snack::all();

        return view('welcome',compact('mensaje','menus','snacks'));

    }
}
