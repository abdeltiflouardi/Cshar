<?php
namespace Controller;
use \Model\Moderator;
class ModeratorController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public function show() {
	}
	
	public function index(){
        $moderator=new Moderator();
        $moderators=$moderator->fetchAll();
		$this->view('moderator', 'index',compact('moderators'));
	}
	
}
?>