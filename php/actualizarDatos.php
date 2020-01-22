<?php

require_once 'conexion.php';

$conexion = conexion();

$datos=array(
	$conexion->real_escape_string(htmlentities($_POST["nombre_a"])),
	$conexion->real_escape_string(htmlentities($_POST["paterno_a"])),
	$conexion->real_escape_string(htmlentities($_POST["materno_a"])),
	$conexion->real_escape_string(htmlentities($_POST["telefono_a"])),
	$conexion->real_escape_string(htmlentities($_POST["id_a"]))
);

$sql = "UPDATE T_PERSONA SET NOMBRE=?, PATERNO=?, MATERNO=?, TELEFONO=? WHERE ID=?";
$query = $conexion->prepare($sql);
$query->bind_param('ssssi', $datos[0], $datos[1], $datos[2], $datos[3], $datos[4]);
echo $query->execute();
$query->close();
