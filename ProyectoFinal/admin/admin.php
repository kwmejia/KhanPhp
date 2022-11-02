<?php

//Importar la conexion
require '../config/database.php';

$auth = estaAutenticado();
if (!$auth) {
    header('Location: ../index.php');
}

$db = conectarDB();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['buscar'];
    $query = "SELECT * FROM album WHERE alb_titulo like'${nom}%'; ";
    $resultadoConsulta = mysqli_query($db, $query);
} else {
    $resultadoConsulta = listar();
}

if (isset($_GET['resultado']) && !empty($_GET['resultado'])) {
    $resultadoCRUD = $_GET['resultado'];
} else {
    $resultadoCRUD = '0';
}

?>


<?php include 'templates-admin/header.php'; ?>

<main class="container-fluid pt-5 mb-5">
    <h2 class="title-albumes my-5 pt-5" id="titulo-albumes">Administrador</h2>


    <div class="container">
        <?php if ($resultadoCRUD === '1') : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Registro Exitoso!</strong> El Álbum se ha agregado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php elseif ($resultadoCRUD === '2') : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Eliminación Exitosa!</strong> El Álbum se ha eliminado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


        <?php elseif ($resultadoCRUD === '3') : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Actualización Exitosa!</strong> El Álbum se ha actualizado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif; ?>

        <div class="buscar w-100 d-flex justify-content-end mb-3">
            <form action="admin.php" method="POST" class="d-flex">
                <input type="text"  class="form-control  form-control-lg" name="buscar" id="buscar" placeholder="Buscar por nombre">
                <!-- <input type="submit" value="Buscar"> -->
                <button type="submit" class="btn-search">
                    <img src="../img/search.png">
                </button>
            </form>
        </div>

        <div class="row">

            <!-- Nav -->
            <div class="col-12 col-md-3  d-flex justify-content-center">
                <div class="colum  d-flex flex-column justify-content-center menu-admin">
                    <div class="imagen-admin"></div>
                    <h2 class="nombre-admin my-4">Admin</h2>
                    <a href="crear.php">
                        <div class="opcion-albumes">Agregar Álbum</div>
                    </a>
                    <hr>
                    <a href="admin.php">
                        <div class="a-albumes">
                            Álbumes
                        </div>
                    </a>
                    <hr>
                    <a href="concierto.php">
                        <div class="a-albumes">
                            Conciertos
                        </div>
                    </a>
                </div>

            </div>

            <!-- Acciones -->
            <div class="col-12 col-md-9 p-0 my-5 my-md-0 lista ">

                <table class="tabla table-responsive-md">
                    <thead>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Año</th>
                        <th>Discos</th>
                        <th>Link</th>
                        <th>Opciones</th>
                    </thead>


                    <tbody>
                        <!--Mostrar resultados -->
                        <?php while ($album = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                            <tr style="color: #FFF;">
                                <td><?php echo $album['alb_id'] ?></td>
                                <td><?php echo $album['alb_titulo'] ?></td>
                                <td class="text-center"> <img src="../imagenes/<?php echo $album['alb_imagen'] ?>" height="100px"></td>
                                <td><?php echo $album['alb_date'] ?></td>
                                <td class="text-center"><?php echo $album['alb_canciones'] ?></td>
                                <td style="width: 10px ;"><?php echo $album['alb_descripcion'] ?></td>

                                <td class="cont-imagen-delete " style="border-bottom: none;">
                                    <a href="eliminar.php?id=<?php echo $album['alb_id']; ?>" class="imagen-delete mx-3"></a>

                                    <a href="update.php?id=<?php echo $album['alb_id']; ?>" class="imagen-update"></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</main>


<?php include 'templates-admin/footer.php'; ?>