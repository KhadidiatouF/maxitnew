<?php 

namespace App\Core\Abstract;

use App\Core\Database;

use PDO;

abstract class AbstractRepository{

    protected PDO $pdo;
   


    public function __construct()
    {
        $this->pdo= Database::getInstance()->getConnexion();
    }



    // private function __construct()
    // {
        
    // }



    abstract public function selectAll();
    abstract public function insert(array $data);
    abstract public function update();
    abstract public function delete();
    abstract public function selectById();
    abstract public function selectBy($array,$filtre);

}