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
        // $this->renderHtml('client/accueil.html.php');
    }

    public function index(){
        $this->renderHtml('client/creerCompte.html.php');

    }

}