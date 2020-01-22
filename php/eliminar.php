<?php

require_once "conexion.php";

$conexion=conexion();
$id=$conexion->real_escape_string(htmlentities($_POST["id"]));

$sql="DELETE FROM T_PERSONA WHERE ID=?";
$query=$conexion->prepare($sql);
$query->bind_param("i", $id);
echo $query->execute();
$query->close();