$(document).ready(function(){
	listarNombreUsuario();
	listarHistorial();
	listarCursosActivos();
});


function listarHistorial(){
	$.ajax({
		url:"ajax/gestionar-historial-cursos.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var cursos = respuesta[i];
				var fila = 
				'<tr>'+
				'	<td>'+cursos.Nombre +'</td>'+
				'	<td>'+cursos.Codigo+'</td>'+
				'	<td>'+cursos.Periodo_Academico + '</td>'+
				'	<td>'+cursos.Profesor + '</td>'+
				'	</tr>';
				$("#div-historial #tbl-historial tbody").append(fila);
			}
		},
		error: function(e)
		{
			console.log(e);
		}
	});
}

function listarNombreUsuario(){
	$.ajax({
		url:"ajax/gestionar-login.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerNombreUsuario"
			},
			success:function(respuesta){
				var nombre = respuesta;
				$("#dropdown01").html(nombre);
			},
			error:function(e){
				console.log(e);
			}
	});
}

function listarCursosActivos(){
	$.ajax({
		url:"ajax/gestionar-seccion.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"listar-cursos-activos-user"
			},
			success:function(respuesta){
				for (var i = 0; i < respuesta.length ; i++) {
					var cursos = respuesta[i];
					var fila =  '	<div class="col-md-4 col-lg-4 col-sm-6" >'+
								'		<div class="card">'+
								'			<div class="card-header cards-courses-h">'+
												cursos.Codigo+
								'			</div>'+	
								'			<div class="card-body">'+
								'			    	<h5 class="card-title">'+cursos.Nombre+'</h5>'+
								'					<p class="card-text">Profesor: </p>'+
								'					<p class="card-text">'+cursos.Profesor+'</p>'+
								'					<p><a class="btn btn-primary" href="#" role="button">Ver Curso &raquo;</a></p>'+
								'			</div>'+
								'		</div>'+
								'	</div>';


					/*var fila =  '	<div class="col-md-4 col-lg-4 col-sm-6" >		'+
								'		<div class="well cards-courses-h" >			'+
								'			<p class="text-card-h">'+cursos.Codigo+'</p>				'+
								'		</div>										'+
								'		<div class="well cards-courses-b" >			'+
								'			<h3>'+cursos.Nombre+'</h3><br>			'+
								'			<p>Profesor: </p>						'+
								'			<p>'+cursos.Profesor+'</p>				'+
								'		</div>										'+
								'		<div class="well cards-courses-b" >			'+
								'			<p><a class="btn btn-secondary" href="#" role="button">Ver Curso &raquo;</a></p>'+
								'		</div>										'+
								'	</div>';*/
					$("#idCursosActivos").append(fila);
				}
			},
			error:function(e){
				console.log(e);
			}
	});
}