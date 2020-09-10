<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bar;
use App\Buzon;
use App\Campus;
use App\Menu;
use App\Preferencia;
use App\Snack;
use Illuminate\Support\Facades\DB; //uso del DB

class ReporteController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth'); 
    }
    public function index(){
        
        return view('reportes.index');
    }
    public function preferencias(){
        $preferencias=Preferencia::join('menus','menus.id','preferencias.menu_id')
        ->select('menus.nombre','menus.descripcion','preferencias.fecha','preferencias.observacion')
        ->orderBy('preferencias.fecha')
        ->get();
        return view('reportes.preferencias',compact('preferencias'));
    }
    public function bares(){
        $bares=Bar::join('menus','menus.bar_id','bars.id')
        ->join('buzons','buzons.bar_id','bars.id')
        ->select('bars.nombre as nombrebar','menus.nombre','buzons.descripcion')
        ->get();
        return view('reportes.buzons',compact('bares'));
    }
    public function grafica(){
        $snacks=Snack::select('snacks.nombre',DB::raw('count(id) as Numero'))
        ->groupBy('snacks.nombre')
        ->get();
        return view('reportes.grafica',compact('snacks'));
    }
}
