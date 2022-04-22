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
    <link rel="stylesheet" href="<?php echo e(asset('css/encabezado/encabezado.css')); ?>">
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


            <img id="home" src="<?php echo e(asset('images/home.png')); ?>" alt="Home" width="40" height="40" onclick="redirectHome()"> 
            <a id="ad" href="http://127.0.0.1:8000/acercade">Acerca de</a>
            <a id="ct" href="http://127.0.0.1:8000/categorias">Categorias</a>
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                    <a id="hometext" href="<?php echo e(url('/home')); ?>">Home</a>
                <?php else: ?>
                    <a id="login" href="<?php echo e(route('login')); ?>">Iniciar Sesión</a>

                    <?php if(Route::has('register')): ?>
                        <a id="register" href="<?php echo e(route('register')); ?>">Registrarte</a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </body>

</html><?php /**PATH C:\Users\Nestor Emmanuel\Documents\GitHub\ourwayoflearning\laravel\resources\views/encabezado/encabezado.blade.php ENDPATH**/ ?>