<?php
/*-------------------------------------------------
--------------------:Class Pays:-------------------
---------------------------------------------------
*/ 
namespace Model;
class Country{
	private $id;
	private $name;
	
/*----------------Id Pays Methods--------------*/

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}

/*----------------Member Methods--------------*/

	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
}
?>