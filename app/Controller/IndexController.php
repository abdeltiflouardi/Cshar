<?php
namespace Controller;
class IndexController extends AppController{

	public function index(){
            $name = 'Ayoub';
            $this->view('index', 'index', array('name' => $name));
	}
	
}
?>