<?php

require_once 'conexion.php';

$conexion = conexion();

$datos=array(
	$conexion->real_escape_string(htmlentities($_POST["nombre"])),
	$conexion->real_escape_string(htmlentities($_POST["paterno"])),
	$conexion->real_escape_string(htmlentities($_POST["materno"])),
	$conexion->real_escape_string(htmlentities($_POST["telefono"]))
);

$sql = "INSERT INTO T_PERSONA(NOMBRE, PATERNO, MATERNO, TELEFONO) VALUES (?,?,?,?)";
$query = $conexion->prepare($sql);
$query->bind_param('ssss', $datos[0], $datos[1], $datos[2], $datos[3]);
echo $query->execute();
$query->close();
