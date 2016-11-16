$(document).ready(function(){
	$("#btn-guardar-impuesto").click(function(){
		var porcentajes="txt-codigo-impuesto="+$("#txt-codigo-impuesto").val()+
			"&txt-nombre-impuesto="+$("#txt-nombre-impuesto").val()+
			"&txt-porcentaje-impuesto="+$("#txt-porcentaje-impuesto").val();
		
		$.ajax({
			url:"ajax/acciones.php?accion=1",
			method:"POST",
			data:porcentajes,
			success:function(resultado){

			}
			error:function(){}
		});
	});
	/*$("#btn-guardar-producto").click(function(){
		var ingredientes="";
		$("input[name='ingredientes[]']:checked").each(function(){
			ingredientes+="ingredientes[]="+$(this).val()+"&";
		});
		var dolencias="";
		$("input[name='dolencias[]']:checked").each(function(){
			dolencias+="dolencias[]="+$(this).val()+"&";
		});	
		
		var productos="txt-codigo-producto="+$("#txt-codigo-producto").val()+
			"&txt-codigo-barra="+$("#txt-codigo-barra").val()+
			"&txt-nombre-producto="+$("#txt-nombre-producto").val()+
			"&txt-cantidad-producto="+$("#txt-cantidad-producto").val()+
			"&txt-precio-compra-producto="+$("#txt-precio-compra-producto").val()+
			"&slc-descuentos="+$("#slc-descuentos").val()+
			"&slc-impuestos="+$("#slc-impuestos").val()+
			"&txt-precio-venta-producto="+$("#txt-precio-venta-producto").val()+
			"&slc-tipo-presentacion-producto="+$("#slc-tipo-presentacion-producto").val()+
			"&slc-laboratorios="+$("#slc-laboratorios").val()+
			"&txt-fecha-ingreso-producto="+$("#txt-fecha-ingreso-producto").val()+
			"&txt-fecha-vencimiento-producto="+$("#txt-fecha-vencimiento-producto").val()+
			"&txt-indicaciones-producto="+$("#txt-indicaciones-producto").val()+
			"&txt-codigo-estado="+$("#txt-codigo-estado").val()+
			"&"+ingredientes+
			dolencias+
			"slc-tipo-ventas="+$("#slc-tipo-ventas").val()+
			"&txt-fotografia="+$("#txt-fotografia").val();

		$.ajax({
			url:"ajax/acciones.php?accion=1",
			method: "POST",
			data: productos,
			success:function(resultado){
				$("#div-resultadoProducto").html(resultado);
				
			},
			error:function(){

			}
		});

	});*/
})