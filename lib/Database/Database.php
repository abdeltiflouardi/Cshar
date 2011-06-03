<?php
namespace Database;

class Database {
    
    static function getDriver() {
       $load_driver_class = '\Database\\' . DATABASE_DRIVER;
       return new $load_driver_class;
    }

    static function save($data, $class_name = null) {
        return self::getDriver()->save($data);
    }

    static function fetchAll($data) {
        return self::getDriver()->fetchAll($data);
    }
    
    static function delete($data) {
        return self::getDriver()->delete($data);
    }

    static function update($data){
        return self::getDriver()->update($data);
    }

    static function fetch($data){
        return self::getDriver()->fetch($data);
    }
	
}
?>
