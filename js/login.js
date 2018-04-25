$(function () {
alert("Entre aqui");
$(document).on("submit","#Login",function(event){
    event.preventDefault();
    var user = $("#text_usuario").val();
    var password = $("#text_contrasena").val();
    alert(user + password);
    $.ajax({
        type:"POST",
        url:"ajax/gestionar-login.php",
        dataType:"JSON",
        data:{
            "accion":"login",
            "user": user,
            "password": password
        },
        //data:$(this).serialize(),
        success:function(respuesta){
            alert("Entré aquí 3");
            alert(respuesta);
            if(respuesta=="Usuario y contraseña correctos") {
                window.location='index.php';
            }
            console.log(respuesta);
        }
    });
  });
});

$("#btn_Logout").click(function(){
    alert("Entre a logout");
    $.ajax({
        type:"POST",
        url:"ajax/gestionar-login.php",
        dataType:"JSON",
        data:{
            "accion":"logout",
        },
        //data:$(this).serialize(),
        success:function(respuesta){
            alert("Entré aquí 3");
            alert(respuesta);
            if(respuesta.loggedin==0){
                window.location.href = "index.php";
            }
            console.log(respuesta);
        },
            error:function(e){
                console.log(e);
            }
    });
});