<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="Description" content="T KAHN, artista de hip hop old school." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Roboto+Mono&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/albumes.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">


    <title>Kahn</title>
</head>

<body class="ligth ">

    <?php include '../templates/preload.php'; ?>

    <!-- ==================================================
       Header MD
    ======================================================= -->
    <header class="d-none d-md-block container-fluid p-0" id="header-albumes">
        <div class="container-header-albumes p-5" style="box-shadow: .1rem .1rem 2rem #3B3B3B;">
            <a href="../index.php" class="title-header">T KAHN</a>
            <nav class="d-flex flex-wrap">
                <a href="../index.php">Inicio</a>
                <a href="../albumes.php" class="mx-4">Álbumes</a>
                <a href="../artista.php" class="mx-4">Artista</a>
                <a href="../video.php" class="mx-4">Video</a>
                <?php
                if ($auth) { ?>
                    <a href="admin.php" class="mx-4">Admin</a>
                    <a href="../config/cerrar-sesion.php" class="mx-4">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="mx-4">Login</a>
                <?php
                };
                ?>
                <div class="boton-dark" id="boton">
                    <div class="bolita-blanca"></div>
                </div>
            </nav>
        </div>
    </header>



    <!-- ==================================================
       Header MOVIL
    ======================================================= -->
    <header class="d-block d-md-none container-fluid p-0">
        <div class="container-header-movil d-flex justify-content-around align-items-center p-5">
            <a href="../index.php">
                <h1 class="title-header">T KAHN</h1>
            </a>

            <div class="col-2 col-md-3 d-flex justify-content-center align-items-center">
                <div class="pr-2 pr-lg-3 pt-2 menuIcon ">
                    <i class="fas fa-bars lead" data-toggle="collapse" data-target="#menu2"></i>
                </div>
            </div>

        </div>
        <div id="menu2" class="collapse col-12 ">
            <div class="menu2 d-flex flex-column justify-content-center text-center">
                <a href="../index.php" class="my-2">Inicio</a>
                <a href="../albumes.php" class="my-2">Álbumes</a>
                <a href="../artista.php" class="my-2">Artista</a>
                <a href="../video.php" class="my-2">Video</a>
                <?php
                if ($auth) { ?>
                    <a href="admin.php" class="mx-4">Admin</a>
                    <a href="../config/cerrar-sesion.php" class="mx-4">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="mx-4">Login</a>
                <?php
                };
                ?>
            </div>

        </div>
    </header>