@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE MODALIDADES')
@section('contentlist')
<div class="table-responsive">
<table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
          <th scope="col">Inicial</th>
          <th scope="col">Modalidad</th>
          <th scope="col">Descripcion</th>
          <th></th>
          <th scope="col">
            <div class="text-center">
              <h3>
                <a href='{{ route('modalidad.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
                </a>
              </h3>
            </div>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($modalidades as $modalidad)
      <tr>
        <td>{{ $modalidad -> INICIAL}} </td>
        <td>{{ $modalidad -> NOM}} </td>
        <td>{{ $modalidad -> DESC}} </td>
        <td>
            <div class="text-center">
              <h4>
                <a href='{{ route('modalidad.edit',$modalidad->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                  <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
                </a>
              </h4>
            </div> 
        </td>
        <td>
            <div class="text-center">
                <h4>
                  <a href='{{ url('modalidad/ocultar',$modalidad->id)}}' onclick="return confirm('¿Esta seguro de eliminar esta Modalidad?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
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