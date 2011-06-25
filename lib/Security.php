<?php

class Security {
    
    private $controller;
    private $action;
    private $config;
    private $access;
    private $session;

    private static $instance;

    public function __construct() {
        $this->session = Session::getInstance();
    }

    public static function getInstance()
    {
        if ( !isset(self::$instance))
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function check(array $config, array $request) {
        $this->controller = strtolower($request['controller']);
        $this->action = strtolower($request['action']);
        $this->config = $config;
        $this->access = true;

        $this->parseSecure();

	if (!$this->access && !$this->isConnected()) {
           $url = '?c=' . $this->config['CONFIG']['controller'] . '&a=' . $this->config['CONFIG']['action'];
           Response::redirect($url);
        }
    }

    private function parseSecure() {
       if (isset($this->config['*']))
           if (in_array('*', $this->config['*']) || 
               in_array($this->action, $this->config['*']))
               $this->access = false;
 
       if (isset($this->config[$this->controller]))
           if (in_array('*', $this->config[$this->controller]) || 
               in_array($this->action, $this->config[$this->controller])) 
               $this->access = false; 
    }

    public function getPassword($password) {
        if (isset($this->config['CONFIG']['encoder']) && $this->config['CONFIG']['encoder'] != 'plaintext')
            $password = call_user_func($this->config['CONFIG']['encoder'], $password);

        return $password;
    }

    public function setUser($user) {
        $this->session->set('Auth', $user);
    }

    public function getUser() {
        return $this->session->get('Auth');
    }

    public function isConnected() {
        return ($user = $this->session->get('Auth')) ? true : false;
    }

    public function logout() {
        unset($this->session->Auth);
    }
}
