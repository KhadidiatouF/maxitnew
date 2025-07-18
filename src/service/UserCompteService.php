<?php
namespace App\Service;

use App\Core\App;
use App\Repository\CompteRepository;
use App\Repository\UserCompteRepository;

class UserCompteService{

    private UserCompteRepository $userCompteRepository;
    private CompteRepository $compteRepository;
    
    public static function getInstance(){}

    public function __construct(){
        $this->userCompteRepository = App::getDependencie('userCompteRepository');
        $this->compteRepository= App::getDependencie('compteRepository');

    }

    public function inscriptionService($data){
        return $this->userCompteRepository->insert($data);
    }

    public function getIdComptePrincipale($iduser){
        return $this->compteRepository->comptePrincipale($iduser);


    }




}