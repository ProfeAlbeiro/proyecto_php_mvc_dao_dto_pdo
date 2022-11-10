<?php
    class Dashboard{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/modules/0_mains/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function email(){
            require_once "views/roles/admin/header.php";
            require_once "views/modules/7_others/email.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>