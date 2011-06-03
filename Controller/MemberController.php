<?php
namespace Controller;

use Model\Member;

class MemberController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
         $id = $_GET['id'];
         $member = new Member();
         $member->setId($id);
         $member->delete();
         $this->redirect('?c=Member');
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