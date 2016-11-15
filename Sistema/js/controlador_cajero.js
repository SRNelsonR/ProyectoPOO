$(document).ready(function(){
	alert("Hola esta todo listo");
	
	cargarTablaProductos = function(){
		$.ajax({
			url: "../ajax/acciones_cajero.php?accion=1",
			success: function(resultado){

			},
			error: function(){
				
			}
		});
	}

});