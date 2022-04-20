@php
    function catchMessage($catcher){
        if ($catcher = "These credentials do not match our records."){
            $mensaje = "El correo no existe o la contraseña es incorrecta.";
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
    <link rel="stylesheet" href="{{ asset('css/login/iniciarsesion.css') }}">
</head>
    <body>
        <div id="contenedor-main">
          <div id="subcont">
            <h1>Iniciar sesión</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if (Route::has('login'))
                    @auth
                        <script type="text/javascript">
                            window.location.href = "http://127.0.0.1:8000/home";
                        </script>
                    @else
                        <div id="correo-electronico">
                            <label for="email" id="label-email">Correo electronico: </label>
                            <div id="correo-input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" id="message-error">
                                        <br>
                                        <strong>{{ catchMessage($message) }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="contraseña">
                            <label for="password" id="label-contraseña">Contraseña: </label>

                            <div id="contraseña-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" id="message-error">
                                        <br>
                                        <strong>{{ catchMessage($message) }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="pie-login">
                            <div id="forgeter">
                                @if (Route::has('password.request'))
                                    <a id="forgeter-password" href="{{ route('password.request') }}">
                                        Olvidaste tu contraseña?
                                    </a>
                                @endif
                                <a id="no-cuenta" href="http://127.0.0.1:8000/login/registrarte">
                                    No tienes cuenta?
                                </a>
                            </div>
                            <div id="sumit-cheker">
                                <div id="button-login">
                                    <button type="submit" id="button-login-subcontainer">
                                        INICIAR SESIÓN
                                    </button>
                                </div>
                                <div id="recordar-cheker">
                                    <input class="recordarme" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label id="text-recordarme" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div> 
                    @endauth
                @endif
            </form>
          </div>
        </div>
    </body>
</html>