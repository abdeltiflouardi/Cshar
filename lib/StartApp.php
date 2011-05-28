<?php

class StartApp {
    
    private $request;
    
    public function __construct() {
        $this->parseRequest();
    }
    
    /**
     * User request
     * This method chooses the controller to execute
     * params
     *      c: controller
     *      m: method
     */
    public function parseRequest() {
        $controller = !empty($_GET['c']) ? $_GET['c'] : 'index';
        $method = !empty($_GET['m']) ? $_GET['m'] : 'index';
        
        $controller = 'Controller\\' . ucfirst($controller) . 'Controller';
		if(is_file($controller.'.php')){
        $instance = new $controller;
        $instance->$method();
		}else{
		$controller='Controller\\indexController';
		$instance=new $controller;
		$instance->index();
		}
    }
}

?>
