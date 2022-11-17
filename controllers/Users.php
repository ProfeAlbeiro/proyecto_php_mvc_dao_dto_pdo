<?php    

    require_once "models/model_dto/UserDto.php";

    class Users{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Crear Rol
        public function createRol(){
            require_once "views/roles/admin/header.php";            
            
            // Programar
            echo "Estoy en el Controlador Users y acción Crear Rol <br>";
            
            // Crear un Objeto con el Constructor
            $objUser = new UserDto(1, "admin");
            
            // Mostrar Resultado            
            echo "<br>Objeto con el Constructor";
            echo "<br>Rol: " . $objUser->getCodigoRol();
            echo "<br>Nombre: " . $objUser->getNombreRol();
            
            // Crear un Objeto a partir de los métodos set
            $objUser2 = new UserDto();
            $objUser2->setCodigoRol(2);
            $objUser2->setNombreRol("cliente");

            // Mostrar Resultado
            echo "<br>";
            echo "<br>Objeto con métodos set";
            echo "<br>Rol: " . $objUser2->getCodigoRol();
            echo "<br>Nombre: " . $objUser2->getNombreRol();


            // require_once "views/modules/1_users/rol_create.view.php";
            
            require_once "views/roles/admin/footer.php";
        }
        /*
        // Configurar Usuario
        public function configUser(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_config.view.php";
            require_once "views/roles/admin/footer.php";
        }        
        // Crear Rol
        public function createRol(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_create.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Consultar Roles
        public function readRol(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Rol
        public function updateRol(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_update.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Eliminar Rol
        public function deleteRol(){
            // Programar            
        }        
        // Crear Usuario
        public function createUser(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_create.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Consultar Usuarios
        public function readUser(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Usuario
        public function updateUser(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_update.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Eliminar Usuario
        public function deleteUser(){
            // Programar            
        }
        */
    }
?>