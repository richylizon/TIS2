@extends('menu.menulist')
@section('titulo1', 'Lista')
@section('titulo2', 'de usuarios.')
@section('content')
<div class="table-responsive">
<table class="table" id="table_id">
    <thead class="thead-light">	
		<tr>
		<th>Nro</th>	
		<th>Nombre</th>
		<th>Correo</th>
		<th></th>
		<th></th>
          <th scope="col">
            <div class="text-primary">
              <h3>
                <!--<a href='{{ route('register')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
                </a>-->
              </h3>
            </div>
          </th>
        </tr>
	</thead>
	@foreach($users as $user) 
	<tbody>
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
      <td></td>
  	<td>	
		<div class="text-right">
              <h4>
               <a href='{{ route('usuario.edit',$user->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                  <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
                </a>
              </h4>
            </div> 
    </td>   
        <td>
            <div class="text-left">
                <h4>
                @if($user->id>1)  
                  <a href='{{ url('usuario/ocultar',$user->id)}}' onclick="return confirm('¿Esta seguro de eliminar este usuario?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                      <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
                  </a> 
                 @endif 
              </h4>
            </div> 
	   </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
</div>
	
@endsection	 