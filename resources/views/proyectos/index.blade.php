@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
<button id="añadir">Añadir Proyecto</button>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
      </tr>

      @foreach($proyectos as $proyecto )
      <tr>
        <td><a href="{{ url('/proyectos/'.$proyecto->id) }}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
      @endforeach
    </table>


@endsection
