@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
  <table>
      <tr>
        <th>Id</th>
        <td>{{$proyectos->id}}</td>
      </tr>
      <tr>
        <th>Nombre</th>
        <td>{{$proyectos->nombre}}</td>
      </tr>
      <tr>
        <th>Titulo</th>
        <td>{{$proyectos->titulo}}</td>
      </tr>
      <tr>
        <th>Fecha Inicio</th>
        <td>{{$proyectos->fechainicio}}</td>
      </tr>  
      <tr>
        <th>Fecha Fin</th>
        <td>{{$proyectos->fechafin}}</td>
      </tr>
      <tr>
        <th>Horas estimadas</th>
        <td>{{$proyectos->horasestimadas}}</td>
      </tr>    
    </table>
    
@endsection
