<?php
namespace Controller;

use Model\Member;
class MemberController extends AppController{
	
	public function add(){
	}
	
	public function update(){
	}
	
	public function delete(){
        

         $id = $_GET['id'];
         $member = new Member();
         $member->setId($id);
         $member->delete();
       $this->redirect('?c=Member');
        
	}

	public static function show() {

	}
	
	public function index(){
          $this->setSession('name','ayoub');
        $member=new Member();
        $members=$member->fetchAll();
        $this->view('Member','index',compact('members'));
   
	}

    public function subscribe(){

        if(isset($_POST['member'])){
            if(!empty($_POST['member']['login']) and !empty($_POST['member']['password']) and !empty($_POST['member']['email'])){
                $_POST['member']['password']=md5($_POST['member']['password']);
            $member=new Member();
            $member->setLogin($_POST['member']['login']);
            $members=$member->fetch();

            if(count($members)==0){
                $member->setEmail($_POST['member']['email']);
                $members=$member->fetch();

                    if(count($members)==0){
                      $id=$member->save($_POST['member']);

                        if(!is_null($id))
                    $this->redirect("?c=Member");
                    }else
                        echo "Email Existe Déja";

            }else
                echo "Pseudo existe déja";

        }else
            echo "Veuillez renseinger tous les champs";
        }

        $this->view('member','subscribe');

    }
    public function connect(){
        if(isset($_POST['member'])){
            $member=new Member();
            $member->setLogin($_POST['member']['login']);
            $members=$member->fetch();
            if(count($members)==1){
                foreach ($members as $item){
                    if($item->getPassword()==md5($_POST['member']['password'])){
                        echo "Connection Established";
                        $this->redirect("");
                    }else echo "Login/Password invalide";
                }
            }else echo "Login/Password invalide";
        }
        $this->view('member','connect');
    }
	
}
?>