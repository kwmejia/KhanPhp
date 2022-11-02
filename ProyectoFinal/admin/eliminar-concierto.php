<?php

require '../config/database.php';

//*** Para eliminar***
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if($id){
    // Eliminar archivo
    $resultado = eliminarConcierto($id);
    header('Location: concierto.php?resultado=2');
}

}