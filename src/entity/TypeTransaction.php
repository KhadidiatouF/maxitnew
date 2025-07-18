<?php
namespace App\Entity;

enum TypeTransaction: string{
    case DEPOT="Depot";
    case RETRAIT="Retrait";
    case PAIEMENT="Paiement";
}