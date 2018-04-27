<?php
	include("class-Vehiculo.php");
	include("class-conexion.php");

	$conexion = new Conexion();
    $respuesta = Vehiculo::listarCarros($conexion);
    var_dump($respuesta);
    $conexion->cerrarConexion();

?>