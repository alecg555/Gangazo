<?php
	require_once("../modelo/Conexioncrear.class.php");
	$codigo = $_GET["codigo"];
	$conexion = new ConexionProducto();
	if($conexion->abrirConexion() == 1){
		$producto = $conexion->obtenerProductoPorCodigo($codigo);
		require_once("../vistas/plantilladetalle.php");
	}

 ?>