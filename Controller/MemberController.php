<?php
namespace Controller;

use Model\Member;

class MemberController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public static function show() {

	}
	
	public function index(){
        $member=new Member();
        $members=$member->fetchAll();
        $this->view('Member','index',compact('members'));
   
	}
	
}
?>