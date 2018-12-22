@extends('menu.menulistuserstandard')
@section('titulo1', 'LISTA')
@section('titulo2', 'DE GESTIONES')
@section('contentlist')
<div class="table-responsive">
<table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
          <th scope="col">Fecha inicio</th>
          <th scope="col">Fecha Fin</th>
          <th scope="col">Gestion</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($gestions as $gestion)
      <tr>
        <td>{{ $gestion -> FECHA_INI}} </td>
        <td>{{ $gestion -> FECHA_FIN}} </td>
        <td>{{ $gestion -> PERIODO}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  
@endsection