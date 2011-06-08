<?php
namespace Controller;
use Model\Moderator;
use Model\Country;
use Model\Member;
class ModeratorController extends AppController{
	
	public function add(){
        $country=new Country();
        $countries=$country->fetchAll();
        $moderator=new Member();
        if(isset($_POST['moderator'])){
            $moderator->setNature("moderator");
            $moderator->save($_POST['moderator']);
            $this->redirect('?c=moderator');
        }
        $this->view('moderator','add',compact('countries'));
	}
	
	public function update(){
        $id=$_GET['id'];
        $moderator=new Member();
        $moderator->setId($id);
        $moderators=$moderator->fetch();
        $country=new Country();
        $countries=$country->fetchAll();

        if(isset($_POST['modify'])){
            echo $moderator->update($_POST['moderator']);
            $this->redirect("?c=moderator");
        }
        $this->view('moderator','update',compact('countries','moderators'));
	}
	
	public function delete(){
         $id = $_GET['id'];
         $moderator = new Member();
         $moderator->setId($id);
         $moderator->delete();
         $this->redirect('?c=Moderator');
	}
	
	public function show() {
	}
	
	public function index(){
        $moderator=new Member();
        $members=$moderator->fetchAll();
        $moderators=array();
        foreach($members as $moderator){
            if($moderator->getNature()=="moderator")
                $moderators[]=$moderator;
        }
		$this->view('moderator', 'index',compact('moderators'));
	}
	
}
?>