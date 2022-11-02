<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="T KAHN, artista de hip hop old school." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Roboto+Mono&family=Tajawal:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/albumes.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">

    <title>Kahn</title>
</head>

<body class="ligth ">
    <?php include 'templates/preload.php'; ?>

    <?php include 'templates/header.php'; ?>


    <?php include 'templates/menu-movil.php'; ?>

    <!-- ==================================================
       Banner MD Abumes
    ======================================================= -->
    <section class="banner-albumes"> 
        <div class="container d-flex justify-content-start flex-column  mt-5 pt-5 ">

            <div class="contenedor-title-principal ">
                <span class="title-principal">MIS</span>
            </div>
            <div class="contenedor-title-principal-2">
                <span class="title-principal-2">ÁLBUMES</span>
            </div>
            <!-- <span class="title-principal">NEW</span>
            <span class="title-principal-2">ALBUM</span> -->
        </div>
    </section>
   

    <main class="container my-5">
        <h2 class="title-albumes my-4" id="titulo-albumes">Álbumes</h2>
        <div class="row d-flex justify-content-center justify-content-md-start">
           <?php include 'templates/albumAll.php'; ?>
        </div>
    </main>



    <?php include 'templates/footer.php'; ?>
</body>

</html>