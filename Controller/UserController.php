<?php
namespace Controller;
use Model\User;
class UserController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public function show() {
	}
	
	public function index(){
        $user=new User();
        $users=$user->fetchAll();

		$this->view('user', 'index',compact('users'));
	}
	
	
}
?>