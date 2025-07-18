<?php

use App\Controller\ClientController;
use App\Controller\SecurityController;
use App\Controller\TransactionController;

return $routes=[

    '/'=>['controller'=>SecurityController::class,'action'=>'create', 'middlewares'=>[]],

    '/inscription'=>['controller'=>SecurityController::class,'action'=>'index', 'middlewares'=>[]],

    '/formulaire'=>['controller'=>SecurityController::class,'action'=>'inscription', 'middlewares'=>[]],


    '/page'=>['controller'=>SecurityController::class,'action'=>'login'],

    '/accueilClient'=>['controller'=>TransactionController::class,'action'=>'dixDernierTransac'],

    "/deconnexion"=>["controller"=>SecurityController::class, "action"=>"deconnexion"],

    "/creerCompte"=>["controller"=>ClientController::class, "action"=>"index"],

    

];