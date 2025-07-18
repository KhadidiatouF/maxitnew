<?php

namespace App\Service;

use App\Core\App;
use App\Repository\SecurityRepository;

class SecurityService
{
    private SecurityRepository $securityRepository;


    public function __construct()
    {
        $this->securityRepository = App::getDependencie('securityRepository');
    }

    public function seConnecter($login, $mdp)
    {
        $user = $this->securityRepository->connexion($login);

        if (!$user) {
            return null;
        }

        if ($mdp === $user->getMdp()) {
            return $user;
        } else {
            return null;
        }
    }
}
