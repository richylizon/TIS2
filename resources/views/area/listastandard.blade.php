@extends('menu.menulistuserstandard')
@section('titulo1', 'LISTA')
@section('titulo2', 'DE AREAS')
@section('contentlist')
<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
         </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
      <tr>
        <td>{{ $area -> id}} </td>
        <td>{{ $area -> NOMBRE_AREA}} </td>
        <td>{{ $area -> DESC_AREA}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
