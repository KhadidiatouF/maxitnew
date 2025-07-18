<?php
namespace App\Repository;

use App\Core\Abstract\AbstractRepository;

class TransactionRepository  extends AbstractRepository{ 
   
    public function __construct()
    {
        parent::__construct();
    }
       public function getTransaction($id, $filter = null)
        {
            if ($filter === null) {
                $sql = "SELECT 
                            t.id,
                            t.date,
                            t.montant,
                            t.type
                        FROM 
                            transaction t
                        JOIN 
                            compte c ON t.idcompte = c.id
                        WHERE 
                            c.id = :id
                            AND c.type = 'principal'
                        ORDER BY t.id DESC";

                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([
                    ':id' => $id
                ]);

            } else {
                $filter = (int) $filter;
                $sql = "SELECT 
                            t.id,
                            t.date,
                            t.montant,
                            t.type
                        FROM 
                            transaction t
                        JOIN 
                            compte c ON t.idcompte = c.id
                        WHERE 
                            c.id = :id
                            AND c.type = 'principal'
                        ORDER BY t.id DESC
                        LIMIT $filter";

                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([
                    ':id' => $id
                ]);
            }

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

    public function selectAll(){}
    public function insert(array $data){}
    public function update(){}
    public function delete(){}
    public function selectById(){}
    public function selectBy($array,$filtre){}
}