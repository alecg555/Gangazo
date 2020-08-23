<?php
session_start();
	if (empty($_SESSION["login"])) {
		header("location:../");
	}
require_once("../modelo/Usuario.class.php");
require_once("../modelo/ConexionUsuario.class.php");
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$login = $_POST["login"];
$clave= $_POST["clave"];
$telefono =$_POST["telefono"];
$tipo= $_POST["tipo"];
$usuario = new Usuario($cedula, $nombre, $apellido, $correo,$direccion, $login, $clave, $telefono, $tipo);

$conexionU = new ConexionUsuario();
if($conexionU->abrirConexion()==1){
	if($conexionU->crearUsuario($usuario)>0){
	header("location:../index.php?accion=1");
    }
    else{
    	header("location:../index.php?accion=2");
    }
}

