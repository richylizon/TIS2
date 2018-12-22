@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE CARRERAS')
@section('contentlist')
<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">Codigo Carrera</th>
        <th scope="col">Nombre</th>
        <th></th>
        <th scope="col">
          <div class="text-center">
            <h3>
              <a href='{{ route('carrera.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
              </a>
            </h3>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($carreras as $carrera)
      <tr>
        <td>{{ $carrera -> COD_CARRERA}} </td>
        <td>{{ $carrera -> NOM_CARRERA}} </td>
        <td>
          <div class="text-center">
            <h4>
              <a href='{{ route('carrera.edit',$carrera->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
              </a>
            </h4>
          </div> 
        </td>
        <td>
          <div class="text-center">
            <h4>
              <a href='{{ url('carrera/ocultar',$carrera->id)}}' onclick="return confirm('¿Esta seguro de eliminar esta Carrera?')" data-toggle="tooltip" data-placement="right" title="Eliminar">                      
                <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
              </a>
            </h4>
          </div> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection