@extends('menu.menuedit')
@section('titulo1edit', 'ACTUALIZAR')
@section('titulo2edit', 'INFORMACION DE LA CARRERA')
@section('contentedit')

<div>
    <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>['carrera.update', $carrera->id],'method'=>'POST test-form','data-parsley-validate'=>""]) !!}
    {{method_field('PUT')}}
    <div class="form-group row">
        {!! Form::label('COD_CARRERA','Codigo Carrera (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::number('COD_CARRERA', $carrera->COD_CARRERA, ['class'=>'form-control',  'data-parsley-type'=>"number",'placeholder'=>"Ingrese el Codigo de la Carrera", 'required' =>'true','data-parsley-error-message'=>"Ingrese solo numeros",'required' =>'true']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('NOM_CARRERA','Nombre (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('NOM_CARRERA',$carrera->NOM_CARRERA,  ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese el Nombre de la Carrera", 'required' =>'true','data-parsley-error-message'=>"Ingrese solo letras y espacios",'minlength'=>'3']) !!}
        </div>
    </div>
    <a href="{{ route('carrera.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('actualizar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>
    
@endsection