<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'cantantedb');
    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}


function listar()
{
    $db = conectarDB();
    //Escribir el query
    $query = "SELECT * FROM album";
    //Consultar DB
    $resultadoConsulta = mysqli_query($db, $query);
    return $resultadoConsulta;
}

function listarConciertos()
{
    $db = conectarDB();
    //Escribir el query
    $query = "SELECT * FROM conciertos";
    //Consultar DB
    $resultadoConsulta = mysqli_query($db, $query);
    return $resultadoConsulta;
}


function listarPorId($id)
{
    $db = conectarDB();
    //Escribir el query
    $query = "SELECT * FROM album WHERE alb_id = $id";
    //Consultar DB
    $resultadoConsulta = mysqli_query($db, $query);
    $album = mysqli_fetch_assoc($resultadoConsulta);
    return $album;
}


function listarConciertoPorId($id)
{
    $db = conectarDB();
    //Escribir el query
    $query = "SELECT * FROM conciertos WHERE con_id = $id";
    //Consultar DB
    $resultadoConsulta = mysqli_query($db, $query);
    $album = mysqli_fetch_assoc($resultadoConsulta);
    return $album;
}




function eliminar($id)
{
    $db = conectarDB();
    $query = "DELETE FROM album WHERE alb_id = $id ";
    $resultadoDelete = mysqli_query($db, $query);
    return $resultadoDelete;
}

function eliminarConcierto($id)
{
    $db = conectarDB();
    $query = "DELETE FROM conciertos WHERE con_id = $id ";

    $resultadoDelete = mysqli_query($db, $query);
    return $resultadoDelete;
}


function actualizar($titulo, $nombreImagen, $fecha, $canciones, $descripcion, $id)
{
    $db = conectarDB();
    $query = "UPDATE `album` SET alb_titulo = '${titulo}', alb_imagen = '${nombreImagen}', alb_date = '${fecha}', alb_canciones = ${canciones} , alb_descripcion = '${descripcion}' WHERE alb_id = ${id};";
    //Ejecutar el codigo despues de que el usuario envia el formulario
    $resultado =  mysqli_query($db, $query);
    return $resultado;
}

function actualizarConcierto($fecha, $pais, $lugar, $id)
{
    $db = conectarDB();
    $query = "UPDATE `conciertos` SET con_fecha = '${fecha}', con_pais = '${pais}', con_lugar = '${lugar}' WHERE con_id = ${id};";
    //Ejecutar el codigo despues de que el usuario envia el formulario
    $resultado =  mysqli_query($db, $query);
    return $resultado;
}


function estaAutenticado() : bool
{
    session_start();
    $auth = $_SESSION['login'];
    if ($auth) {
        return true;
    }
     return false;
    
}
