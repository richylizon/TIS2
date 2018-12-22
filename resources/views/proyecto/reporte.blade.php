@extends('menu.menurep')
@section('titulo1rep', 'GENERAR')
@section('titulo2rep', 'REPORTES')
@section('contentrep')
  <div class="form-group">
      {!! Form::open(['route'=>'proyecto.reporte','method'=>'ANY','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
        <div class="form-group row">
            
            <div class="form-group col-md-6">
            {!! Form::label('CICLO','Estado',['class'=>'']) !!}
              {!! Form::select('CICLO', array('en progreso' => 'en progreso', 'defendido' => 'defendido', 'expirado'=>'expirado'), $proyectos->CICLO, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
            {!! Form::label('FECHA_REGISTRO','Fecha de registro',['']) !!}
              {!! Form::date('fecha_registro', $now, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
            {!! Form::label('MODALIDAD','Modalidad',['']) !!}
              {!! Form::select('modalidad',$modalidades, $modalidades ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
            {!! Form::label('GESTION_LIMITE','Gestión Limite',['class'=>'']) !!}
              {!! Form::select( 'gestion_limite', $gestiones,  $gestiones, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
            {!! Form::label('AREA','Area',['class'=>'']) !!}
              {!! Form::select('area',$areas, $areas ,['class'=>'form-control', 'id'=>'combobox']) !!}
            </div>

        </div>
        <div class="form-group ">
            {!! Form::submit('Buscar', ['class'=>'btn btn-lg btn-block btn-warning btn_White']) !!}
        </div>
        {!! Form::close() !!}
  </div>
      





<div class="table-responsive">
  <table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
        <th scope="col">Inicial </th>
        <th scope="col">Codigo </th>
        <th scope="col">Estudiante</th>
        <th scope="col">Tutor</th>
        <th scope="col">Fecha Registro</th>
        <th scope="col">Gestion limite</th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyecto)
      <tr>
          <td>{{ $proyecto -> modalidad -> INICIAL}}
          {{ $proyecto -> contador}}
        
        </td>
        <td>{{ $proyecto -> modalidad -> NUM}}</td>
          <td>{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}} </td>
          <td>
              @foreach ($proyecto->estudiante as $e)
              @foreach ($e->profesional as $p)
                
                {{-- @if () --}}
                  {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.',' }}

                {{-- @endif --}}
              @endforeach
              @endforeach
            </td>
            <td>{{ $proyecto -> GESTION_REGISTRO}}</td>
            <td>{{ $proyecto -> GESTION_LIMITE}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
