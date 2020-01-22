<?php

require_once "conexion.php";
$conexion=conexion();

$sql="SELECT * FROM T_PERSONA";
$result=$conexion->query($sql);

$tabla="";

while ($datos=$result->fetch_assoc()) {
	$tabla.="<tr>"
				."<td>".$datos["ID"]."</td>"
				."<td>".$datos["NOMBRE"]."</td>"
				."<td>".$datos["PATERNO"]."</td>"
				."<td>".$datos["MATERNO"]."</td>"
				."<td>".$datos["TELEFONO"]."</td>"
				."<td>"."<center><span class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalActualizar'><i class='fas fa-edit'></i></span></center>"."</td>"
				."<td>"."<center><span class='btn btn-danger btn-sm' onclick='eliminarDatos(".$datos["ID"].")'><i class='fas fa-trash-alt'></i></span></center>"."</td>"
			."</tr>";
}

$conexion->close();
echo "<table class='table table-stripped'"
		."<thead>"
			."<th>Id</th>"
			."<th>Nombre</th>"
			."<th>Apellido paterno</th>"
			."<th>Apellido materno</th>"
			."<th>Teléfono</th>"
			."<th>Editar</th>"
			."<th>Eliminar</th>"
		."</thead>"
		."<tbody>"
			.$tabla
		."</tbody>"
	."</table>";