@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>
  
    <table>
      <tr>
        <th>Id</th>
        <td>{{$departamentos->id}}</td>
      </tr>
      <tr>
        <th>Nombre</th>
        <td>{{$departamentos->nombre}}</td>
      </tr>
      <tr>    
    </table>
    
@endsection
