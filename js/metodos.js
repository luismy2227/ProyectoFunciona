$(function () {
  //alert("Entré aquí 2");
  $(document).on("submit","#Login",function(event){
    event.preventDefault();
    //alert("Entré aquí 2");
    $.ajax({
        type:"POST",
        url:"ajax/gestionar-login.php",
        dataType:"JSON",
        data:$(this).serialize(),
        success:function(respuesta){
            //alert("Entré aquí 3");
            //alert(respuesta);
            console.log(respuesta);
        }
    });
  });
});
