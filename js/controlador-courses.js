$("#idEjecucion").click(function(){
	$.ajax({
		url:"ajax/gestionar-seccion.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"listar-cursos-inactivos"
			},
			success:function(respuesta){

			},
			error:function(e){
				console.log(e);
			}
	});
});