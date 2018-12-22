@extends('menu.menuedit')
@section('titulo1edit', 'ACTUALIZAR')
@section('titulo2edit', 'INFORMACION DE GESTIONES')
@section('contentedit')

<div>
    <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>'gestion.store','method'=>'POST','data-parsley-validate'=>""]) !!}
    <div class="form-group row">
      {!! Form::label('FECHA_INI','Fecha de inicio',['class'=>'col-sm-2 col-form-label']) !!}
      <div class="form-group col-sm-4">
        {!! Form::date('FECHA_INI', $now, ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="form-group row">
      {!! Form::label('FECHA_FIN','Fecha de fin',['class'=>'col-sm-2 col-form-label']) !!}
      <div class="form-group col-sm-4">
        {!! Form::date('FECHA_FIN', $now, ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="form-group row">
        {!! Form::label('PERIODO','PERIODO (*)',['class'=>'col-sm-2 col-form-label control-label','data-smk-icon'=>"glyphicon-remove"]) !!}
        <div class="col-sm-10">
            {!! Form::text('PERIODO', old('PERIODO'), ['class'=>'form-control','placeholder'=>"Ingrese el periodo 1 o 2"]) !!}
        </div>
    </div>
    <a href="{{ route('gestion.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('actualizar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>
    
@endsection