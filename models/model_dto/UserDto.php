<?php

    class UserDto{
        
        /* ATRIBUTOS */        
        private $codigoRol;
        private $codigoUser;
        private $nombresUser;
        private $apellidosUser;
        private $correoUser;
        
        /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        // Constructor Vacío
        public function __construct0(){}

        // Constructor Total
        public function __construct5($codigoRol,$codigoUser,$nombresUser,$apellidosUser,$correoUser){
			$this->codigoRol = $codigoRol;
			$this->codigoUser = $codigoUser;
			$this->nombresUser = $nombresUser;
			$this->apellidosUser = $apellidosUser;
			$this->correoUser = $correoUser;			
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Código Rol
        public function setCodigoRol($codigoRol){
            $this->codigoRol = $codigoRol;
        }
        public function getCodigoRol(){
            return $this->codigoRol;
        }

        // Código Usuario
        public function setCodigoUser($codigoUser){
            $this->codigoUser = $codigoUser;
        }
        public function getCodigoUser(){
            return $this->codigoUser;
        }

        // Nombres Usuario
        public function setNombresUser($nombresUser){
            $this->nombresUser = $nombresUser;
        }
        public function getNombresUser(){
            return $this->nombresUser;
        }

        // Código Rol
        public function setApellidosUser($apellidosUser){
            $this->apellidosUser = $apellidosUser;
        }
        public function getApellidosUser(){
            return $this->apellidosUser;
        }

        // Código Rol
        public function setCorreoUser($correoUser){
            $this->correoUser = $correoUser;
        }
        public function getCorreoUser(){
            return $this->correoUser;
        }


    }

?>