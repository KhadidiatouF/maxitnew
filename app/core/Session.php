<?php
namespace App\Core;

class Session {
    private static ?Session $session = null;
    
    private function __construct()
    {
        if(session_status()===PHP_SESSION_NONE){
            session_start();
        }
    }

    public static function getInstance(){
        if (is_null(self::$session)) {
            return self::$session = new self() ;
        }

        return self::$session;
        
    }

    public function set($key, $data){
        $_SESSION[$key] = $data;

    }

    public function get($key){
        return $_SESSION[$key]?? null;

    }

    public function unset($key){
        unset($_SESSION[$key]);
    }

    public function isset($key){
        return isset($_SESSION[$key]);

    }

    public function destroy(){
        session_unset();
        session_destroy();
        self::$session = null;

    }

    
    
}