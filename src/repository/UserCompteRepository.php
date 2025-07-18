<?php
namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
use App\Core\App;
use DateTime;

class UserCompteRepository extends AbstractRepository{


        private CompteRepository $compteRepository;
        private UserRepository $userRepository;

        public function __construct()
        {
           parent::__construct();

            $this->compteRepository= App::getDependencie('compteRepository');
            $this->userRepository= App::getDependencie('userRepository');

        }

        public function insert(array $data){
         try {
            $this->pdo->beginTransaction();

            
            $idUser=$this->userRepository->insert($data);

            $data['iduser']= $idUser;
            $data['solde']= 0;
            $data['date_creation'] = (new \DateTime())->format('Y-m-d');
            $data['type']= 'principal';
            $data['numero']= 'numero';


            $this->compteRepository->insert($data);
          

            $this->pdo->commit();

            return true;

        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw $e;
        }

    }


    public function selectAll(){}
    public function update(){}
    public function delete(){}
    public function selectById(){}
    public function selectBy($array,$filtre){}
}