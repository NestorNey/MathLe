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
    <link rel="stylesheet" href="{{ asset('css/encabezado/encabezado.css') }}">
</head>
    <body>
        <div id="main-logo">
        </div>
        <div id="encabezado">
            

            <!------ Buscador ------>
            <form>
                <input class="form-control" id="Buscador" placeholder="Buscar...">
            </form>
            <!---------------------->


            <img id="home" src="{{ asset('images/home.png') }}" alt="Home" width="40" height="40" onclick="redirectHome()"> 
            <a id="ad" href="http://127.0.0.1:8000/acercade">Acerca de</a>
            <a id="ct" href="http://127.0.0.1:8000/categorias">Categorias</a>
            @if (Route::has('login'))
                @auth
                    <a id="hometext" href="{{ url('/home') }}">Home</a>
                @else
                    <a id="login" href="{{ route('login') }}">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a id="register" href="{{ route('register') }}">Registrarte</a>
                    @endif
                @endauth
            @endif
        </div>
    </body>

</html>