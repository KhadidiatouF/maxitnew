<?php
namespace App\Entity;

use App\Core\Abstract\AbstractEntity;

class Compte extends AbstractEntity {

    private int $id;
    private string $numero;
    private float $solde;
    private string $date_creation;
    private TypeCompte $typeCompte;
    private User $user;
    private array $transactions;

    public function __construct($id=0, $numero='', $solde='',$date_creation='',TypeCompte $typeCompte =TypeCompte::PRINCIPAL)
    {
        $this->id=$id;
        $this->numero=$numero;
        $this->solde=$solde;
        $this->date_creation=$date_creation;
        $this->typeCompte = $typeCompte;
        $this->user= new User();
        $this->transactions=[];

    }



    public static function toObject($data):static{

        $compte =  new self(
           $data ['id'],
           $data['numero'],
           $data['solde'],
           $data['date_creation'],
           $data['typeCompte'],
        );

        $compte->user= User::toObject($data['user']);
        $compte->transactions= array_map(fn($transaction)=>Transaction::toObject($transaction), $data['transaction'] );


        return $compte;
    }

    public function toArray():array{
        return [
            'id'=>$this->id,
            'numero'=>$this->numero,
            'solde'=>$this->solde,
            'date_creation'=>$this->date_creation,
            'typeCompte'=>$this->typeCompte,
            'user'=>$this->user->toArray(),
            'transactions'=>array_map(fn($transaction)=>$transaction->toArray(),$this->transactions)

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
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get the value of typeCompte
     */ 
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    /**
     * Set the value of typeCompte
     *
     * @return  self
     */ 
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of transaction
     */ 
    public function getTransaction()
    {
        return $this->transactions;
    }

    /**
     * Set the value of transaction
     *
     * @return  self
     */ 
    public function addTransaction($transaction)
    {
        $this->transactions[] = $transaction;

        return $this;
    }
}