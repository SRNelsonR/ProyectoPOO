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
				$("#txt-edad").val(resultado.edad_cliente);				
				$("#rbt-genero").val(resultado.nombre_genero);
				$("#txt-identidad").val(resultado.identidad_cliente);
				$("#txt-domicilio").val(resultado.direccion);
				$("#txt-telefono").val(resultado.telefono);
				$("#txt-correo").val(resultado.correo_electronico);
				$("#slc-estado-civil").val(resultado.nombre_estado_civil);
				$("#txt-fecha-nacimiento").val(resultado.fecha_nacimiento);
				$("#txt-fecha-registro").val(resultado.fecha_ingreso_cliente);
				$("#txt-membresia").val(resultado.codigo_membresia);
				$("#slc-tipo-cliente").val(resultado.tipo_cliente);
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