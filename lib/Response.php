<?php

class Response {

    public static function redirect($url = '/', $options = array()) {
        $url = BASE_DIR . $url;     
        header("Location: $url");
        exit;        
    }
}
