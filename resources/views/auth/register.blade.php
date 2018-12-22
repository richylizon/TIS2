@extends('menu.menureg')
@section('titulo1reg', 'REGISTRO')
@section('titulo2reg', 'DE USUARIOS')
@section('contentreg')

<h1 class="form-heading">INGRESO</h1>
<div class="login-form">
<div class="main-div">
<div class="panel">
<h2>REGISTRO</h2>
<p>Ingrese sus datos para el registro</p>
</div>
<form id="Login" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                    <div>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Ingrese su Nombre">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                    <div>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Ingrese su email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                    <div>
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Ingrese su contraseña">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div>

                    <div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirme su contraseña">
                    </div>
                </div>
            
    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary">
                REGISTRAR
            </button>

   <!--         <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a> -->
        </div>
    </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
