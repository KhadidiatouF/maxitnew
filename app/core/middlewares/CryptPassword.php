<?php 
namespace App\Core\Middlewares;

class CryptPassword{


    public function __invoke()
    {
        if (!empty($_POST['mdp'])) {
             $_POST['mdp']= password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        }
    } 
}