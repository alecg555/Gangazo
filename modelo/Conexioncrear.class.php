<?php
	class ConexionProducto
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
		public function crearProducto(Producto $producto,$login){
			$stmt = $this->conexion->prepare("INSERT INTO producto VALUES (?,?,?,?,?,?,?,?)");
			$stmt->bindValue(1, $producto->getCodigo());
			$stmt->bindValue(2, $producto->getNombre());
			$stmt->bindValue(3, $producto->getImagen());
			$stmt->bindValue(4, $producto->getPrecio());
			$stmt->bindValue(5, $producto->getMarca());
			$stmt->bindValue(6, $producto->getTalla());
			$stmt->bindValue(7, $producto->getCedula());
			$stmt->bindValue(8, $login);

				$stmt->execute();
				return$stmt->rowCount();
		}
		public function obtenerProducto(){
			$stmt = $this->conexion->prepare("SELECT * FROM producto");
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			$stmt->execute();
			return $stmt->fetchAll();
			
		}
		
		public function obtenerProductoPorCodigo($codigo){
			$stmt = $this->conexion->prepare("SELECT * FROM producto WHERE codigo_prod=?");
			$stmt->bindValue(1, $codigo);
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			      $stmt->execute();
				  return $stmt->fetchAll()[0];
		}
		public function obtenerProductoPorLogin($login){
			$stmt = $this->conexion->prepare("SELECT * FROM producto WHERE usuario_cli=?");
			$stmt->bindValue(1, $login);
			$stmt->setFetchMode(PDO::FETCH_OBJ);
				$stmt->execute();
				return $stmt->fetchAll();
		}
		public function actualizarProducto(Producto $producto,$codigo){
			$stmt = $this->conexion->prepare("UPDATE producto SET
				nombre_prod=?,imagen_prod=?,precio_prod=?,marca_prod=?,talla_prod=?,cedula_cli=? WHERE codigo_prod=?");

			$stmt->bindValue(1, $producto->getNombre());
			$stmt->bindValue(2, $producto->getImagen());
			$stmt->bindValue(3, $producto->getPrecio());
			$stmt->bindValue(4, $producto->getMarca());
			$stmt->bindValue(5, $producto->getTalla());
			$stmt->bindValue(6, $producto->getCedula());
			$stmt->bindValue(7, $codigo);
			$stmt->execute();
				return $stmt->rowCount();
		}
		public function borrarProducto($codigo){
			$stmt = $this->conexion->prepare("DELETE FROM producto
			 WHERE codigo_prod=?");
			$stmt->bindValue(1,$codigo);
			$stmt->execute();
				return $stmt->rowCount();
		}

	
	}
			
		
		
		

	

?>