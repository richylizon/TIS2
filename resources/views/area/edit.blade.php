@extends('menu.menuedit')
@section('titulo1edit', 'ACTUALIZAR')
@section('titulo2edit', 'INFORMACION DEL AREA')
@section('contentedit')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error}}
                </li>
            @endforeach
        </ul>
    </div>><br />
@endif
<div>
    <div class="row">
        <div class="col">
            <div class="section_title_container text-center">
                <div class="section_subtitle">Los campos con (*) son obligatorios</div>

            </div>
        </div>
    </div>
    {!! Form::open(['route'=>['area.update', $area->id],'method'=>'patch','data-parsley-validate'=>""]) !!}
    
    <div class="form-group row">
        {!! Form::label('COD_AREA','Codigo Area (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('COD_AREA', $area->COD_AREA, ['class'=>'form-control','data-parsley-type'=>"number",'placeholder'=>"Ingrese el Codigo de Area",'required'=>'true','data-parsley-error-message'=>"Ingrese solo numeros"]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('NOMBRE_AREA','Nombre del Area (*)',['class'=>'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('NOMBRE_AREA',$area->NOMBRE_AREA, ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese el Nombre del Area",'required' =>'true','data-parsley-error-message'=>"Ingrese solo letras y espacios",'minlength'=>'3']) !!}
        </div>
    </div>
    <div class="form-group row">
            {!! Form::label('DESC_AREA','Descripcion',['class'=>'col-sm-2 col-form-label']) !!}
            <div class="col-sm-10">
                {!! Form::textarea('DESC_AREA', $area->DESC_AREA, ['class'=>'form-control', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Ingrese la Descripcion del Area",'data-parsley-error-message'=>"Ingrese solo letras y espacios",'minlength'=>'3']) !!}
            </div>
        </div>
        <a href="{{ route('area.index') }}" class="btn btn-warning btn_White">Cancel</a>
    {!! Form::submit('actualizar', ['class'=>'btn btn-warning btn_White']) !!}
    {!! Form::close() !!}
</div>
    
@endsection