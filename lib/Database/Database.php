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

    static function findById(&$data) {
        self::getDriver()->findById($data);
    }

    static function fetchAll($data) {
        return self::getDriver()->fetchAll($data);
    }

    static function findBy(&$data, $criteria) {
        self::getDriver()->findBy($data, $criteria);
    }

    static function delete($data) {
        return self::getDriver()->delete($data);
    }

}

?>
