$(document).ready(function(){
	//alert("Hola esta todo listo");
	$("#btn-crear").click(function(){
		//alert("Click en crear usuario");
		var parametros = "txt-nombre=" + $("#txt-nombre").val() + 
						"&txt-apellido=" + $("#txt-apellido").val() +
						"&txt-edad=" + $("#txt-edad").val() +
						"&rbt-genero=" + $("#rbt-genero").val() +
						"&txt-identidad=" + $("#txt-identidad").val() +
						"&txt-domicilio=" + $("#txt-domicilio").val() +
						"&txt-telefono=" + $("#txt-telefono").val() +
						"&txt-correo=" + $("#txt-correo").val() +
						"&slc-estado-civil=" + $("#slc-estado-civil").val() +
						"&txt-contrasena=" + $("#txt-contrasena").val() +
						"&txt-fecha-nacimiento=" + $("#txt-fecha-nacimiento").val() +
						"&txt-fecha-registro=" + $("#txt-fecha-registro").val() +
						"&txt-nombre-usuario=" + $("#txt-nombre-usuario").val() +
						"&txt-membresia=" + $("#txt-membresia").val() +
						"&slc-tipo-cliente=" + $("#slc-tipo-cliente").val() ;
		//alert("Valores: " + parametros);
		$.ajax({
			url:"../ajax/acciones_cliente.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){
				//$("#resultado").html(resultado);
				//alert(resultado);
				window.location="../index.php";
				
			},
			error:function(){

			}
		});
	});
});