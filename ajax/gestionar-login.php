<?php
  include("../class/class-conexion.php");
  //include("../class/class-usuario.php");
  $conexion= new Conexion();

  if(isset($_POST["user"])){
    $usuario=$_POST["user"];
  }
  if(isset($_POST["password"])){
    $contra=$_POST["password"];
  }
  if(isset($_POST["accion"])){
    $accion=$_POST["accion"];
  }

  switch($accion){
    case "login":
      $query="SELECT  * FROM Funcion_Login('".$usuario."','".$contra."');";
      
      $query = "SELECT  * FROM Funcion_Login('".$usuario."','".$contra."');";
      $resultados=$conexion->ejecutarConsulta($query);
      $respuesta=$conexion->obtenerFila($resultados);

      if($respuesta[1] == 0){
        session_start();

        $query="SELECT idUsuario FROM tbl_Usuario 
        INNER JOIN tbl_Empleado ON tbl_Empleado.idUsuario = tbl_Usuario.idUsuario
        WHERE tbl_Usuario.nombreUsuario = '$usuario';";
        $id = $conexion -> ejecutarConsulta($query);

        $query="SELECT tbl_Persona.primerNombre, tbl_Persona.primerApellido FROM tbl_Usuario 
        INNER JOIN tbl_Empleado ON tbl_Empleado.idUsuario = tbl_Usuario.idUsuario
        INNER JOIN tbl_Persona ON tbl_Persona.idPersona = tbl_Empleado.idPersona
        WHERE tbl_Usuario.nombreUsuario = '$usuario';";
        $nombre = $conexion -> ejecutarConsulta($query);
        $nombre = $conexion ->obtenerFila($nombre);
        $nombreCompleto = $nombre[0]." ".$nombre[1];

        $_SESSION['status']=true;
        $_SESSION['ultimoAcceso']=date("Y-n-j H:i:s");
        $_SESSION['idUsuario'] = $id;
        $_SESSION['nombre']=$nombreCompleto;
        $respuesta['loggedin']=1;
        $respuesta['mensajeSesion']="Tiene acceso";
      }
      else{
        session_start();
        $_SESSION['status']=false;
        $respuesta['loggedin']=0;
        $respuesta['mensajeSesion']="No tiene acceso";
      }
      break;
  }
  
  echo json_encode($respuesta);
  $conexion->cerrarConexion();
?>