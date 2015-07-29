<?php
echo "CONEXION A LA BASE DE DATOS";
$URL = "sql2.freemysqlhosting.net";
$database = "sql285298";
$usuario = "sql285298";
$password = "bJ1*gX6%";
$port = 3306;

//CREAR CONECCION
$conexion = mysqli_connect(
	$URL,
	$usuario,
	$password,
	$database,
	$port);

if(!$conexion) {
	die(FINALIZO LA CONEXION);
}
echo "CONEXION EXITOSA";
?>