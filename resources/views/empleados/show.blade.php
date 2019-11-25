@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
      <tr>
        <th>Id</th>
        <td>{{$empleados->id}}</td>
      </tr>
      <tr>
        <th>Nombre</th>
        <td>{{$empleados->nombre}}</td>
      </tr>
      <tr>
        <th>Apellido</th>
        <td>{{$empleados->apellido}}</td>
      </tr>      
      <tr>
        <th>Email</th>
        <td>{{$empleados->email}}</td>
      </tr>      
      <tr>
        <th>Telefono</th>
        <td>{{$empleados->telefono}}</td>
      </tr>      
    </table>
@endsection
