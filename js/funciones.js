function mostrarDatos(){
	$.ajax({
		url: "php/mostrarDatos.php",
		success: function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function agregarDatos(){

	if($('#nombre').val().trim()==""){
		Swal.fire('Debes agregar un nombre!');
		return false;
	}

	if($('#paterno').val().trim()==""){
		Swal.fire('Debes agregar un apellido paterno!');
		return false;
	}

	if($('#materno').val().trim()==""){
		Swal.fire('Debes agregar un apellido materno!');
		return false;
	}

	if($('#telefono').val().trim()==""){
		Swal.fire('Debes agregar un telefono!');
		return false;
	}

	$.ajax({
		type: "POST",
		data: $('#formAgregarDatos').serialize(),
		url: "php/agregarDatos.php",
		success: function(r){
			if(r==1){
				$('#formAgregarDatos')[0].reset();
				mostrarDatos();
				Swal.fire(
				  'Éxito!',
				  'El registro fue agregado.',
				  'success'
				);
			} else{
				Swal.fire(
				  'Error',
				  'El registro no fue agregado.',
				  'error'
				);
			}
		}
	});
}

function eliminarDatos(id){
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: true
	});

	swalWithBootstrapButtons.fire({
		title: '¿Seguro de eliminar?',
		text: "Una vez eliminado este registro, no podrá ser recuperado.",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Sí, eliminar',
		cancelButtonText: 'No, cancelar',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			swalWithBootstrapButtons.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				)
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
			) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
				)
		}
	});
}