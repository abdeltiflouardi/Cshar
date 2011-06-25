<?php

class StartApp {

    private $request;
    private $env;
    private $app;

    public function __construct($app = null, $env = null) {
        $this->env = $env;
        $this->app = $app;

        $this->parseRequest();
        $this->loadConfig();
        $this->loadSecurityConfig();

        $this->doAction();
    }

    /**
     * User request
     * This method chooses the controller to execute
     * params
     *      c: controller
     *      m: method
     */
    public function parseRequest() {
        $this->request['controller'] = !empty($_GET['c']) ? $_GET['c'] : 'index';
        $this->request['action'] = !empty($_GET['a']) ? $_GET['a'] : 'index';
    }

    /**
     * Load config
     */
    public function loadConfig() {
        require AD . 'Config' . DS . $this->env . '.php';
    }

    /**
     * Load security
     */
    public function loadSecurityConfig() {
        require AD . 'Config' . DS . 'security.php';
        Security::getInstance()->check($security, $this->request);
    }

    /**
     * call action
     */
    public function doAction() {
        $controller = $this->request['controller'];
        $action = $this->request['action'];

        $controller = 'Controller\\' . ucfirst($controller) . 'Controller';

        $instance = new $controller;
        $instance->$action();
    }

}

?>
