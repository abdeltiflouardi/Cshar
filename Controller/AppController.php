<?php

namespace Controller;
class AppController {
        
    public function view($controller, $method, $data = array()) {
        extract($data);

        include __DIR__ . DS . '..' . DS . 'View' . DS . ucfirst($controller) . DS . $method . '.php';
    }
    
    public function redirect($url) {
        $url = BASE_DIR . $url;     
        header("Location: $url");
    }

    public function __call($name, $args) {
     //   echo $name.'->'.$args[0].'<br />';
	        if (preg_match('/^(set|get|isset|unset|destroy)([A-Z])(.*)$/', $name, $matches)) {
                        $class = $matches[2] . $matches[3];
                        $object = new $class;

			switch ($matches[1]) {
				case 'set':
					$object->set($args[0], $args[1]);
				break;
				case 'get':
					return $object->get($args[0]);
				break;
                case 'isset':
                    return $object->__isset($args[0]);
                break;
                case 'unset':
                    return $object->__unset($args[0]);
                break;
                case 'destroy':
                    return $object->destroy();
                break;
			}
		}
	}

}

?>