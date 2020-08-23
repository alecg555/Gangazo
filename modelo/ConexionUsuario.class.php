<?php
	class ConexionUsuario
	{
		private $server;
		private $user;
		private $pass;
		private $conexion;

		public function __construct(){
			$this->server="localhost";
			$this->user="root";
			$this->pass="";
		}
		public function abrirConexion(){
			try{
			$this->conexion = new PDO("mysql:host=$this->server;dbname=gangazostore1",$this->user,$this->pass);
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return 1;
			}
			catch(PDOException $e){
				echo "Error". $e->getMessage();
				return 0;
           }
		}
		public function cerrarConexion(){
			$this->conexion = null;
		}
		public function crearUsuario(Usuario $usuario){
			$stmt = $this->conexion->prepare("INSERT INTO usuario VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bindValue(1, $usuario->getcedula());
			$stmt->bindValue(2, $usuario->getnombre());
			$stmt->bindValue(3, $usuario->getapellido());
			$stmt->bindValue(4, $usuario->getcorreo());
			$stmt->bindValue(5, $usuario->getdireccion());
			$stmt->bindValue(6, $usuario->getlogin());
			$stmt->bindValue(7, $usuario->getclave());
			$stmt->bindValue(8, $usuario->gettelefono());
			$stmt->bindValue(9, $usuario->gettipo());
				$stmt->execute();
				return$stmt->rowCount();
		}
		public function obtenerUsuarioPorLogin($login){
			$stmt = $this->conexion->prepare("SELECT * FROM usuario WHERE usuario_cli=?");
			$stmt->bindValue(1, $login);
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			$stmt->execute();
			$usuarios = $stmt->fetchAll();
			if (count($usuarios) > 0) {
			 	return $usuarios[0];
			 }
			 else{
			 	return null;
			 }
		}
	}