<?php
namespace Controller;
use \Model\Administrator;
class AdministratorController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public function show() {
	}
	
	public function index(){
        $administrator=new Administrator();
        $administrators=$administrator->fetchAll();
		$this->view('administrator', 'index',compact('administrators'));
	}
	
}
?>