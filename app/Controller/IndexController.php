<?php
namespace Controller;
class IndexController extends AppController{

	public function index(){
      /*  $test=false;
        if($this->issetSession('loginMember'))
            $test=true;*/
            $this->view('index', 'index'/*, array('test'=>$test)*/);

	}

    public function presentation(){

            $this->view('index', 'presentation');
    }
    public function inscription(){
       
            $this->view('index', 'inscription');
    }

    public function contact(){
        $this->view('index','contact');
    }

    public function faq(){
        $this->view('index','faq');
    }


	
}
?>