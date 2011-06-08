<?php
namespace lib;
class Session{

    public static function set($name, $value){
        $_SESSION[$name]=$value;
    }
    public static function fetchAll(){
    return $_SESSION;
    }

    public static function get($name){
        return $_SESSION[$name];
    }

    public static function isExist($name = null){
    if(isset($_SESSION[$name])) return true;
        return false;
    }

    public static function del($name){
        unset($_SESSION[$name]);
    }

    public static function start(){
        session_start();
    }

    public static function destroy(){

        session_destroy();
        unset($_SESSION);

    }

}
?>