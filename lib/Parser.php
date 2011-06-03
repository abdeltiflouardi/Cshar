<?php

class Parser {
    
    static function getFieldNameFromMethod($field) {
        return lcfirst(substr($field, 3, strlen($field)));
    }
    
    static function getMethodFromFieldName($field, $type = 'set') {
        return $type . ucfirst($field);
    }    
    
    static function getDatabaseTableName($class_name) {
        return lcfirst(basename(str_replace('\\', '/', $class_name)));
    }
}
?>