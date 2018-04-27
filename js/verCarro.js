$(document).ready(function(){
    //alert("hola1");
    averCarro();
});

function verCarro(){
    //alert("hola2");
    $.ajax({
        url:"ajax/gestionar-allCars.php",
            dataType:"JSON",
            method:"POST",
            data:{
                "accion":"listar-carros"
            },
            success:function(respuesta){
                //alert("hola3");
                for (var i = 0; i < respuesta.length ; i++) {
                    var carros = respuesta[i];
                    var fila =  '   <div class="col-md-4 col-lg-4 col-sm-6">'+
                                '       <div class="card">'+
                                '           <div class="card-header cards-courses-h">'+carros.marca+" "+carros.modelo+
                                '           </div>'+    
                                '           <div class="card-body">'+
                                '                   <h5 class="card-title">'+'</h5>'+
                                /*'                   <p class="card-text">Precio de venta: </p>'+
                                '                   <p class="card-text">'+carros.precioventa+'</p>'+
                                '                   <p class="card-text">Precio de renta: </p>'+
                                '                   <p class="card-text">'+carros.preciorenta+'</p>'+*/
                                '                   <img  src='+carros.foto+' alt="" width="200" height="200">'+
                                '                   <p><a class="btn btn-primary" onclick="verCarro('+carros.idvehiculo+')" href="#" role="button">Ver Vehículo &raquo;</a></p>'+
                                '           </div>'+
                                '       </div>'+
                                '   </div>';                   
                    $("#carros").append(fila);
                }
            },
            error:function(e){
                console.log(e);
            }
    });
}