<?php
/*-------------------------------------------------
--------------:Class Détails Commentaires----------
---------------------------------------------------
*/
class GroupDetails{
	private $member;
	private $group;
	private $dateOfIntegration;
	private $notification;
	
/*----------------Membre Methods--------------*/

	public function getMember(){
		return $this->member;
	}
	
	public function setMember($member){
		$this->member=$member;
	}
	
/*----------------Groupe Methods--------------*/

	public function getGroup(){
		return $this->group;
	}
	
	public function setGroup($group){
		$this->group=$group;
	}
	
/*----------------Date d'intégration Methods--------------*/

	public function getDateOfIntegration(){
		return $this->dateOfIntegration;
	}
	
	public function setDateOfIntegration($dateOfIntegration){
		$this->dateOfIntegration=$dateOfIntegration;
	}
	
/*----------------Notification Methods--------------*/

	public function getNotification(){
		return $this->notification;
	}
	
	public function setNotification($notification){
		$this->notification=$notification;
	}
	

}
?>