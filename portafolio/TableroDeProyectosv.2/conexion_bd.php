<?php
function conexion(){

	$host='localhost';
	$usuario='root';
	$pass='12345678';
	$db='id5952780_tablerobd';
	$conexion=mysqli_connect($host,$usuario, $pass, $db) or die('No se pudo conectar a la Base de datos'.mysqli_error($conexion));
	return $conexion;
}


?>