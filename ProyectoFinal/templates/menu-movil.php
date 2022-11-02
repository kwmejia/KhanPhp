<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;
?>


<!-- ==================================================
       Header MOVIL
    ======================================================= -->
<header class="d-block d-md-none container-fluid p-0">
    <div class="container-header-movil d-flex justify-content-around align-items-center p-5">
        <a href="index.php">
            <h1 class="title-header">T KAHN</h1>
        </a>

        <div class="col-2 col-md-3 d-flex justify-content-center align-items-center">
            <div class="pr-2 pr-lg-3 pt-2 menuIcon ">
                <i class="fas fa-bars lead" data-toggle="collapse" data-target="#menu2"></i>
            </div>
        </div>

    </div>
    <div id="menu2" class="collapse col-12 " style="background-color: #F5ECD8;">
        <div class="menu2 d-flex flex-column justify-content-center text-center">
            <a href="index.php" class="my-2">Inicio</a>
            <a href="albumes.php" class="my-2">Álbumes</a>
            <a href="artista.php" class="my-2">Artista</a>
            <a href="video.php" class="my-2">Video</a>
            <?php
            if ($auth) { ?>
                <a href="admin/admin.php" class="mx-4">Admin</a>
                <a href="config/cerrar-sesion.php" class="mx-4">Logout</a>
            <?php } else { ?>
                <a href="login.php" class="mx-4">Login</a>
            <?php
            };
            ?>
        </div>

    </div>
</header>