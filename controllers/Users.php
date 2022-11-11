<?php
    class Users{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/modules/0_mains/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Configurar Usuario
        public function config(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_config.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Crear Usuario
        public function create(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_create.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Consultar Usuarios
        public function read(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Usuario
        public function update(){
            // Programar
            require_once "views/roles/admin/header.php";
            require_once "views/modules/1_users/user_update.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // función eliminar
        public function delete(){
            // Programar            
        }
    }
?>