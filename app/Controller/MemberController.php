<?php
namespace Controller;
class MemberController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public static function show($bdd) {
		$request=$bdd->query("SELECT * FROM membre");
		return $request;
	}
	
	public function index($list,$index){
		
	}
	
}
?>