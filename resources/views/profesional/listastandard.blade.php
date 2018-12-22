@extends('menu.menulistuserstandard')
@section('titulo1', 'LISTA')
@section('titulo2', 'DE PROFESIONALES')
@section('contentlist')

{!! Form::open((array('url'=>'profesional','method'=>'GET','class' => 'navbar-form navbar-left pull-right'))) !!}


  {!! Form::close() !!}


<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
          <th scope="col">Título</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Codigo Universidad</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Correo</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($profesionales as $profesional)
      <tr>
        <td>{{ $profesional -> titulo->nombre}}</td>
        <td>{{ $profesional -> NOM_PROF}} </td>
        <td>{{ $profesional -> AP_PAT_PROF}} </td>
        <td>{{ $profesional -> AP_MAT_PROF}} </td>
        <td>{{ $profesional -> COD_UNI}} </td>
        <td>{{ $profesional -> TELF_PROF}} </td>
        <td>{{ $profesional -> CORREO_PROF}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection
