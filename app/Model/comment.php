<?php
/*-------------------------------------------------
------------------:Class Commentaire:--------------
---------------------------------------------------
*/ 
class Comment{
	private $id;
	private $file;
	private $member;
	private $comment;
	
/*----------------Id Commentaire Methods--------------*/

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}
	
/*----------------File Methods--------------*/

	public function getFile(){
		return $this->file;
	}
	
	public function setFile($file){
		$this->file=$file;
	}
	
/*----------------Membre Methods--------------*/

	public function getMember(){
		return $this->member;
	}
	
	public function setMember($member){
		$this->member=$member;
	}
	
/*----------------Commentaire Methods--------------*/

	public function getComment(){
		return $this->comment;
	}
	
	public function setComment($comment){
		$this->comment=$comment;
	}
	
}
?>