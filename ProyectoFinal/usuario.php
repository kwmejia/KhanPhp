<?php
// Importar la conexión
require 'config/database.php';
$db = conectarDB();

// Crear un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


// Query para crear el usuario
$query = "INSERT INTO `usuario` (`usu_email`, `usu_password`) VALUES ('${email}', '${passwordHash}');";

// echo $query;

// Agregarlo a la base de datos
$resultado = mysqli_query($db, $query);
// $d = mysqli_fetch_assoc($resultado);
var_dump($resultado);


