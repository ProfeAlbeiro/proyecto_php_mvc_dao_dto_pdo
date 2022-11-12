<?php
    class Users{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/modules/0_mains/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }
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
    }
?>