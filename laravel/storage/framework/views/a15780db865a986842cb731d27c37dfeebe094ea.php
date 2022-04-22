<?php
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
?>



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
    <link rel="stylesheet" href="<?php echo e(asset('css/login/iniciarsesion.css')); ?>">
</head>
    <body>
        <div id="contenedor-main">
          <div id="subcont">
            <h1>Iniciar sesión</h1>
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <script type="text/javascript">
                            window.location.href = "http://127.0.0.1:8000/home";
                        </script>
                    <?php else: ?>
                        <div id="correo-electronico">
                            <label for="email" id="label-email">Correo electronico: </label>
                            <div id="correo-input">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert" id="message-error">
                                        <br>
                                        <strong><?php echo e(catchMessage($message)); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div id="contraseña">
                            <label for="password" id="label-contraseña">Contraseña: </label>

                            <div id="contraseña-input">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert" id="message-error">
                                        <br>
                                        <strong><?php echo e(catchMessage($message)); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div id="pie-login">
                            <div id="forgeter">
                                <?php if(Route::has('password.request')): ?>
                                    <a id="forgeter-password" href="<?php echo e(route('password.request')); ?>">
                                        Olvidaste tu contraseña?
                                    </a>
                                <?php endif; ?>
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
                                    <input class="recordarme" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label id="text-recordarme" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div> 
                    <?php endif; ?>
                <?php endif; ?>
            </form>
          </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\Nestor Emmanuel\Documents\GitHub\ourwayoflearning\laravel\resources\views/Login/iniciarsecion.blade.php ENDPATH**/ ?>