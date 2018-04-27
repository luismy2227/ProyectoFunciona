$(document).ready(function(){
	 listarNombreUsuario();
	 listarPaisUsuario();
	 listarInteresesUsuario();
	 listarDescripcionUsuario()
	 listarCentroUsuario();
	 lanzar();
});

function listarNombreUsuario(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerNombreUsuario"
			},
			success:function(respuesta){
				var nombre = respuesta;
				$("#prueba").append(nombre);
				$("#dropdown01").append(nombre);
			},
			error:function(e){
				console.log(e);
			}
	});
}

function listarPaisUsuario(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerPaisUsuario"
			},
			success:function(respuesta){
				var pais = respuesta;
				var fila=
				'<dt class="col-sm-3">País</dt>'+
                '<dd class="col-sm-9">'+
                '<p id="pa-pais" name="pa-pais">'+pais+'</p>'+
                '</dd>';
                $("#rowdata").append(fila);
			},
			error:function(e){
				console.log(e);
			}
	});
}
function listarCentroUsuario(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerCentroUsuario"
			},
			success:function(respuesta){
				var centro = respuesta;
				var fila=
				'<dt class="col-sm-3">Centro</dt>'+
                '<dd class="col-sm-9">'+
                '<p id="centro" name="centro">'+centro+'</p>'+
                '</dd>';
                $("#rowdata").append(fila);
			},
			error:function(e){
				console.log(e);
			}
	});
}
function listarDescripcionUsuario(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerDescripcionUsuario"
			},
			success:function(respuesta){
				var descripcion = respuesta;
				var fila=
				'<dt class="col-sm-3">Descripción</dt>'+
                '<dd class="col-sm-9">'+
                '<p id="descripcion" name="descripcion">'+descripcion+'</p>'+
                '</dd>';
                $("#rowdata").append(fila);
			},
			error:function(e){
				console.log(e);
			}
	});
}

function listarInteresesUsuario(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
			dataType:"JSON",
			method:"POST",
			data:{
				"accion":"obtenerInteresesUsuario"
			},
			success:function(respuesta){
				var intereses = respuesta;
				var fila=
				'<dt class="col-sm-3">Intereses</dt>'+
                '<dd class="col-sm-9">'+
                '<p id="intereses" name="intereses">'+intereses+'</p>'+
                '</dd>';
                $("#rowdata").append(fila);
			},
			error:function(e){
				console.log(e);
			}
	});
}

function listarHistorial(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-historial"
		},
		success: function(respuesta){
				var fila=
				'<dt class="col-sm-3">Perfiles de Curso</dt>'+
                '<dd class="col-sm-9">'+
                '<p id="listarCursos" name="listarCursos"></p>'+
                '</dd>';
				$("#rowdata").append(fila);

			for (var i = 0; i < respuesta.length; i++) {
				var cursos = respuesta[i];
				$("#listarCursos").append(cursos.Nombre+" ");
			}
		},
		error: function(e)
		{
			console.log(e);
		}
	});
}

function listarUltimoAcceso(){
	$.ajax({
		url:"ajax/gestionar-profile.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-acceso"
		},
		success: function(respuesta){
				var ultimoAcceso=respuesta;
				var fila=
				'<dt class="col-sm-3">Último Acceso</dt>'+
                '<dd class="col-sm-9">'+
                '<p id="acceso" name="acceso">'+ultimoAcceso+'</p>'+
                '</dd>';
				$("#rowdata").append(fila);
		},
		error: function(e)
		{
			console.log(e);
		}
	});
}

function lanzar(){
	 listarHistorial();
	 listarUltimoAcceso();
}