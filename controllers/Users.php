<?php    

    require_once "models/model_dto/RolDto.php";
    require_once "models/model_dto/UserDto.php";
    require_once "models/model_dto/CredentialDto.php";
    require_once "models/model_dao/RolDao.php";
    require_once "models/model_dao/UserDao.php";

    class Users{
        
        private $userDao;
        public function __construct(){
            $this->rolDao = new RolDao;
            $this->userDao = new UserDao;
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
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $userDto = new CredentialDto(
                    $_POST['rol_codigo'], 
                    $_POST['user_codigo'],
                    $_POST['user_nombres'],
                    $_POST['user_apellidos'],
                    $_POST['user_correo']
                );
                if ($_POST['rol_codigo'] == "2") {                    
                    $this->userDao->createUserDao($userDto);
                    header("Location: ?c=Users&a=readUser");
                }
                elseif ($_POST['rol_codigo'] == "1") {
                    require_once "views/roles/admin/header.php";                    
                    $userDto->setFotoCredential($_POST["credential_foto"]);
                    print_r($userDto);
                    echo "<br>";
                    echo "<br>" . $userDto->getCodigoRol();
                    echo "<br>" . $userDto->getNombresUser();
                    echo "<br>" . $userDto->getFotoCredential();
                    require_once "views/roles/admin/footer.php";
                }
                elseif ($_POST['rol_codigo'] == "3") {
                    require_once "views/roles/admin/header.php";
                    echo "Soy un Cliente";
                    require_once "views/roles/admin/footer.php";
                }
                elseif ($_POST['rol_codigo'] == "4") {
                    require_once "views/roles/admin/header.php";
                    echo "Soy un Vendedor";
                    require_once "views/roles/admin/footer.php";
                }                
            }
        }
        
        // Consultar Usuarios sin Credenciales
        public function readUser(){
            $users = $this->userDao->readUserDao();            
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/user_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }

        // Consultar Usuarios con Credenciales
        public function readUserCred(){
            // $users = $this->userDao->readUserDao();            
            require_once "views/roles/admin/header.php";
            echo "Con Credenciales";
            // require_once "views/modules/1_users/user_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }

        /*
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