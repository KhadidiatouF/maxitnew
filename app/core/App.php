<?php
namespace App\Core;

use App\Repository\CompteRepository;
use App\Repository\SecurityRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserCompteRepository;
use App\Repository\UserRepository;
use App\Service\CompteService;
use App\Service\SecurityService;
use App\Service\SmsService;
use App\Service\TransactionService;
use App\Service\UserCompteService;
use Symfony\Component\Yaml\Yaml;

class App{
        private static $dependences = [];

        private array $services=[];


        public function __construct()
        {
            $this->loadService();
        }

        public function loadService(){
            $config = Yaml::parseFile(__DIR__. '/../config/services.yml');
            foreach ($config['services'] as $key => $class) {
                $this->services[$key] = new $class();
            }
        }

        public function get(string $name){
            return $this->services[$name] ?? null;
        }
        
        public static function init(){
            self::$dependences = [
                'session'=> Session::getInstance(),
                'router' => new Router(),
                'database' => Database::getInstance(),
                'securityRepository'=>SecurityRepository::getInstance(),


            ];
            self::registerDependency('compteRepository', CompteRepository::class);
            self::registerDependency('userRepository', UserRepository::class);
            self::registerDependency('userCompteRepository', UserCompteRepository::class);
            self::registerDependency('userCompteService', UserCompteService::class);
            self::registerDependency('compteService', CompteService::class);
            self::registerDependency('securityService', SecurityService::class);
            self::registerDependency('transactionRepository', TransactionRepository::class);
            self::registerDependency('transactionService' , TransactionService::class);
            self::registerDependency('smsService' , SmsService::class);





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


