<?php
namespace Controller;

use Model\Member;

class UserController extends AppController{
	
    public function add(){
    
    }
	
    public function update(){
    }
	
    public function delete(){
    }
	
    public function show() {
    }
	
    public function index(){
	$this->view('user', 'index');
    }
	
    public function login() {
        if (!empty($_POST)) {
            $member = new Member();
            $member->findBy(array('email' => $_POST['username']));

            if ($member->getPassword() == \Security::getInstance()->getPassword($_POST['password'])) {
                $this->get("session")->set('Auth', $member);
                $this->redirect('');
            }
        }

        $this->view('user', 'login');
    }	

    public function logout() {
        $this->get('security')->logout();
        $this->redirect('');
    }
}
?>
