<?php
namespace App\Entity;



enum StatutTransaction: string{
    case REUSSI="reussi";
    case ENATTENTE="en attente";
    case ECHEC="echec";
    case ANNULER="annuler";
}