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
      //  echo "contoller1 ::".$controller."<br />";
        $controller = 'Controller\\' . ucfirst($controller) . 'Controller';
      //  echo "contoller ::".$controller."<br />";
        $instance = new $controller;
        $instance->$method();
    }
}

?>
