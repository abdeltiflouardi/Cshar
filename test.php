<?php

class Session {
	public function set($name, $value) {
		$_SESSION[$name] = $value;
	}

	public function get($name) {
		return $_SESSION[$name];
	}
}

class Magic {

	public function __contruct() {}

	public function __call($name, $args) {
        echo $name.'->'.$args[0].'<br />';
	        if (preg_match('/^(set|get)([A-Z])(.*)$/', $name, $matches)) {
                        $class = $matches[2] . $matches[3];
                        $object = new $class;

			switch ($matches[1]) {
				case 'set':
					$object->set($args[0], $args[1]);
				break;
				case 'get':
					return $object->get($args[0]);
				break;
			}
		}
	}

	public function testAction() {
		$this->setSession("age", 12);


		echo $this->getSession('age');
       echo session_unset();
        print_r($_SESSION);

        
	}
}
// Test
$m = new Magic();
$m->testAction();