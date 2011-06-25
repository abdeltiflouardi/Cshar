<?php

namespace Controller;

use Response;

class AppController {
        
    public function view($controller, $method, $data = array()) {
        extract($data);

        include __DIR__ . DS . '..' . DS . 'View' . DS . ucfirst($controller) . DS . $method . '.php';
    }

    public function get($class) {
        return new $class;
    }
    
    public function redirect($url) {
        Response::redirect($url);
    }

}

?>
