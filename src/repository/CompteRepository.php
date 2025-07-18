<?php
namespace App\Repository;

use App\Core\Abstract\AbstractRepository;

class CompteRepository extends AbstractRepository{

    public function selectAll(){}
    public function insert(array $data){

            $sql = "INSERT INTO compte (numero,solde, date_creation,  type, iduser) 
                        VALUES (:date_creation, :solde, :numeroCompte, :type, :iduser)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':numero' => $data['numero'],
                ':solde' => $data['solde'],
                ':date_creation' => $data['date_creation'],
                ':type' => $data['type'],
                ':iduser' => $data['iduser'],
            ]);

            return $this->pdo->lastInsertId();

    }

    public function getSolde($id){
           $sql = "SELECT solde FROM compte  where iduser = :iduser AND type = 'principal'  ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':iduser' => $id
            ]);

            $solde = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $solde;
    }


    public function comptePrincipale($iduser){
         $sql = "SELECT id FROM compte  where iduser = :iduser AND type = 'principal'  ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':iduser' => $iduser
            ]);

            $id = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $id;
    }


    

    public function update(){}
    public function delete(){}
    public function selectById(){}
    public function selectBy($array,$filtre){}
}