<?php
namespace Controller;
class IndexController extends AppController{

	public function index(){
            $name = 'Ayoub';
            $lastName='Dahhane';
            $this->view('index', 'index', array('name' => $name, 'lastName'=>$lastName));
	}
	
}
?>