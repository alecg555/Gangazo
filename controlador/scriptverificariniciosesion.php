<?php
	session_start();
	if (isset($_SESSION["login"])) {
		header("location: ../");
	}

	require_once("../modelo/ConexionUsuario.class.php");
	$login= $_POST["login"];
	$clave = $_POST["clave"];
	$conexion = new ConexionUsuario();
	if($conexion->abrirConexion() == 1){
		$usuario = $conexion->obtenerUsuarioPorLogin($login);
		if (isset($usuario)) {
			if ($usuario->clave_cli == $clave) {
				$_SESSION["login"] = $usuario->usuario_cli;
				$_SESSION["clave"] = $usuario->clave_cli;
				$_SESSION["tipo"] = $usuario->tip_id;
				header("location:../");
			}
			else{
				header("location:../index.php?accion=3");
			}
		}
		else{
			header("location:../index.php?accion=4");
		}
	}

 ?>