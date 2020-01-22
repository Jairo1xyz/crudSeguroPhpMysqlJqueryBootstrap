<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>CRUD seguro</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
	<!-- jQuery oficial -->
	<script src="js/jquery-3.4.1.js"></script>

	<!-- Bootstrap JS -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Sweet Alert 2 -->
	<script src="js/sweetalert2@9.js"></script>

	<!-- Font Awesome -->
	<script src="js/d34f38af82.js"></script>

	<script src="js/funciones.js"></script>

	<style type="text/css">
		.container{ margin-top: 6em; }
	</style>
</head>
<body style="background-color: #017ea1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card bg-light mb-3">
					<div class="card-header">
						<li class="fas fa-lock"></li> <strong>Consultas seguras con PHP a MySQL</strong>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<section class="text-right">
									<!-- Button trigger modal -->
									<span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalInsertar">
										<i class="fas fa-plus-circle"></i> Agregar nuevo
									</span>
								</section>
								<div id="tablaDatos">Cargando...</div>
							</div>
						</div>
					</div>
					<div class="card-footer text-muted text-right">
						&copy; <a href="https://maxcollao.com" target="_blank">Max Collao</a> 2020
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Inicio de modal de inserción -->
	<!-- Modal -->
	<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Insertar nuevo registro</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="formAgregarDatos">
	      		<label>Nombre</label>
		        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm">
		        <label>Apellido paterno</label>
		        <input type="text" id="paterno" name="paterno" class="form-control form-control-sm">
		        <label>Apellido materno</label>
		        <input type="text" id="materno" name="materno" class="form-control form-control-sm">
		        <label>Teléfono</label>
		        <input type="text" id="telefono" name="telefono" class="form-control form-control-sm">
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary" id="botonGuardar" onclick="agregarDatos()">Guardar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Termina modal de inserción -->

	<!-- Inicio de modal de actualización -->
	<!-- Modal -->
	<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="formActualizarDatos">
	      		<label>Nombre</label>
		        <input type="text" name="nombre_a" class="form-control form-control-sm">
		        <label>Apellido paterno</label>
		        <input type="text" name="paterno_a" class="form-control form-control-sm">
		        <label>Apellido materno</label>
		        <input type="text" name="materno_a" class="form-control form-control-sm">
		        <label>Teléfono</label>
		        <input type="text" name="telefono_a" class="form-control form-control-sm">
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-warning" id="botonActualizar" data-dismiss="modal">Actualizar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Termina modal de actualización -->

	<script type="text/javascript">
		$(document).ready(function(){
			mostrarDatos();
		});
	</script>
</body>
</html>