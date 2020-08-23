<?php
	session_start();
	if (empty($_SESSION["login"])) {
		header("location:../");
	}
	require_once ("../vistas/formulariocrear.php");
?>