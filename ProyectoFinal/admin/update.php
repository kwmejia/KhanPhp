<?php

require '../config/database.php';
$auth = estaAutenticado();

if (!$auth) {
    header('Location: ../index.php');
}

$db = conectarDB();



$id = $_GET['id'];



$id = filter_var($id, FILTER_VALIDATE_INT);
$album = listarPorId($id);

$errores = [];

$titulo = $album['alb_titulo'];
$canciones = $album['alb_canciones'];
$fecha = $album['alb_date'];
$descripcion = $album['alb_descripcion'];
$imagen = $album['alb_imagen'];
$id = $album['alb_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $canciones = mysqli_real_escape_string($db, $_POST['canciones']);
    $fecha = mysqli_real_escape_string($db, $_POST['fecha']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

    // Asignar files hacia una variable
    $imagen = $_FILES['imagen'];


    //Creacion de carpeta para imagenes
    $carpetaImagenes = '../imagenes';

    if (!is_dir($carpetaImagenes)) { //Si no existe la carpeta entonces

        mkdir($carpetaImagenes);
    }


    $nombreImagen = '';
    if ($imagen['name']) {

        //Eliminarla imagen previa
        unlink($carpetaImagenes . '/' . $album['alb_imagen']);

        //Generar un nombre unico para la imagen que llega
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
        //Subir la imagen al servidor
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" . $nombreImagen);
    } else {
        // echo "No hay una nueva imagen";
        $nombreImagen = $album['alb_imagen'];
    }

    $resultadoUpdate = actualizar($titulo, $nombreImagen, $fecha, $canciones, $descripcion, $id);

    if ($resultadoUpdate) {
        //Redireccionando al usuario.  
        header('Location: admin.php?resultado=3');
    }
}

?>

<?php include 'templates-admin/header.php'; ?>

<main class="container-fluid pt-5 mb-5">
    <h2 class="title-albumes my-5 pt-5" id="titulo-albumes">Administrador</h2>
    <div class="container">
        <div class="row">
            <!-- Nav -->
            <div class="col-12 col-md-3 menu-admin d-flex justify-content-center  p-0">
                <div class="colum  d-flex flex-column justify-content-center ">
                    <div class="imagen-admin"></div>
                    <h2 class="nombre-admin my-4">Kevin Mejía</h2>
                    <a href="admin.php">
                        <div class="opcion-albumes">Cancelar</div>
                    </a>
                </div>

            </div>

            <!-- Acciones -->
            <div class="col-12 col-md-9 px-0 px-md-5  my-5 my-md-0">

                <div class="contenedor-formularios">

                    <form action="update.php?id=<?php echo $album['alb_id'] ?>" method="POST" class="p-5" enctype="multipart/form-data">
                        <fieldset class="d-flex flex-column">
                            <legend>Informacion General</legend>

                            <div class="form-group d-flex flex-column">
                                <label for="titulo">Titulo:</label>
                                <input type="text" id="titulo" name="titulo" placeholder="Nombre del Álbum" class="form-control form-control-lg" value="<?php echo $titulo ?>" style="font-size: 16px;" required>
                            </div>

                            <div class="form-group d-flex flex-column">
                                <label for="imagen">Imagen:</label>
                                <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">
                                <div>
                                    <img src="../imagenes/<?php echo $imagen ?>" height="200px" width="auto" class="img-fluid my-3">

                                </div>
                            </div>


                            <div class="form-group d-flex flex-column">
                                <label for="canciones">Canciones:</label>
                                <input type="number" name="canciones" id="canciones" placeholder="Número de canciones" value="<?php echo $canciones ?>" required>
                            </div>


                            <div class="form-group d-flex flex-column">
                                <label for="fecha">Fecha de lanzamiento:</label>
                                <input type="date" name="fecha" id="fecha" placeholder="Precio Propiedad" value="<?php echo $fecha ?>" required>
                            </div>

                            <div class="form-group d-flex flex-column">
                                <label for="descripcion">Descripcion:</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="10" required><?php echo $descripcion ?></textarea>
                            </div>
                            <input type="submit" class="opcion-albumes" value="Actualizar Álbum">

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'templates-admin/footer.php'; ?>