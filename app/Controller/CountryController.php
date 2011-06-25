<?php
namespace Controller;

// import classes to use in controller
use Model\Country;

class CountryController extends AppController {
	
	public function add() {
            
            if (!empty($_POST['country'])) {
                $country = new Country();
                $id = $country->save($_POST['country']);
                
                if (is_numeric($id)) {
                    $this->redirect('?c=Country');
                }
            }
            
            $this->view('Country', 'add');
	}
	
	public function edit() {
            $id = $_GET['id'];
            $country = new Country();
            $country->findById($id);
            if (!empty($_POST)) {
                 $country->save($_POST['country']);

                if (is_numeric($id)) {
                    $this->redirect('?c=Country');
                }                 
            }
            
            $this->view('Country', 'edit', compact('country'));
	}
	
	public function delete() {
            $id = $_GET['id'];
            $country = new Country();
            $country->setId($id);
            $country->delete();
            
            $this->redirect('?c=Country');
	}
	
	public function show() {
	}
	
	public function index(){
            
            $country = new Country();
            $countries = $country->fetchAll();
            
            $this->view('Country', 'index', compact('countries'));
	}
	
}
?>
