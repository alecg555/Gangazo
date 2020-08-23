<?php
session_start();
	if (empty($_SESSION["login"])) {
		header("location:../");
	}
	session_start();
	session_destroy();
	header("location: ../");
?>