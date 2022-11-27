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
            try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
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