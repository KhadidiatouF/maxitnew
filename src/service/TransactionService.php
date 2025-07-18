<?php 

namespace App\Service;

use App\Core\App;
use App\Repository\TransactionRepository;

class TransactionService{
    private TransactionRepository $transactionRepository;

    public function __construct()
    {
        $this->transactionRepository = App::getDependencie('transactionRepository');
    }


    public function renderTransaction($id){
        return $this->transactionRepository->getTransaction($id , 10);
        
    }
}