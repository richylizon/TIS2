@extends('menu.menulistuserstandard')
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
        </tr>
	</thead>
	@foreach($users as $user) 
	<tbody>
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
      <td></td>
      <td></td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
</div>
	
@endsection	 