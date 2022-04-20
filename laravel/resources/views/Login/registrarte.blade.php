@php
    function catchMessage($catcher){
        if ($catcher = "The email has already been taken."){
            $mensaje = "El email ya ha sido registrado.";
            return $mensaje;
        }
        elseif ($catcher = "The password must be at least 8 characters.") {
            $mensaje = "La contraseña tiene que tener minimo 8 caracteres.";
            return $mensaje;
        }
        else {
            $mensaje = "None";
            return $mensaje;
        }
    }
@endphp

 

<!DOCTYPE html>
<script>
    function redirectHome() {
        window.location.href = "http://127.0.0.1:8000/";
    } 
</script>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login/registrarte.css') }}">
</head>
    <body>
        <div id="contenedor-main">
          <div id="subcont">
            <h1>Registrarte</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                @if (Route::has('login'))
                    @auth
                        <script type="text/javascript">
                            window.location.href = "http://127.0.0.1:8000/home";
                        </script>
                    @else
                        <div id="nombre">
                            <label for="name" id="label-name">Nombre </label>
                            <div id="name-input">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span id="message-error" class="invalid-feedback" role="alert">
                                        <strong>{{ catchMessage($message) }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="correo-electronico">
                            <label for="email" id="label-email">Correo electronico: </label>

                            <div id="correo-input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span id="message-error" class="invalid-feedback" role="alert">
                                        <strong>El email ya ha sido registrado.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="contraseña">
                            <label for="contraseña-input" id="label-contraseña">Contraseña: </label>
                            <input id="contraseña-input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span id="message-error" class="invalid-feedback" role="alert">
                                    <strong>La contraseña tiene que tener minimo 8 caracteres.</strong>
                                </span>
                            @enderror
                        </div>
                        <div id="confirm-password">
                            <label for="password-confirm" id="confirmar-contraseña">Confirmar Contraseña: </label>
                            <input id="password-confirm" type="password" id="password-confirm-input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div id="sumit-cheker">
                            <div id="button-register">
                                <button type="submit" id="button-register-subcontainer">
                                    Registrarte
                                </button>
                            </div>
                        </div>
                    @endauth
                @endif
            </form>
          </div>
        </div>
    </body>
</html>