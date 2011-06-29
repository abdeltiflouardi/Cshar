<?php
/*-------------------------------------------------
--------------------:Class Groupe:-----------------
---------------------------------------------------
*/ 
namespace Model;
class Groups extends AppModel{
	private $id;
	private $member;
	private $name;
	private $activity;
	private $dateIssue;
    private $opened;
	
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

	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
/*----------------ActivityGroup Methods--------------*/

	public function getActivity(){
		return $this->activity;
	}
	
	public function setActivity($activity){
		$this->activity=$activity;
	}
	
/*----------------IssueDate Methods--------------*/
    
	public function getDateIssue(){
		return $this->dateIssue;
	}
	
	public function setDateIssue($DateIssue){
		$this->dateIssue=$DateIssue;
	}

/**************------*/
    public function getOpened(){
        return $this->opened;
    }

    public function setOpened($opened){
        $this->opened=$opened;
    }
	
}
?>