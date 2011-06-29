<?php
/*-------------------------------------------------
----------------Class : Membre --------------------
--------------------------------------------------*/
namespace Model;
class Member extends AppModel{
	protected $id;
	protected $login;
	protected $firstName;
	protected $lastName;
	protected $birthDay;
	protected $email;
	protected $occupation;
	protected $password;
	protected $country;
	protected $status;
	protected $nature;

/*----------------Id Methods--------------*/

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}
	
/*----------------Login Methods--------------*/

	public function getLogin(){
		return $this->login;
	}
	
	public function setLogin($login){
		$this->login=$login;
	}
	
/*----------------FirstName Methods--------------*/

	public function getFirstName(){
		return $this->firstName;
	}
	
	public function setFirstName($firstName){
		$this->firstName=$firstName;
	}
	
/*----------------LastName Methods--------------*/

	public function getLastName(){
		return $this->lastName;
	}
	
	public function setLastName($lastName){
		$this->lastName=$lastName;
	}
	
/*----------------DateOfBirth Methods--------------*/

	public function getBirthDay(){
		return $this->birthDay;
	}
	
	public function setBirthDay($birthDay){
		$this->birthDay=$birthDay;
	}
	
/*----------------Email Methods--------------*/

	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email=$email;
	}
	
/*----------------Occupation Methods--------------*/

	public function getOccupation(){
		return $this->occupation;
	}
	
	public function setOccupation($occupation){
		$this->occupation=$occupation;
	}
	
/*----------------Password Methods--------------*/

	public function getPassword(){
		return $this->password;
	}
	
	public function setPassword($password){
		$this->password=$password;
	}
	
/*----------------Country Methods--------------*/

	public function getCountry(){
		return $this->country;
	}
	
	public function setCountry($country){
		$this->country=$country;
	}
	
/*----------------Status Methods--------------*/

	public function getStatus(){
		return $this->status;
	}
	
	public function setStatus($status){
		$this->status=$status;
	}
	
/*----------------Nature Methods--------------*/

	public function getNature(){
		return $this->nature;
	}
	
	public function setNature($nature){
		$this->nature=$nature;
	}
	
}

?>