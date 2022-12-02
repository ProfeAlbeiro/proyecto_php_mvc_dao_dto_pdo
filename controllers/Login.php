<?php

    require_once "models/model_dto/CredentialDto.php";    
    // require_once "models/model_dao/CredentialDao.php";

    class Login{        
        // private $userDao;
        public function __construct(){            
            // $this->userDao = new CredentialDao;
        }
        public function index(){
            // Cargar la Vista del Formulario
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.php";
                require_once "views/business/login.view.php";
                require_once "views/roles/business/footer.php";
            }
            // Cargar los Datos
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $userDto = new CredentialDto(
                    $_POST['correo'], 
                    $_POST['pass']
                );
                
                print_r($userDto);
                // $prueba = $this->userDao->login($this->userDto);
                // if ($prueba) {
                //     // print_r($prueba);
                //     header('Location: ?c=Dashboard');
                // } else {
                    //     echo "El Usuario No existe";
                // }
                
                
                
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