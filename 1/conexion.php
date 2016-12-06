<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "basedatosmaster";
$tbl_name = "Usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$username'";

$result = $conexion->query($sql);
mysqli_close($conexion); 

return $result;
?>