<?php
	class Producto
	{
		private $codigo;
		private $nombre;
		private $imagen;
		private $precio;
		private $marca;
		private $talla;
		private $cedula;

		function __construct($cod,$nom,$ima,$pre,$mar,$tal,$ced)
		{
			$this->codigo=$cod;
			$this->nombre=$nom;
			$this->imagen=$ima;
			$this->precio=$pre;
			$this->marca=$mar;
			$this->talla=$tal;
			$this->cedula=$ced;
		
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getImagen(){
			return $this->imagen;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function getMarca(){
			return $this->marca;
		}
		public function getTalla(){
			return $this->talla;
		}
		public function getCedula(){
			return $this->cedula;
		}
	}
?>