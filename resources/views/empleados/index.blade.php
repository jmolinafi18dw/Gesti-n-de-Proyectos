@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
      </tr>

      @foreach($empleados as $empleado )
      <tr>
        <td>{{$empleado->id}}</td>
        <td>Aqui el nombre</td>
        <td>Aqui el apellido</td>
        <td>Aqui el email</td>
        <td>Aqui el telefono</td>
      </tr>
      @endforeach
    </table>

@endsection
