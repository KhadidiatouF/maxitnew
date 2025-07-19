<?php
namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\App;
use App\Service\SecurityService;

class ClientController extends AbstractController{
    private SecurityService $securityService;

    public function __construct()
    {
        $this->layout= 'base.layout.php';
        $this->securityService= new SecurityService();
    }

 

    public function create(){
        $this->renderHtml('client/transfert.html.php');
    }

    public function index(){
        $this->renderHtml('client/creerCompte.html.php');

    }

    public function show(){
        $this->renderHtml('client/voirPlus.html.php');
    }

}