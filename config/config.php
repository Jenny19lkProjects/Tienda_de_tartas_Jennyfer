<?php
$usuario = "root"; // Reemplaza con el nombre de usuario correcto
$password = ""; // Reemplaza con la contraseña correcta
$servidor = "localhost";
$basededatos = "jennyfer_tienda";

// Crear la conexión
$con = mysqli_connect($servidor, $usuario, $password, $basededatos);

// Verificar la conexión
if (!$con) {
    die("Error al conectar a la Base de Datos: " . mysqli_connect_error());
}
//Para que aparezca las tildes
mysqli_set_charset($con, "utf8mb4");
//echo "Conexión exitosa a la Base de Datos";
