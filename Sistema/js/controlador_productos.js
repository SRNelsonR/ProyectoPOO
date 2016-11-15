$(document).ready(function(){
	
	cargarProductos = function(){
		$.ajax({
			url: "ajax/acciones_cliente.php?accion=2",
			//method: "POST",
			success: function(seccionProductos){
				$("#div-mostrar-productos").html(seccionProductos);
			},
			error: function(){

			}
		});
	}

	cargarProductos();

});