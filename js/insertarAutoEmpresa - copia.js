$(function () {
  //alert("Entré aquí 2");
  $(document).on("submit","#Form_InsertarAutoEmpresa",function(event){
    event.preventDefault();
    //alert("Entré aquí 2");
    $.ajax({
        type:"POST",
        url:"ajax/gestionar-insertarAutoEmpresa.php",
        dataType:"JSON",
        data:$(this).serialize(),
        success:function(respuesta){
           //alert("Entré aquí 3");
            alert(respuesta);
            if(respuesta == 'Vehiculo Empresa insertado con éxito'){
                window.location='index.php';
            }   
            /*console.log(respuesta[0]);*/
        }
    });
  });
});