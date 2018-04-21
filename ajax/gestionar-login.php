<?php
  include("../class/class-conexion.php");
  //include("../class/class-usuario.php");

  if(isset($_POST["text_usuario"])){
    $correo=$_POST["text_usuario"];
  }
  if(isset($_POST["text_contrasena"])){
    $contra=$_POST["text_contrasena"];
  }
  $conexion= new Conexion();
  
  $query_call = "SELECT  * FROM Funcion_Login('".$correo."','".$contra."');";
  $resultados_call=$conexion->ejecutarConsulta($query_call);
  $respuesta=$conexion->obtenerFila($resultados_call);
  
  echo json_encode($respuesta);
  $conexion->cerrarConexion();
?>