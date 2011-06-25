<?php
/*-------------------------------------------------
--------------------:Class Groupe:-----------------
---------------------------------------------------
*/ 
class Group{
	private $id;
	private $member;
	private $nameGroup;
	private $activityGroup;
	private $issueDate;
	
/*----------------IdGroup Methods--------------*/

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}

/*----------------Member Methods--------------*/

	public function getMember(){
		return $this->member;
	}
	
	public function setMember($member){
		$this->member=$member;
	}
	
/*--------------NameGroup Methods------------*/

	public function getNameGroup(){
		return $this->nameGroup;
	}
	
	public function setNameGroup($nameGroup){
		$this->nameGroup=$nameGroup;
	}
	
/*----------------ActivityGroup Methods--------------*/

	public function getActivityGroup(){
		return $this->activityGroup;
	}
	
	public function setMember($activityGroup){
		$this->member=$member;
	}
	
/*----------------IssueDate Methods--------------*/

	public function getIssueDate(){
		return $this->issueDate;
	}
	
	public function setIssueDate($issueDate){
		$this->issueDate=$issueDate;
	}
	
}
?>