<?php
namespace Controller;
use Model\GroupDetails;
class GroupDetailsController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public function show() {
	}
	
	public function index(){
        $groupdetails=new GroupDetails();
        $groupsdetails=$groupdetails->fetchAll();
		$this->view('groupDetails', 'index',compact('groupsdetails'));
	}
	
}
?>