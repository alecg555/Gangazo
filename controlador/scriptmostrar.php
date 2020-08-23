<?php
	session_start();
	if (empty($_SESSION["login"])) {
			header("location:../");
		}	
	
	require_once("../modelo/Conexioncrear.class.php");
	$conexion = new ConexionProducto();
	if($conexion->abrirConexion() == 1){
		if ($_SESSION["tipo"] == 1) {
			$productos = $conexion->obtenerProducto();
		}
		elseif ($_SESSION["tipo"] == 2) {
			$login = $_SESSION["login"];
			$productos = $conexion->obtenerProducto();
		}
		require_once("../vistas/plantillamostrar.php");
	}

 ?>