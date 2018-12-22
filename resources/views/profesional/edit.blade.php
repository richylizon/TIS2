@extends('menu.menuedit')
@section('titulo1edit', 'ACTUALIZAR')
@section('titulo2edit', 'INFORMACION DEL PROFESIONAL')
@section('contentedit')
<div>
     <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>['profesional.update', $profesional->id],'method'=>'patch','data-parsley-validate'=>""]) !!}

<!-- Para mostrar error en las validaciones-->
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger"> {{ $error }}</p>
    @endforeach

    <div class="form-group row">
        {!! Form::label('NOM_P','Nombre (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
<!--            {!! Form::text('NOM_PROF',$profesional->NOM_PROF, ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese el Nombre del Profesional",'data-parsley-error-message'=>"Ingrese solo letras y espacios",'required' =>'true','minlength'=>'3']) !!} -->
            {!! Form::text('nombre',$profesional->NOM_PROF, ['class'=>'form-control', 'placeholder'=>"Ingrese el Nombre del Profesional"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('AP_P','Apellido Paterno (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('apellido_paterno',$profesional->AP_PAT_PROF, ['class'=>'form-control','placeholder'=>"Ingrese el Apellido Paterno"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('AP_M','Apellido Materno',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('apellido_materno', $profesional->AP_MAT_PROF, ['class'=>'form-control','placeholder'=>"Ingrese el Apellido Materno"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('T','Titulo Profesional',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('titulo', $titulo, $titulo ,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('C_U','Codigo Universitario',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('cod_univ', $profesional->COD_UNI, ['class'=>'form-control','placeholder'=>"Ingrese el codigo"]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('TELF_PROF','Telefono (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('telefono',$profesional->TELF_PROF, ['class'=>'form-control','placeholder'=>"Ingrese el Telefono"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('CI_PROF','CI (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('ci', $profesional->CI_PROF, ['class'=>'form-control','placeholder'=>"Ingrese el CI"]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('Tipo','Tipo',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('Tipo',array('Interno' => 'Interno', 'Externo' => 'Exteno'), $profesional->Tipo,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('CORREO_PROF','Correo (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::email('correo', $profesional->CORREO_PROF, ['class'=>'form-control','placeholder'=>"Ingrese un correo"]) !!}
        </div>
    </div>
    <a href="{{ route('profesional.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('actualizar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>

@endsection
