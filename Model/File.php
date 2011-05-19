<?php
/*-------------------------------------------------
-------------------:Class Fichier:-----------------
---------------------------------------------------
*/
namespace Model;
class File{
	private $id;
	private $group;
	private $name;
	private $link;
	private $dateOfEmission;
	private $dateOfLastDownload;
	
/*----------------Id Methods--------------*/

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}

/*----------------Groupe Methods--------------*/

	public function getGroup(){
		return $this->group;
	}
	
	public function setGroup($group){
		$this->group=$group;
	}
	
/*--------------Nom du fichier Methods------------*/

	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
/*----------------Lien du fichier Methods--------------*/

	public function getLink(){
		return $this->link;
	}
	
	public function setLink($link){
		$this->link=$link;
	}
	
/*----------------Date de l'emmission Methods-----------*/

	public function getDateOfEmission(){
		return $this->dateOfEmission;
	}
	
	public function setDateOfEmission($dateOfEmission){
		$this->dateOfEmission=$dateOfEmission;
	}
	
/*--------Date du dernier telechargement Methods--------*/

	public function getDateOfLastDownload(){
		return $this->dateOfLastDownload;
	}
	
	public function setDateOfLastDownload($dateOfLastDownload){
		$this->dateOfLastDownload=$dateOfLastDownload;
	}
} 
?>