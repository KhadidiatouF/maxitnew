<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?Database $instance = null;
    private  PDO $pdo ;

    private function __construct()
    {

        $host = HOST;
        $dbname = DB_NAME;
        $username = USER_NAME;
        $password = PASSWORD;


        try{

         
            $this->pdo= new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

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