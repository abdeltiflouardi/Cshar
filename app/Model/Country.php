<?php

namespace Model;

class Country extends AppModel {

    private $id;
    private $name;
    
    // Id Pays Methods
    public function setId($id) {
        $this->id = $id;
    }    
    public function getId() {
        return $this->id;
    }

    // Member Methods
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

?>