<?php

//Importar la conexion
require '../config/database.php';

$auth = estaAutenticado();
if (!$auth) {
    header('Location: ../index.php');
}

$db = conectarDB();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['buscar'] != '') {
    $date = $_POST['buscar'];
    $datef = $_POST['buscar2'];
    $query = "SELECT * FROM conciertos WHERE con_fecha between '${date}' and '{$datef}'; ";
    
    $resultadoConsulta = mysqli_query($db, $query);
} else {
    $resultadoConsulta = listarConciertos();
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
                <strong>¡Registro Exitoso!</strong> El Concierto se ha agregado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php elseif ($resultadoCRUD === '2') : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Eliminación Exitosa!</strong> El Concierto se ha eliminado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


        <?php elseif ($resultadoCRUD === '3') : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Actualización Exitosa!</strong> El Concierto se ha actualizado correctamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif; ?>

        <div class="buscar w-100 d-flex justify-content-end mb-3">
            <form action="concierto.php" method="POST" class="d-flex">
                <input type="date"  class="form-control  form-control-lg" name="buscar" id="buscar" placeholder="Ingresa el nombre">
                <input type="date"  class="form-control  form-control-lg" name="buscar2" id="buscar2" placeholder="Ingresa el nombre">
                <!-- <input type="submit" value="Buscar"> -->
                <button type="submit" class="btn-search">
                    <img src="../img/search.png">
                </button>
            </form>
        </div>

        <div class="row">

            <!-- Nav -->
            <div class="col-12 col-md-3 menu-admin d-flex justify-content-center  p-0">
                <div class="colum  d-flex flex-column justify-content-center ">
                    <div class="imagen-admin"></div>
                    <h2 class="nombre-admin my-4">Admin</h2>
                    <a href="crear-concierto.php">
                        <div class="opcion-albumes">Agregar Concierto</div>
                    </a>
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
            <div class="col-12 col-md-9 p-0 px-md-4 my-5 my-md-0  ">

                <table class="table table-striped table-dark  table-responsive-md">
                    <thead>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Pais</th>
                        <th>Lugar</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        <!--Mostrar resultados -->
                        <?php while ($concierto = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                            <tr style="font-size: 15px; text-align: center;">
                                <td><?php echo $concierto['con_id'] ?></td>
                                <td><?php echo $concierto['con_fecha'] ?></td>
                                <td><?php echo $concierto['con_pais'] ?></td>
                                <td><?php echo $concierto['con_lugar'] ?></td>

                                <td class="cont-imagen-delete">
                                    <a href="eliminar-concierto.php?id=<?php echo $concierto['con_id']; ?>" class="imagen-delete mx-3"></a>
                                    <a href="update-concierto.php?id=<?php echo $concierto['con_id']; ?>" class="imagen-update"></a>
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