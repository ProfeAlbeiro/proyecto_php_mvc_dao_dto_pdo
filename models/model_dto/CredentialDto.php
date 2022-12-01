<?php

    require_once "models/model_dto/UserDto.php";

    class CredentialDto extends UserDto{
        
        /* ATRIBUTOS */        
        private $fotoCredential;
        private $identificacionCredential;
        private $fechaIngresoCredential;
        private $passCredential;
        private $estadoCredential;
        
        /* SOBRECARGA DE CONSTRUCTORES */        
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        
        // Constructor: del Login
        public function __construct2($correoUser, $passCredential){
			$this->correoUser = $correoUser;
			$this->passCredential = $passCredential;
		}

        public function __construct11($codigoRol, $nombreRol, $codigoUser, $nombresUser, $apellidosUser, $correoUser, $fotoCredential, $identificacionCredential, $fechaIngresoCredential, $passCredential, $estadoCredential){
			$this->codigoRol = $codigoRol;
			$this->nombreRol = $nombreRol;
			$this->codigoUser = $codigoUser;
			$this->nombresUser = $nombresUser;
			$this->apellidosUser = $apellidosUser;
			$this->correoUser = $correoUser;
			$this->fotoCredential = $fotoCredential;
			$this->identificacionCredential = $identificacionCredential;
			$this->fechaIngresoCredential = $fechaIngresoCredential;
			$this->passCredential = $passCredential;
			$this->estadoCredential = $estadoCredential;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Foto Credencial
        public function setFotoCredential($fotoCredential){
            $this->fotoCredential = $fotoCredential;
        }
        public function getFotoCredential(){
            return $this->fotoCredential;
        }

        // Identificación Credencial
        public function setIdentificacionCredential($identificacionCredential){
            $this->identificacionCredential = $identificacionCredential;
        }
        public function getIdentificacionCredential(){
            return $this->identificacionCredential;
        }

        // Fecha Ingreso Credencial
        public function setFechaIngresoCredential($fechaIngresoCredential){
            $this->fechaIngresoCredential = $fechaIngresoCredential;
        }
        public function getFechaIngresoCredential(){
            return $this->fechaIngresoCredential;
        }

        // PassWord Credencial
        public function setPassCredential($passCredential){
            $this->passCredential = $passCredential;
        }
        public function getPassCredential(){
            return $this->passCredential;
        }

        // Estado Credencial
        public function setEstadoCredential($estadoCredential){
            $this->estadoCredential = $estadoCredential;
        }
        public function getEstadoCredential(){
            return $this->estadoCredential;
        }

    }

?>