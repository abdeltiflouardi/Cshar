<?php
namespace Controller;
class AppController{
	public function view ($controller, $method, $data = array()) {
            extract($data);
            
            include __DIR__ . DS . '..' . DS . 'View' . DS . ucfirst($controller) . DS . $method . '.php';
        }
}
?>