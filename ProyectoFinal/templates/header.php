<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;
?>

<!-- ==================================================
       Header MD
    ======================================================= -->
<header class="d-none d-md-block container-fluid p-0" id="header-albumes">
    <div class="container-header-albumes p-5" style="box-shadow: .1rem .1rem 2rem #3B3B3B;">
        <a href="index.php" class="title-header">T KAHN</a>
        <nav class="d-flex flex-wrap">
            <a href="index.php">Inicio</a>
            <a href="albumes.php" class="mx-4">Álbumes</a>
            <a href="artista.php" class="mx-4">Artista</a>
            <a href="video.php" class="mx-4">Video</a>
            <?php
            if ($auth){ ?>
                <a href="admin/admin.php" class="mx-4">Admin</a>
                <a href="config/cerrar-sesion.php" class="mx-4">Logout</a>
            <?php }else{ ?>
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