<?php 

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Service\TransactionService;

class TransactionController extends AbstractController{
    private TransactionService $transactionService;

    public function __construct()
    {
        parent::__construct();
        $this->transactionService=App::getDependencie('transactionService');
    }


    public function dixDernierTransac(){
        $idcompte=$this->session->get('idcompte')['id'];

        $transactions = $this->transactionService->renderTransaction($idcompte);
        // $this->session->set('transactions', $transactions);
        $this->renderHtml('client/accueil.html.php', $transactions);

        // if () {
        //     # code...
        // }
    }
 
     public function index(){}
     public function create(){

     }

}