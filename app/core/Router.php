<?php
namespace App\Core;

class Router{

    public static function resolver(){
        $URI= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';

        $route = require_once '../routes/route.web.php';

        if (array_key_exists($URI,$route)) {

            $controllerName= $route[$URI]['controller'];
            $actionName= $route[$URI]['action'];

            $controller = new $controllerName();
            $controller->$actionName();
        }
    }

}