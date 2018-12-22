@extends('menu.menuLogin')
@section('titulo1login', 'Ingreso')
@section('titulo2login', 'al sistema')
@section('contentlogin')

@section('content')
<h1 class="form-heading">INGRESO</h1>
<div class="login-form">
<div class="main-div">
<div class="panel">
<h2>Login</h2>
<p>Por favor ingrese su email y contraseña</p>
</div>
<form id="Login" method="POST" action="{{ route('login') }}">
{{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail</label>

        <div >
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Ingrese su email" >

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div>
            <input id="password" type="password" class="form-control" name="password" required placeholder="Ingrese su contraseña">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary">
                INGRESAR
            </button>

   <!--         <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a> -->
        </div>
    </div>
</form>
    </div>
</div></div>



@endsection
