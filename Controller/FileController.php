<?php
namespace Controller;
use Model\File;
class FileController extends AppController{
	
	public function add(){
        $this->view('file','add');
	}
	
	public function update(){
	}
	
	public function delete(){
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