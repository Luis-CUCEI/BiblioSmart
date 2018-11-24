<!DOCTYPE html>
<html lang="en">
<head>
    <title>BiblioSmart | Registro </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/index/core-img/favicon.ico') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href=" {{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/sign/fonts/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/styles.css') }}">
    <!--===============================================================================================-->
</head>

<body>
<div class="container-login100">
    <div class="container" id="advanced-search-form">
        <h2>Completa tu registro para disfrutar de BiblioSmart:</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Ingresa tu Nombre: </label>
                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                       placeholder="Nombre Completo"
                       id="name"
                       name="name"
                       value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                @endif
            </div>
            <div class="form-group">
                <label for="lastname">Ingresa tu Apellido: </label>
                <input type="text" class="form-control"
                       placeholder="Apellido Completo"
                       id="lastname"
                       name="lastname" value="{{ old('lastname') }}">
            </div>
            <div class="form-group">
                <label for="code">Codigo de Empleado: </label>
                <input type="text" class="form-control"
                       placeholder="Codigo"
                       id="code"
                       name="code" value="{{ old('code') }}">
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control
                            {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                           required placeholder="Contraseña">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required placeholder="Confirma contraseña">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                       placeholder="Email"
                       id="email"
                       name="email"
                       value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                   	            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                @endif
            </div>

            <button type="submit" class="btn btn-info btn-lg btn-warnin" id="search"> Registrarme</button>
        </form>

        <br>
        <a class="txt2" href="{{ url('/')}}">
            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
            Inicio
        </a>
    </div>
</div>
</body>
</html>