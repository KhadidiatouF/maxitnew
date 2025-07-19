<?php

namespace App\Seeders;

use App\Core\App;

class Seeder
{
    private \PDO $pdo;

    public function __construct()
    {
        App::init();
        $this->pdo = App::getDependencie('database')->getConnexion();
    }

    public function run()
    {
        $this->pdo->exec("
            TRUNCATE transaction, numeros, compte, utilisateur, typeuser RESTART IDENTITY CASCADE;
        ");

        $this->pdo->exec("INSERT INTO typeuser (libelle) VALUES ('client'), ('commercial');");

        $stmt1 = $this->pdo->prepare("INSERT INTO utilisateur (nom, prenom, login, mdp, numerocarte, photorecto, photoverso, idtypeuser)
            VALUES ('Fall', 'Khadija', 'testkhady', :mdp, '1239123456781', 'recto.jpg', 'verso.jpg', 1) RETURNING id;");
        $stmt1->execute(['mdp' => password_hash('test', PASSWORD_DEFAULT)]);
        $user1 = $stmt1->fetch(\PDO::FETCH_ASSOC)['id'];

        $stmt2 = $this->pdo->prepare("INSERT INTO utilisateur (nom, prenom, login, mdp, numerocarte, photorecto, photoverso, idtypeuser)
            VALUES ('Diallo', 'Mamadou', 'mamadou', :mdp, '1239123456732', 'recto2.jpg', 'verso2.jpg', 2) RETURNING id;");
        $stmt2->execute(['mdp' => password_hash('mamadou', PASSWORD_DEFAULT)]);
        $user2 = $stmt2->fetch(\PDO::FETCH_ASSOC)['id'];

        $this->pdo->exec("INSERT INTO compte (numero, solde, date_creation, type, iduser)
            VALUES 
            (771234567, 500000, NOW(), 'principal', $user1),
            (784318598, 200000, NOW(), 'principal', $user2);");

        $this->pdo->exec("INSERT INTO numeros (numero, iduser)
            VALUES 
            (771234567, $user1),
            (780987654, $user2);");

        $this->pdo->exec("INSERT INTO transaction (montant, date, type, idcompte)
            VALUES 
            (25000, NOW(), 'retrait', 1),
            (5000, NOW(), 'depot', 2);");

        echo "Données initiales insérées avec succès !\n";
    }
}
