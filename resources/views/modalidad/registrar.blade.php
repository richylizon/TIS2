@extends('menu.menureg')
@section('titulo1reg', 'REGISTRO')
@section('titulo2reg', 'DE MODALIDADES')
@section('contentreg')

<div>

    <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>'modalidad.store','method'=>'POST','data-parsley-validate'=>""]) !!}
    <div class="form-group row">
        {!! Form::label('NOM','Modalidad (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('NOM', old('NOM'), ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese el Nombre de la Modalidad",'data-parsley-error-message'=>"Ingrese solo letras y espacios",'required' =>'true','minlength'=>'3']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('DESC','Descripcion',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('DESC', old('DESC'), ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese descripcion de la Modalidad",'data-parsley-error-message'=>"Ingrese solo letras y espacios"]) !!}
        </div>
    </div>
    <a href="{{ route('modalidad.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('registrar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>
@endsection