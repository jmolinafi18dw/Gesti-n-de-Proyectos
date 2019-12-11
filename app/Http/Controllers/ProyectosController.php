<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectosController extends Controller
{
   public function index()
   {
       $proyectos = Proyecto::all();

       return view('proyectos.index')->with('proyectos',$proyectos);
   }
   public function show($id){
    $proyectos= Proyecto::find($id);
    return view('proyectos.show',compact('proyectos'));
   }


}
