<?php
namespace App\Core;

use App\Repository\CompteRepository;
use App\Repository\SecurityRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserCompteRepository;
use App\Repository\UserRepository;
use App\Service\CompteService;
use App\Service\SecurityService;
use App\Service\TransactionService;
use App\Service\UserCompteService;

class App{
        private static $dependences = [];
        
        public static function init(){
            self::$dependences = [
                'session'=> Session::getInstance(),
                'router' => new Router(),
                'database' => Database::getInstance(),
               
                'securityRepository'=>SecurityRepository::getInstance(),
                // 'transactionRepository'=> new TransactionRepository(),


            ];
            // self::$dependences['session']=Session::getInstance();
            self::registerDependency('compteRepository', CompteRepository::class);
            self::registerDependency('userRepository', UserRepository::class);
            self::registerDependency('userCompteRepository', UserCompteRepository::class);
            self::registerDependency('userCompteService', UserCompteService::class);
            self::registerDependency('compteService', CompteService::class);
            self::registerDependency('securityService', SecurityService::class);
            self::registerDependency('transactionRepository', TransactionRepository::class);
            self::registerDependency('transactionService' , TransactionService::class);
            // self::registerDependency('session', Session::class);




        }


        public static function getDependencie($name){
            if(array_key_exists($name, self::$dependences)){
                return self::$dependences[$name];
            }
            throw new \Exception("Dépendence introuvable: " . $name);
        }

        
        public static function registerDependency($key, $dependence){
            if(!array_key_exists($key, self::$dependences)){
                self::$dependences[$key] = new $dependence;
            }else {
                throw new \Exception("Dépendence déjà enregistrée: " . $key);
            }
        }
}


