<?php

namespace App\config;

use App\Core\middlewares\Auth;
use App\Core\Middlewares\CryptPassword;

    $middlewares=[
        'auth'=>Auth::class,
        'cryptPassword'=>CryptPassword::class
    ];

     function getMiddlewares($middleware){
        global $middlewares;
        if (array_key_exists($middleware, $middlewares)) {
            return $middlewares=[$middleware];
        }

        throw new \Exception ('Middlewares existe déja');

    }