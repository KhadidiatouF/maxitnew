<?php
namespace App\Repository;

use App\Core\Abstract\AbstractRepository;

class UserRepository extends AbstractRepository{
    // private 

        public function insert($data) {
            $sql = "INSERT INTO utilisateur (nom, prenom, login, mdp, numerocarte, photorecto, photoverso, idtypeuser) 
                    VALUES (:nom, :prenom,  :login, :mdp, :numerocarte, :photorecto, :photoverso, :idtypeuser)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $data['nom'],
                ':prenom' => $data['prenom'],
                ':login' => $data['login'],
                ':mdp' => $data['mdp'],
                ':numerocarte' => $data['numerocarte'],
                // ':photorecto' => $data['photorecto'],
                // ':photoverso' => $data['photoverso'],
                ':idtypeuser' => 1
            ]);

            return $this->pdo->lastInsertId();
        }




    public function selectAll(){}
    public function update(){}
    public function delete(){}
    public function selectById(){}
    public function selectBy($array,$filtre){}
}