@extends('menu.menuedit')
@section('titulo1', 'Universidad Mayor De San Simon')
@section('titulo2', 'Departamento de Informática y Sistemas.')

@section('content')

<div class="container">
    <div class="media-heading">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>            
                    @endif
                    USUARIO ADMINISTRADOR!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
