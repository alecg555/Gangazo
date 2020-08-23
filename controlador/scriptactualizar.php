<?php
require_once("../modelo/producto.class.php");
require_once("../modelo/Conexioncrear.class.php");
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$imagen = $_POST["imagen"];
$precio = $_POST["precio"];
$marca = $_POST["marca"];
$talla = $_POST["talla"];
$cedula = $_POST["cedula"];
$producto = new producto($codigo,$nombre, $imagen, $precio, $marca, $talla, $cedula);

$conexionR = new ConexionProducto();
if($conexionR->abrirConexion()==1){
	if($conexionR->actualizarProducto($producto,$codigo)>0){
	header("location:../index.php?accion=7");
    }
    else{
    	header("location:../index.php?accion=8");
    }
}
