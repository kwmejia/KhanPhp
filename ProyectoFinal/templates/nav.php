<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;
?>

<a href="index.php" class="title-header">T KAHN</a>
<nav>
    <a href="index.php">Inicio</a>
    <a href="albumes.php" class="mx-4">Álbumes</a>
    <a href="artista.php" class="mx-4">Artista</a>
    <a href="video.php" class="mx-4">Video</a>
    <?php
    if ($auth) { ?>
        <a href="admin/admin.php" class="mx-4">Admin</a>
        <a href="config/cerrar-sesion.php" class="mx-4">Logout</a>
    <?php } else { ?>
        <a href="login.php" class="mx-4">Login</a>
    <?php
    };
    ?>
    <div class="boton-dark" id="boton">
        <div class="bolita-blanca"></div>
    </div>
</nav>