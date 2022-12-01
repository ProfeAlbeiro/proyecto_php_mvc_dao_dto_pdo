<?php

    require_once "models/model_dto/CredentialDto.php";    
    require_once "models/model_dao/CredentialDao.php";

    class Login{
        private $userDto;
        private $userDao;
        public function __construct(){
            $this->userDto = new CredentialDto;
            $this->userDao = new CredentialDao;
        }
        public function index(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.php";
                require_once "views/business/login.view.php";
                require_once "views/roles/business/footer.php";
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                $this->userDto->__construct2($_POST['correo'], $_POST['pass']);                
                $prueba = $this->userDao->login($this->userDto);
                print_r($prueba);
                
                
                // Capturar Datos
                // Validar los Datos
                // Crear el Objeto
                // Comprobar en la base de datos
                // Redireccionar al Dashboard
                // header("Location: ?c=Dashboard");
            }
        }
    }
?>