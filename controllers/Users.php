<?php    

    require_once "models/model_dto/RolDto.php";
    require_once "models/model_dao/RolDao.php";

    class Users{
        private $userDao;
        public function __construct(){
            $this->userDao = new RolDao;
        }
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
                $userDto = new UserDto(
                    $_POST['rol_codigo'], 
                    $_POST['rol_nombre']
                );
                $this->userDao->createRol($userDto);
                header("Location: ?c=Users&a=readRol");

                /*
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
                */
            }
        }
        
        // Consultar Roles
        public function readRol(){
            $roles = $this->userDao->readRolDao();
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }

        // Actualizar Rol
        public function updateRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = $this->userDao->getById($_GET['idRol']);
                require_once "views/roles/admin/header.php";                
                require_once "views/modules/1_users/rol_update.view.php";
                require_once "views/roles/admin/footer.php";
            }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $userDto = new UserDto(
                    $_POST['rol_codigo'],
                    $_POST['rol_nombre']
                );
                $this->userDao->updateRolDao($userDto);
                header("Location: ?c=Users&a=readRol");
            }           
            
        }

        // Eliminar Rol
        public function deleteRol(){
			$this->userDao->deleteRolDao($_GET['idRol']);
			header('Location: ?c=Users&a=readRol');			
		}
        
    }
?>