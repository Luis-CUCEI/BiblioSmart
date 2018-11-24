<!DOCTYPE html>
<html lang="en">
<head>
    <title>BiblioSmart | Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/index/core-img/favicon.ico') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/vendor/bootstrap/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/fonts/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/vendor/bootstrap/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sign/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('img/sign/img-01.png') }}" alt="IMG">
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
						BiblioSmart
					</span>

                <div class="wrap-input100 validate-input" data-validate = "El Email es necesario.">
                    <input class="input100" type="email"
                           name="email"
                           for="email"
                           value=" {{ old('email') }}"
                           placeholder="Correo Electronico" {{ $errors->has('email') ? ' is-invalid' : '' }}>

                    @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "La Contraseña es necesaria.">
                    <input class="input100" type="password"
                           name="password"
                           placeholder="Contraseña" {{ $errors->has('password') ? ' is-invalid' : '' }}>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Ingresar
                    </button>
                </div>

                <div class="text-center p-t-136">

                    <a>
                        @if(session()->has('flash'))
                            <div class="alert alert-info"> {{ session('flash') }}</div>
                        @endif
                    </a>

                    <a class="txt2" href="{{ url('/register')}}">
                        Crea Cuenta
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                    <br>
                    <a class="txt2" href="{{ url('/')}}">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        Inicio
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{ asset('css/sign/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('css/sign/vendor/bootstrap/popper.js') }}"></script>
<script src="{{ asset('css/sign/vendor/bootstrap/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('css/sign/vendor/bootstrap/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('css/sign/vendor/bootstrap/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('css/sign/vendor/main.js') }}"></script>

</body>
</html>
