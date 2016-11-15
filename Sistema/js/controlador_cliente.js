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
				alert(resultado);
				window.location="../index.php";
				
			},
			error:function(){

			}
		});
	});

	$("#btn-perfil").click(function(){
		$.ajax({
			url:"../ajax/acciones_cliente.php?accion=3",
			method: "POST",
			//data: "codigo_aplicacion="+codigoAplicacion,
			dataType: 'json',
			success:function(resultado){
				$("#txt-nombre").val(resultado.nombre_cliente);
				$("#txt-apellido").val(resultado.apellido_cliente);

				$("#txt-codigo-aplicacion").val(resultado.codigo_aplicacion);				
				$("#txt-descripcion").val(resultado.descripcion);
				$("#txt-fecha-publicacion").val(resultado.fecha_publicacion);
				$("#txt-calificacion").val(resultado.calificacion);
				$("#txt-url").val(resultado.url);
				$("#slc-icono").val(resultado.url_icono);
				$("#txt-version").val(resultado.version);
				$("#txt-fecha-actualizacion").val(resultado.fecha_actualizacion);
				$("#slc-desarrollador").val(resultado.codigo_desarrollador)
				//$("#json").html(resultado);
			},
			error:function(){

			}
		});
		//$("#txt-nombre").val("Nombre del cliente");
		$("#div-perfil").fadeIn(100);
	});

	cargarProductos = function(){
		$.ajax({
			url: "ajax/acciones_cliente.php?accion=2",
			//method: "POST",
			success: function(seccionProductos){
				$("#div-mostrar-productos1").html(seccionProductos);
			},
			error: function(){

			}
		});
	}

	cargarProductos();

});