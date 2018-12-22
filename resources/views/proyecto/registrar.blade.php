@extends('menu.menureg')
@section('titulo1reg', 'REGISTRO')
@section('titulo2reg', 'DE PERFILES')
@section('contentreg')

<div>
  <!-- Para mostrar error en las validaciones-->
      @foreach ($errors->all() as $error)
      <p class="alert alert-danger"> {{ $error }}</p>
      @endforeach
      <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>   

    {!! Form::open(['route'=>'proyecto.store','method'=>'POST']) !!}
    <div class="form-group row">
        {!! Form::label('TITULO_PERFIL','Título Perfil (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('titulo', old('titulo'), ['class'=>'form-control','placeholder'=>"Ingrese el Titulo del Perfil"]) !!}
        </div>
    </div>


    <div class="form-group row">
        {!! Form::label('OBJ_GRAL','Objetivo General (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('objetivo_general', old('objetivo_general'), ['class'=>'form-control','placeholder'=>"Ingrese el Objetivo General"]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('OBJ_ESP','Objetivos Específicos (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('objetivos_especificos', old('objetivos_especificos'), ['class'=>'form-control','placeholder'=>"Ingrese Objetivos Especificos"]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('DESCRIPCION','Descripción (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('descripcion', old('DESCRIPCION'), ['class'=>'form-control','placeholder'=>"Ingrese la Descripcion"]) !!}
        </div>
    </div>

    <div class="form-group row">
      {!! Form::label('CARRERA','Carrera',['class'=>'col-sm-2 col-form-label']) !!}
     <div class="form-group col-sm-4">
        {!! Form::select('carrera',$carreras, $carreras ,['class'=>'form-control']) !!}
      </div>
   </div>

    <div class="form-group row">
      {!! Form::label('FECHA_REGISTRO','Fecha de registro',['class'=>'col-sm-2 col-form-label']) !!}
      <div class="form-group col-sm-4">
        {!! Form::date('fecha_registro', $now, ['class'=>'form-control']) !!}
      </div>

      {!! Form::label('GESTION_REGISTRO','Gestión Registro',['class'=>'col-sm-2 col-form-label']) !!}
      <div class="form-group col-sm-4">
        {!! Form::select('gestion_registro', $gestiones,$gestiones, ['class'=>'form-control']) !!}
      </div>
    </div>

    <div class="form-group row">
      {!! Form::label('MODALIDAD','Modalidad',['class'=>'col-sm-2 col-form-label']) !!}
     <div class="form-group col-sm-4">
      {!! Form::select('modalidad',$modalidades, $modalidades ,['class'=>'form-control']) !!}

  <!-- <input type="checkbox" name="modalidadtd" value="$modalidadtds">Trabajo Dirigido
       <input type="checkbox" name="modalidadpg" value="$modalidadpgs">Proyecto de grado
       <input type="checkbox" name="modalidadad" value="$modalidadads">tb Adscripcion
       <input type="checkbox" name="modalidadpi" value="$modalidadpis">Trabajo de Investigacion(Tesis)
       <input type="checkbox" name="modalidadex" value="$modalidadexs">Exelencia-->
      </div>

      {!! Form::label('GESTION_LIMITE','Gestión Limite',['class'=>'col-sm-2 col-form-label']) !!}
      <div class="form-group col-sm-4">
        {!! Form::select( 'gestion_limite', $gestiones,  $gestiones, ['class'=>'form-control']) !!}
      </div>
    </div>

      <div class="form-group row">

        {!! Form::label('ESTUDIANTE','Estudiante',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="form-group col-sm-4">
          {!! Form::select('estudiante',$estudiantes, $estudiantes ,['class'=>'form-control','id'=>'combobox']) !!}
        </div>

        {!! Form::label('TUTOR','Tutor',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="form-group col-sm-4">
          {!! Form::select( 'tutor', $tutores,  $tutores, ['class'=>'form-control','id'=>'combobox']) !!}
        </div>
      </div>

      <div class="form-group row">

        {!! Form::label('AREA','Area',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="form-group col-sm-12">
          {!! Form::select('area',$areas, $areas ,['class'=>'form-control', 'id'=>'combobox']) !!}
        </div>


      </div>

    <a href="{{ route('proyecto.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('registrar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>

@endsection
