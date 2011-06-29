<?php
namespace Controller;
use Model\Groups;
use Model\Member;
class GroupsController extends AppController{
	
	public function add(){
        $member=new Member();
        $members=$member->fetchAll();
        if(!empty($_POST['groups'])){
            $groups=new Groups();
          $id=$groups->save($_POST['groups']);

         if(is_numeric($id)){
            $this->redirect("?c=Groups");
         }
        }
        $this->view('groups','add',compact('members'));

	}
	
	public function update(){
	}

    public function delete() {
            $id = $_GET['id'];
            $groups = new Groups();
            $groups->setId($id);
            $groups->delete();

            $this->redirect('?c=Groups');
	}
	
	public function show() {
	}
	
	public function index(){
        $group=new Groups();
        $groups=$group->fetchAll();
		$this->view('groups', 'index',compact('groups'));
	}
	
}
?>