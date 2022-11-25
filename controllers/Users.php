<?php    

    require_once "models/model_dto/RolDto.php";
    require_once "models/model_dto/UserDto.php";
    require_once "models/model_dao/RolDao.php";

    class Users{
        
        private $userDao;
        public function __construct(){
            $this->rolDao = new RolDao;
            // $this->userDao = new UserDao;
        }
        // Cargar página inicial (puede ser el módulo)
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Crear Rol
        public function createRol(){                        
            // Muestra el Formulario
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.php";
                require_once "views/modules/1_users/rol_create.view.php";            
                require_once "views/roles/admin/footer.php";
            }
            // Captura los Datos
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                $rolDto = new RolDto(
                    $_POST['rol_codigo'], 
                    $_POST['rol_nombre']
                );
                $this->rolDao->createRol($rolDto);
                header("Location: ?c=Users&a=readRol");
            }
        }        
        // Consultar Roles
        public function readRol(){
            $roles = $this->rolDao->readRolDao();
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Rol
        public function updateRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = $this->rolDao->getById($_GET['idRol']);
                require_once "views/roles/admin/header.php";                
                require_once "views/modules/1_users/rol_update.view.php";
                require_once "views/roles/admin/footer.php";
            }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rolDto = new RolDto(
                    $_POST['rol_codigo'],
                    $_POST['rol_nombre']
                );
                $this->rolDao->updateRolDao($rolDto);
                header("Location: ?c=Users&a=readRol");
            }
        }
        // Eliminar Rol
        public function deleteRol(){
			$this->rolDao->deleteRolDao($_GET['idRol']);
			header('Location: ?c=Users&a=readRol');			
		}
        
        // Crear Usuario
        public function createUser(){
            // Muestra el Formulario
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.php";
                require_once "views/modules/1_users/user_create.view.php";            
                require_once "views/roles/admin/footer.php";
            }
            // Captura los Datos
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                $userDto = new UserDto(
                    $_POST['rol_codigo'], 
                    $_POST['user_codigo'],
                    $_POST['user_nombres'],
                    $_POST['user_apellidos'],
                    $_POST['user_correo']
                );
                // $this->rolDao->createUser($userDto);
                // header("Location: ?c=Users&a=readUser");
            }
        }
        /*
        // Consultar Usuario
        public function readUser(){
            $roles = $this->rolDao->readRolDao();
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Usuario
        public function updateUser(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = $this->rolDao->getById($_GET['idRol']);
                require_once "views/roles/admin/header.php";                
                require_once "views/modules/1_users/rol_update.view.php";
                require_once "views/roles/admin/footer.php";
            }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rolDto = new RolDto(
                    $_POST['rol_codigo'],
                    $_POST['rol_nombre']
                );
                $this->rolDao->updateRolDao($rolDto);
                header("Location: ?c=Users&a=readRol");
            }
        }
        // Eliminar Usuario
        public function deleteUser(){
			$this->rolDao->deleteRolDao($_GET['idRol']);
			header('Location: ?c=Users&a=readRol');			
		}
        */
        
    }
?>