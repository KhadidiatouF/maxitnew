<?php
namespace App\Entity;

use App\Entity\Compte;

class Transaction {

    private int $id;
    private \DateTime $date;
    private string $montant;
    private TypeTransaction $typeTransaction;
    private StatutTransaction $statutTransaction;
    private Compte $compte;

    public function __construct($id=0, $montant='', TypeTransaction $typeTransaction= TypeTransaction::DEPOT, StatutTransaction $statutTransaction = StatutTransaction::ENATTENTE)
    {
        $this->id=$id;
        $this->date= new \DateTime();
        $this->montant=$montant;
        $this->typeTransaction = $typeTransaction;
        $this->statutTransaction = $statutTransaction;
        $this->compte=new Compte();

    }


      public static function toObject($data):static{

        $transaction =  new self(
           $data ['id'],
           $data['montant'],
           $data['typeTransaction'],
           $data['statutTransaction'],
         
        );
        $transaction->date=$data['date'];
        $transaction->compte= Compte::toObject($data['compte']);

        return $transaction;


    }

    public function toArray():array{
        return [
            'id'=>$this->id,
            'montant'=>$this->montant,
            'typeTransaction'=>$this->typeTransaction,
            'statutTransaction'=>$this->statutTransaction,
            'date'=>$this->date,
            'compte'=>$this->compte->toArray(),

        ];

    }






    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of typeTransaction
     */ 
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    /**
     * Set the value of typeTransaction
     *
     * @return  self
     */ 
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;

        return $this;
    }

    /**
     * Get the value of statutTransaction
     */ 
    public function getStatutTransaction()
    {
        return $this->statutTransaction;
    }

    /**
     * Set the value of statutTransaction
     *
     * @return  self
     */ 
    public function setStatutTransaction($statutTransaction)
    {
        $this->statutTransaction = $statutTransaction;

        return $this;
    }

    /**
     * Get the value of compte
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set the value of compte
     *
     * @return  self
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }
}