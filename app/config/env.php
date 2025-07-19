<?php


use Dotenv\Dotenv;

    require_once '../vendor/autoload.php';



    $dotenv= Dotenv::createImmutable(__DIR__. '/../../');
    $dotenv->load();
    $url=$_ENV['WEB_ROUTE'];

        define('DSN', $_ENV['dsn']);
        define('USER', $_ENV['DB_USER']);
        define('PASSWORD', $_ENV['DB_PASSWORD']);
        define('URL', $_ENV['WEB_ROUTE']);

        define('SID', $_ENV['TWILIO_SID']);
        define('TOKEN', $_ENV['TWILIO_TOKEN']);
        define('PHONE', $_ENV['TWILIO_PHONE']);
 

    



