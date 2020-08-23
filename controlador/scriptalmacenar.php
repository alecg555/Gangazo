<?php
session_start();
	if (empty($_SESSION["login"])) {
		header("location:../");
	}
require_once("../modelo/Producto.class.php");
require_once("../modelo/Conexioncrear.class.php");
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];//Contiene el archivo
$fecha = new DateTime();
$nombreimg = $fecha->getTimestamp() . $nombreimg;
$ruta="../imagenes/Productos";
$ruta=$ruta."/".$nombreimg; ///images/nombre.jpg
move_uploaded_file($archivo, $ruta);
$precio = $_POST["precio"];
$marca = $_POST["marca"];
$talla = $_POST["talla"];
$cedula = $_POST["cedula"];
$login = $_SESSION["login"];
$producto = new Producto($codigo,$nombre,$ruta,$precio,$marca,$talla,$cedula);
//$query=mysql_query("insert into productos values('','".$producto."','".$ruta."')");

$Producto = new ConexionProducto();
if($Producto->abrirConexion()==1){
	if($Producto->crearProducto($producto,$login)>0){
	header("location:../index.php?accion=5");
    }
    else{
    	header("location:../index.php?accion=6");
    }
}
?>