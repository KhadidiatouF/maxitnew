<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?Database $instance = null;
    private  PDO $pdo ;

    private function __construct()
    {
           // $this->pdo= new PDO("pgsql:host=".HOST."dbname=".DB_NAME."port=".PORT.DB_NAME.PASSWORD);
            // $this->pdo = new PDO("pgsql:host=".URL.";dbname=".DB_NAME.";port=".PORT, USER_NAME, PASSWORD

        try{

         
            $this->pdo= new PDO(DSN, USER_NAME, PASSWORD);

        } catch (PDOException $e) {

            die("Erreur de connexion : " . $e->getMessage());

        }     
        
    }


    public static function getInstance(){
        if (is_null(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;

    }


    public function getConnexion(){
            return $this->pdo;
       
    }
    

}