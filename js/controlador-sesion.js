/*FUNCION PARA INGRESAR HECHA PARA EL SUBMIT INGRESAR*/
$(function () {
	$(document).on("submit","#form-signin",function(event){
		event.preventDefault();
		var correo = $("#inputEmail").val();
		var password = $("#inputPassword").val();
		$("#idError").hide();
		$.ajax({
			type:"POST",
			url:"ajax/gestionar-login.php",
			dataType:"JSON",
			data:{
				"accion":"login",
				"inputEmail":correo,
				"inputPassword":password
			},
			success:function(respuesta){
				if (respuesta.ans==0) {
					window.location='index.php';
				}
				else
				{
					errorLogin(respuesta.mensaje);
				}

			},
			error:function(e){
				console.log(e);
			}

		});

	});	
});

/*En este metodo se pondran en rojo los input en caso de ingresar un dato incorrecto.*/
function errorLogin(mensajeProcedimiento){
	document.getElementById("inputEmail").style.borderColor = "#ff0000";
	document.getElementById("inputPassword").style.borderColor = "#ff0000";
	$("#inputEmail").val('');
	$("#inputPassword").val('');
	errorMensaje(mensajeProcedimiento);
}

function errorMensaje(mensajeProcedimiento){
	$("#idError").show();
	$("#idError").html('<p class="errorLogin">'+mensajeProcedimiento+'</p>');
}


/*METODO HECHO PARA CERRAR SESION.*/
$("#idSalir").click(function(){
	$.ajax({
			type:"POST",
			url:"ajax/gestionar-login.php",
			dataType:"JSON",
			data:{
				"accion":"logout",
			},
			success:function(respuesta){
				if(respuesta.loggedin==0){
					window.location.href = "login.php";
				}
			},
			error:function(e){
				console.log(e);
			}
	});
});