@extends('menu.menulist')
@section('titulo1', 'FORMULARIO')
@section('titulo2', 'DE APROBACION')
@section('contentlist')
<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Accion</th>
        <th></th>
       </tr>
    </thead>
    <tbody>
      @foreach($downloads as $down)
      <tr>
        <td>{{ $down -> file_title}} </td>
        <td>
     <!--   <a href='download/{{$down->file_name}}' download="{{$down->file_name}}">-->
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection