<?php
	session_start();
	if (isset($_SESSION["login"])) {
		header(("location: ../"));
	}
	require_once("../modelo/Conexiontipo.class.php");
	$conexion = new ConexionTipo();
	if($conexion->abrirConexion() == 1){
		$tipos = $conexion->obtenerTipos();
		require_once ("../vistas/formularioregistro.php");
    }
?>