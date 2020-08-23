<?php
	require_once("../modelo/Conexioncrear.class.php");
	$codigo = $_GET["id"];
	$conexion = new ConexionProducto();
	if($conexion->abrirConexion() == 1){
		$producto = $conexion->obtenerProductoPorCodigo($codigo);


		require_once("../vistas/formularioeditar.php");
	}

 ?>