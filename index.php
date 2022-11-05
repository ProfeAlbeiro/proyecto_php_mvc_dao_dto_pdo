<?php
    if (!isset($_REQUEST['c'])) {
        require_once "controllers/Landing.php";
        $controller = new Landing;
        $controller->index();
    } else {
        $controller = $_REQUEST['c'];
        require_once "controllers/". $controller . ".php";
        $controller = new Landing;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';
        call_user_func(array($controller, $action));
    }
    
    
    /*
    if (!isset($_REQUEST['c'])) {		
		require_once 'controller/LandingPage.php';
		$controller = new LandingPage;
		$controller->index();
	} else {
		$controller = $_REQUEST['c'];
		require_once 'controller/' . $controller . '.php';
		$controller = new $controller;
		$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';
		call_user_func(array($controller, $action));
	}
    */
?>