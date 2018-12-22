@extends('menu.menureg')
@section('titulo1reg', 'REGISTRO')
@section('titulo2reg', 'DE PROFESIONALES')
@section('contentreg')
<div>
     <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>'profesional.store','method'=>'POST','data-parsley-validate'=>""]) !!}

    <!-- Para mostrar error en las validaciones-->
        @foreach ($errors->all() as $error)
        <p class="alert alert-danger"> {{ $error }}</p>
        @endforeach


    <div class="form-group row">
        {!! Form::label('NOM_PROF','Nombre (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('nombre', old('nombre'), ['class'=>'form-control','placeholder'=>"Ingrese el Nombre del Profesional"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('AP_PAT_PROF','Apellido Paterno (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('apellido_paterno', old('apellido_paterno'), ['class'=>'form-control','placeholder'=>"Ingrese el Apellido Paterno"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('AP_MAT_PROF','Apellido Materno',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('apellido_materno', old('apellido_materno'), ['class'=>'form-control','placeholder'=>"Ingrese el Apellido Materno"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('TITULO_PROF','Titulo Profesional',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('titulo', $titulo,$titulo, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('COD_UNI','codigo universitario',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('cod_univ', old('cod_univ'), ['class'=>'form-control','placeholder'=>"Ingrese el codigo"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('TELF_PROF','Telefono (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('telefono', old('telefono'), ['class'=>'form-control','placeholder'=>"Ingrese el Telefono"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('CI_PROF','CI (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('ci', old('ci'), ['class'=>'form-control','placeholder'=>"Ingrese el CI"]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('Tipo','Tipo',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('Tipo',array('Interno' => 'Interno', 'Externo' => 'Exteno'), 'Interno',['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('CORREO_PROF','Correo (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::email('correo', old('correo'), ['class'=>'form-control','placeholder'=>"Ingrese un correo"]) !!}
        </div>
    </div>
    <a href="{{ route('profesional.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('registrar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>
@endsection
