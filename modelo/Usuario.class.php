<?php
	
	class Usuario
	{	
		private $cedula;
		private $nombre;
		private $apellido;
		private $correo;
		private $direccion;
		private $login;
		private $clave;
		private $telefono;
		private $tipo;

		public function __construct ($cedula,$nombre,$apellido,$correo,$direccion,$login,$clave,$telefono,$tipo){
			$this->cedula = $cedula;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->correo = $correo;
			$this->direccion = $direccion;
			$this->login = $login;
			$this->clave = $clave;
			$this->telefono = $telefono;
			$this->tipo = $tipo;

		}
		public function getcedula(){
			return $this->cedula;
		}
		
		public function getnombre(){
			return $this->nombre;
		}
		
		public function getapellido(){
			return $this->apellido;
		}

		public function getcorreo(){
			return $this->correo;
		}

		public function getdireccion(){
			return $this->direccion;
		}
		public function getlogin(){
			return $this->login;
		}
		public function getclave(){
			return $this->clave;
		}

		public function gettelefono(){
			return $this->telefono;
		}
		public function gettipo(){
			return $this->tipo;
		}
	}