<?php

namespace App\Http\Controllers;
use App\Departamento;

use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function index()
   {
       $departamentos = Departamento::all();
   
       return view('departamentos.index')->with('departamentos',$departamentos);
   }
   public function show($id){
    $departamentos= Departamento::find($id);
    return view('departamentos.show',compact('departamentos'));
   }
}   

