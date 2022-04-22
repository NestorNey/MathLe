<?php
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
    <link rel="stylesheet" href="<?php echo e(asset('css/login/registrarte.css')); ?>">
</head>
    <body>
        <div id="contenedor-main">
          <div id="subcont">
            <h1>Registrarte</h1>
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <script type="text/javascript">
                            window.location.href = "http://127.0.0.1:8000/home";
                        </script>
                    <?php else: ?>
                        <div id="nombre">
                            <label for="name" id="label-name">Nombre </label>
                            <div id="name-input">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span id="message-error" class="invalid-feedback" role="alert">
                                        <strong><?php echo e(catchMessage($message)); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div id="correo-electronico">
                            <label for="email" id="label-email">Correo electronico: </label>

                            <div id="correo-input">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span id="message-error" class="invalid-feedback" role="alert">
                                        <strong>El email ya ha sido registrado.</strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div id="contraseña">
                            <label for="contraseña-input" id="label-contraseña">Contraseña: </label>
                            <input id="contraseña-input" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">
                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span id="message-error" class="invalid-feedback" role="alert">
                                    <strong>La contraseña tiene que tener minimo 8 caracteres.</strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                    <?php endif; ?>
                <?php endif; ?>
            </form>
          </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\Nestor Emmanuel\Documents\GitHub\ourwayoflearning\laravel\resources\views/Login/registrarte.blade.php ENDPATH**/ ?>