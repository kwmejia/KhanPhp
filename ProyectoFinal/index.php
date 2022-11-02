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
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&family=Roboto+Mono&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">

    <title>Kahn</title>
</head>

<body class="ligth ">
    <?php include 'templates/preload.php' ?>

    <!-- ==================================================
       Header MD
    ======================================================= -->
    <header class="d-none d-md-block container-fluid p-0" id="header">
        <div class="container-header p-5">
            <?php include 'templates/nav.php' ?>
        </div>
    </header>



    <?php include 'templates/menu-movil.php' ?>

    <!-- ==================================================
       Banner MD
    ======================================================= -->
    <div class="banner " id="banner">
        <div class="container d-flex justify-content-start flex-column">
            <div class="contenedor-title-principal-3">
                <span class="title-principal-3">HIP HOP</span>
            </div>
            <div class="contenedor-title-principal ">
                <span class="title-principal">NEW</span>
            </div>
            <div class="contenedor-title-principal-2">
                <span class="title-principal-2">ARTIST</span>
            </div>
            <!-- <span class="title-principal">NEW</span>
            <span class="title-principal-2">ALBUM</span> -->
        </div>
    </div>
    <!-- ==================================================
       Videos
    ======================================================= -->
    <section class="container-fluid contenedor-videos">
        <h2 class="text-center title-videos m-2">Lo más escuchado</h2>
        <div class="container p-0">
            <div class="row  d-flex justify-content-center">
                <div class="col-12 col-md-6 mt-3 d-flex justify-content-center">
                <iframe width="300"  src="https://www.youtube.com/embed/HvC96EaQDmU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="col-12 col-md-6 d-flex  mt-3 justify-content-center">
                    <iframe width="300" src="https://www.youtube.com/embed/V58qrNl-Iyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </section>


    <main class="container my-5">
        <h2 class="title-albumes my-4" id="titulo-albumes">Álbumes Mas Exitosos</h2>
        <div class="row d-flex justify-content-center justify-content-md-start">
            <?php include 'templates/album.php'; ?>

        </div>
    </main>

    <section class="container-fluid my-5">

        <div class=" conciertos">
        <h2 class="title-conciertos my-4" id="titulo-albumes">Próximos Conciertos</h2>

            <?php include 'templates/tabla-conciertos.php'; ?>
        </div>

    </section>


    <?php include 'templates/footer.php' ?>

    <script src="js/scroll.js"></script>
</body>

</html>