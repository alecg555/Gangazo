<?php
	class ConexionTipo
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
		public function obtenerTipos(){
			$stmt = $this->conexion->prepare("SELECT * FROM tipos");
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			$stmt->execute();
			return $stmt->fetchAll();
			
		}
		
	}
	