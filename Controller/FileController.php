<?php
namespace Controller;
use Model\File;
use Model\Groups;
class FileController extends AppController{
	
	public function add(){
        $group=new Groups();
        $groups=$group->fetchAll();
        $this->view('file','add',compact('groups'));
	}
	
	public function update(){
	}
	
	public function delete(){
         $id = $_GET['id'];
         $file = new File();
         $file->setId($id);
         $file->delete();
         $this->redirect('?c=File');
	}
	
	public function show() {
	}
	
	public function index(){
        $file=new File();
        $files=$file->fetchAll();
		$this->view('file', 'index',compact('files'));
	}
	
}
?>