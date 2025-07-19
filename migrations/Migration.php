<?php
namespace App\Migrations;

use App\Core\App;

class Migration{

    private \PDO $pdo;
    private string $dbname;

    public function __construct()
    {
        App::init();
        $this->pdo = App::getDependencie('database')->getConnexion();

        $this->dbname= $_ENV['DB_NAME'];
    }

    public function run(){
        $this->pdo->exec("CREATE DATABASE {$this->dbname}");
        $this->pdo= new \PDO("pgsql:host=localhost;port=5432;dbname={$_ENV['DB_NAME']}", USER, PASSWORD);

        $queries=[
            "CREATE  type typeCompte as enum('principal','secondaire');",

            "CREATE type typeTransaction as enum('paiement','depot','retrait');",

            "CREATE TABLE typeUser(
            id SERIAL PRIMARY KEY,
            libelle VARCHAR(30)
            );",

           "CREATE TABLE utilisateur (
            id SERIAL PRIMARY KEY,
            nom VARCHAR(250),
            prenom VARCHAR(250),
            login VARCHAR(250) NOT NULL,
            mdp  VARCHAR(250) NOT NULL,
            numerocarte  VARCHAR(50) NOT NULL,
            photorecto  VARCHAR(40) NOT NULL,
            photoverso  VARCHAR(40) NOT NULL,
            idtypeuser int,
            Foreign Key (idtypeUser) REFERENCES typeuser(id)
            );",


            "CREATE TABLE compte(
            id SERIAL PRIMARY KEY ,
            numero INTEGER NOT NULL,
            solde FLOAT NULL,
            date_creation DATE NOT NULL,
            type typeCompte NOT NULL ,
            idUser int,
            Foreign Key (idUser) REFERENCES utilisateur(id)
            );",

            "CREATE TABLE  numeros(
            id SERIAL PRIMARY KEY ,
            numero integer NOT NULL,
            idUser int,
            Foreign Key (idUser) REFERENCES utilisateur (id)
            );",


            "CREATE TABLE transaction(
            id SERIAL PRIMARY KEY,
            montant FLOAT NOT NULL,
            date DATE ,
            type typeTransaction NOT NULL ,
            idCompte int ,
            Foreign Key (idCompte) REFERENCES compte(id)
            );"
          
        ];

        foreach ($queries as $query) {
            $this->pdo->exec($query);
        }
    }
}