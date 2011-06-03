<?php
namespace Controller;
use \Model\Administrator;
use Model\Country;
class AdministratorController extends AppController{
	
	public function add(){
        $country=new Country();
        $countries=$country->fetchAll();
        $administrator=new Administrator();
        if(isset($_POST['administrator'])){
            $administrator->save($_POST['administrator']);
            $this->redirect('?c=administrator');
        }
        $this->view('administrator','add',compact('countries'));
	}
	
	public function update(){
        $id=$_GET['id'];
        $administrator=new Administrator();
        $administrator->setId($id);
        $administrators=$administrator->fetch();
        $country=new Country();
        $countries=$country->fetchAll();

        if(isset($_POST['modify'])){
            echo $administrator->update($_POST['administrator']);
            $this->redirect("?c=administrator");
        }
        $this->view('administrator','update',compact('countries','administrators'));
	}
	
	public function delete(){
         $id = $_GET['id'];
         $administrator = new Administrator();
         $administrator->setId($id);
         $administrator->delete();
         $this->redirect('?c=Administrator');
	}
	
	public function show() {
	}
	
	public function index(){
        $administrator=new Administrator();
        $administrators=$administrator->fetchAll();
		$this->view('administrator', 'index',compact('administrators'));
	}
	
}
?>