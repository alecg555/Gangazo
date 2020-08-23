<?php
require_once("../modelo/Conexioncrear.class.php");
$codigo= $_GET["codigo"];
$conexionR = new ConexionProducto();
if($conexionR->abrirConexion()==1){
	if($conexionR->borrarProducto($codigo)>0){
	header("location:../index.php?accion=9");
    }
    else{
    	header("location:../index.php?accion=10");
    }
}