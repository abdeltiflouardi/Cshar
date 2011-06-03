<?php

namespace Model;

use Database\Database;

abstract class AppModel {

    public function save(array $data = array()) {

        foreach ($data as $field => $value) {
            $this->{'set' . ucfirst($field)}($value);
        }

        return \Database\Database::save($this);
    }
    
    public function fetchAll() {
        return \Database\Database::fetchAll($this);
    }
	
    public function delete() {
        return \Database\Database::delete($this);
    }
    
    public function update(array $data=array()){

        foreach ($data as $field => $value) {
            $this->{'set' . ucfirst($field)}($value);
        }
        echo "zer";
        return \Database\Database::update($this);
    }

    public function fetch(){
        
        return \Database\Database::fetch($this);
    }


    
}

?>
