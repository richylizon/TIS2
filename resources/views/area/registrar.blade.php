@extends('menu.menureg')
@section('titulo1reg', 'REGISTRO')
@section('titulo2reg', 'DE AREAS')
@section('contentreg')

<div>
    <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>'area.store','method'=>'POST','data-parsley-validate'=>""]) !!}
    <div class="form-group row">
        {!! Form::label('COD_AREA','Codigo del area (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('COD_AREA', old('COD_AREA'), ['class'=>'form-control',  'data-parsley-type'=>"number",'placeholder'=>"Ingrese el Codigo del Area",'data-parsley-error-message'=>"Ingrese solo numeros",'required' =>'true','minlength'=>'1']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('NOMBRE_AREA','Nombre del area (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('NOMBRE_AREA', old('NOMBRE_AREA'), ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese el Nombre del Area", 'required' =>'true','data-parsley-error-message'=>"Ingrese solo letras y espacios",'minlength'=>'3']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('DESC_AREA','Descripcion del area',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('DESC_AREA', old('DESC_AREA'), ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese la Descripcion del Area",'data-parsley-error-message'=>"Ingrese solo letras y espacios",'minlength'=>'3']) !!}
        </div>
    </div>
    <a href="{{ route('area.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('registrar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>
@endsection