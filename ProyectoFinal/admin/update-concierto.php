<?php

require '../config/database.php';
$auth = estaAutenticado();

if (!$auth) {
    header('Location: ../index.php');
}

$db = conectarDB();


if (isset($_GET) && !empty($_GET)) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $concierto = listarConciertoPorId($id);
    $errores = [];

    $fecha = $concierto['con_fecha'];
    $pais = $concierto['con_pais'];
    $lugar = $concierto['con_lugar'];
    $id = $concierto['con_id'];
}





if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fecha = mysqli_real_escape_string($db, $_POST['fecha']);
    $pais = mysqli_real_escape_string($db, $_POST['pais']);
    $lugar = mysqli_real_escape_string($db, $_POST['lugar']);
    $id = $_POST['id'];
    $resultadoUpdate = actualizarConcierto($fecha, $pais, $lugar, $id);

    if ($resultadoUpdate) {
        //Redireccionando al usuario.  
        header('Location: concierto.php?resultado=3');
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
                    <a href="concierto.php">
                        <div class="opcion-albumes">Cancelar</div>
                    </a>
                </div>

            </div>

            <!-- Acciones -->
            <div class="col-12 col-md-9 px-0 px-md-5  my-5 my-md-0">

                <div class="contenedor-formularios">

                    <form action="update-concierto.php" method="POST" class="p-5" enctype="multipart/form-data">
                        <fieldset class="d-flex flex-column">
                            <legend>Informacion General</legend>

                            <div class="form-group d-flex flex-column">
                                <label for="fecha">Fecha:</label>
                                <input type="date" id="fecha" name="fecha" placeholder="Fecha del concierto" class="form-control form-control-lg" required style="font-size: 16px;" value="<?php echo $fecha ?>">
                            </div>


                            <div class="form-group d-flex flex-column">
                                <label for="pais">Pais:</label>
                                <input type="text" name="pais" id="pais" placeholder="Pais del concierto" required value="<?php echo $pais ?>">
                            </div>


                            <div class="form-group d-flex flex-column">
                                <label for="lugar">Lugar:</label>
                                <input type="text" name="lugar" id="lugar" placeholder="Lugar del concierto" required value="<?php echo $lugar ?>">
                                <input type="hidden" name="id" id="id" value="<?php echo $id ?>" >
                            </div>

                            <input type="submit" class="opcion-albumes" value="Actualizar Concierto">

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'templates-admin/footer.php'; ?>