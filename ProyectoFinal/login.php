<?php
require 'config/database.php';
$db = conectarDB();
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password =  mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }

    if (!$password) {
        $errores[] = "El password es obligatorio o no es válido";
    }

    if (empty($errores)) {
        //Revisar si el usuario existe
        $query = "SELECT * FROM usuario WHERE usu_email = '${email}';";
        $resultado = mysqli_query($db, $query);



        if ($resultado->num_rows) {  //Si hay resultados
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);


            //verficar si el password es correcto o no
            $aut = password_verify($password, $usuario['usu_password']); //Verifica y devulve  true o false

            if ($aut) {
                //El usuario esta autenticado
                session_start();
                //Lenar el arreglo de la sesión
                 $_SESSION['usuario'] = $usuario['usu_email'];
                 $_SESSION['login'] = true;

            
                header('Location: admin/admin.php');
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="T KAHN, artista de hip hop old school." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Roboto+Mono&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/albumes.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <!-- CSS only -->

    <title>Kahn</title>
</head>

<body class="ligth ">
    <?php include 'templates/preload.php' ?>

    <?php include 'templates/header.php' ?>

    <?php include 'templates/menu-movil.php' ?>



    <!-- ==================================================
       Banner MD Abumes
    ======================================================= -->
    <section class="banner-login">
        <div class="container d-flex justify-content-start flex-column  mt-5 pt-5 ">

            <div class="contenedor-title-principal-2">
                <span class="title-principal-2 " id="titulo-albumes">LOGIN</span>
            </div>
        </div>
    </section>



    <main class="container contenedor-login d-flex flex-column justify-content-center my-5">
        <?php foreach ($errores as $error) : ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong style="font-size:20px;"><?php echo $error; ?></strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endforeach; ?>

        <section class="login p-1 p-md-5 d-flex justify-content-center">
            <div class="img-user">
            </div>

            <form action="login.php" method="POST" class="formulario-login d-flex flex-column justify-content-center">
                <h2 class="my-5 my-md-0">Login</h2>
                <div class="form-floating my-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">Usuario</label>
                </div>
                <div class="form-floating  my-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Contraseña</label>
                </div>
                <button type="submit" class="btn-submit">Ingresar</button>
            </form>
        </section>
    </main>

    <?php include 'templates/footer.php' ?>

</body>

</html>