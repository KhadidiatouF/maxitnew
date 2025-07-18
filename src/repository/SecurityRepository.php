<?php
namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
use App\Entity\User;

class SecurityRepository extends AbstractRepository{

    private static ?SecurityRepository $instance = null;

    private function __construct()
    {
        parent::__construct();
    }

    public static function getInstance(){
        if (self::$instance == null) {
            return self::$instance = new self();
        }
        return self::$instance;
    }

    public function connexion($login){

            $sql = "SELECT  * FROM  utilisateur where login = :login";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':login' => $login,
            ]);


            $user = $stmt->fetch(\PDO::FETCH_ASSOC);


            if (!$user) {
                return null;
            }
   
            return User::toObject($user);

    }


    public function selectAll(){}
    public function insert(array $data){}
    public function update(){}
    public function delete(){}
    public function selectById(){}
    public function selectBy($array,$filtre){}


}