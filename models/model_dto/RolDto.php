<?php

    class RolDto{
        
        /* ATRIBUTOS */        
        private $codigoRol;
        private $nombreRol;
        
        /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        // Constructor
        public function __construct2($codigoRol,$nombreRol){
			$this->codigoRol = $codigoRol;
			$this->nombreRol = $nombreRol;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Código Rol
        public function setCodigoRol($codigoRol){
            $this->codigoRol = $codigoRol;
        }
        public function getCodigoRol(){
            return $this->codigoRol;
        }

        // Nombre Rol
        public function setNombreRol($nombreRol){
            $this->nombreRol = $nombreRol;
        }
        public function getNombreRol(){
            return $this->nombreRol;
        }


    }

?>