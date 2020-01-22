<?php

require_once "conexion.php";

$conexion=conexion();
$id=$conexion->real_escape_string(htmlentities($_POST["id"]));

$sql="SELECT ID, NOMBRE, PATERNO, MATERNO, TELEFONO FROM T_PERSONA WHERE ID=?";
$query=$conexion->prepare($sql);
$query->bind_param('i', $id);
$query->execute();
$datos=$query->get_result()->fetch_assoc();
$query->close();
echo json_encode($datos);
