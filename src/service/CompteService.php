<?php
namespace App\Service;

use App\Core\App;
use App\Repository\CompteRepository;

class CompteService{

    private CompteRepository $compteRepository;


    public static function getInstance(){}

    public function __construct(){
        $this->compteRepository = new CompteRepository();

    }


    public function afficheSolde($id){
        return $this->compteRepository->getSolde($id);
    }

    //  public function creationCompteSecondaire($data){
    //     return $this->compteRepository->compteSecondaire($data);
    // }



}