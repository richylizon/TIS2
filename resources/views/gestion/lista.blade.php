@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE GESTIONES')
@section('contentlist')
<div class="table-responsive">
<table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
          <th scope="col">Fecha inicio</th>
          <th scope="col">Fecha Fin</th>
          <th scope="col">Gestion</th>
          <th></th>
          <th scope="col">
            <div class="text-center">
              <h3>
                <a href='{{ route('gestion.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
                </a>
              </h3>
            </div>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($gestions as $gestion)
      <tr>
        <td>{{ $gestion -> FECHA_INI}} </td>
        <td>{{ $gestion -> FECHA_FIN}} </td>
        <td>{{ $gestion -> PERIODO}} </td>
        <td>
            <div class="text-center">
              <h4>
                <a href='{{ route('gestion.edit',$gestion->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                  <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
                </a>
              </h4>
            </div> 
        </td>
        <td>
            <div class="text-center">
                <h4>
                  <a href='{{ url('gestion/ocultar',$gestion->id)}}' onclick="return confirm('¿Esta seguro de eliminar esta gestion?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                      <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
                  </a>
              </h4>
            </div> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!!$gestions->render("pagination::bootstrap-4")!!}
</div>
  
@endsection