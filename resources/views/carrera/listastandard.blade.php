@extends('menu.menulistuserstandard')
@section('titulo1', 'LISTA')
@section('titulo2', 'DE CARRERAS')
@section('contentlist')
<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">Codigo Carrera</th>
        <th scope="col">Nombre</th>
      </tr>
    </thead>
    <tbody>
      @foreach($carreras as $carrera)
      <tr>
        <td>{{ $carrera -> COD_CARRERA}} </td>
        <td>{{ $carrera -> NOM_CARRERA}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection