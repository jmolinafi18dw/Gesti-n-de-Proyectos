<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadosController extends Controller
{

  public function index()
{
    $empleados = Empleado::all();

    return view('empleados.index')->with('empleados',$empleados);
}

}
