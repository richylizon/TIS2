@extends('menu.menulistuserstandard')
@section('titulo1', 'LISTA')
@section('titulo2', 'DE ESTUDIANTES')
@section('contentlist')

<div class="table-responsive table-striped">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>  
          <th scope="col">Id</th>
          <th scope="col">CodigoSis</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">CI</th>
          <th scope="col">Telefono</th>
          <th scope="col">Correo</th>
          <th scope="col"></th>
          <th scope="col">
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
      <tr>
        <td>{{ $estudiante -> id}}</td>
        <td>{{ $estudiante -> COD_SIS}} </td>
        <td>{{ $estudiante -> NOM_EST}} </td>
        <td>{{ $estudiante -> AP_PAT_EST}} </td>
        <td>{{ $estudiante -> AP_MAT_EST}} </td>
        <td>{{ $estudiante -> CI}} </td>
        <td>{{ $estudiante -> TELF}} </td>
        <td>{{ $estudiante -> CORRETO_EST}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
