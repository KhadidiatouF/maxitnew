<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?Database $instance = null;
    private  PDO $pdo ;

    private function __construct()
    {
        try{

            // $host = 'localhost';
            // $dbname = 'remediation';
            // $user = 'postgres';
            // $pass = 'khadijaf'; 
            // $port= '5432';
                
            // $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

            $this->pdo= new PDO(DSN, USER, PASSWORD);

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