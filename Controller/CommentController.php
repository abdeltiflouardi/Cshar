<?php
namespace Controller;
use Model\Comment;
use Model\User;
use Model\File;
class CommentController extends AppController{
	
	public function add(){
        $user=new User();
        $users=$user->fetchAll();

        $file=new File();
        $files=$file->fetchAll();
        if(!empty($_POST['comment'])){
            $comment=new Comment();
           $id=$comment->save($_POST['comment']);
            
           if(is_numeric($id)){
                $this->redirect("?c=Comment");
            }
        }
        $this->view('comment','add',compact('users','files'));
	}
	
	public function update(){
	}
	
	public function delete(){
	}
	
	public function show() {
	}
	
	public function index(){
        $comment=new Comment();
        $comments=$comment->fetchAll();
		$this->view('comment', 'index',compact('comments'));
	}
	
}
?>