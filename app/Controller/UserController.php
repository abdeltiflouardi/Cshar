<?php
namespace Controller;
use Model\Member;
use Model\User;
use Model\Country;
class UserController extends AppController{
	
	public function add(){
        $country=new Country();
        $countries=$country->fetchAll();
        $user=new Member();
        if(isset($_POST['user'])){
            $user->setNature("user");
            $user->save($_POST['user']);
            $this->redirect('?c=User');
        }
        $this->view('user','add',compact('countries'));
	}
	
	public function update(){
        $id=$_GET['id'];
        $user=new Member();
        $user->setId($id);
        $users=$user->fetch();
        $country=new Country();
        $countries=$country->fetchAll();

        if(isset($_POST['modify'])){
             $user->update($_POST['user']);
            $this->redirect("?c=user");
        }
        $this->view('user','update',compact('countries','users'));
    }
	
	public function delete(){
        $id = $_GET['id'];
            $user = new Member();
            $user->setId($id);
            $user->delete();

            $this->redirect('?c=User');
        
	}
	
	public function show() {
	}
	
	public function index(){
        

        $user=new Member();
        
        $members=$user->fetchAll();
        $users=array();

        foreach($members as $user){

          if($user->getNature()=="user"){
             $users[]=$user;
          }

       }
		$this->view('user', 'index',compact('users'));
	}
	
	
}
?>