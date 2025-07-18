<?php
namespace App\Entity;

class TypeUser {
    private int $id;
    private string $libelle;
    private array $users;

    public function __construct($id=0, $libelle='')
    {
        $this->id= $id;
        $this->libelle= $libelle;
        $this->users=[];
    }

     public static function toObject($data):static{

        $typeUser =  new self(
          (int) $data ['id'],
           $data['libelle'],
       
        );

        $typeUser->users= array_map(fn($user)=>User::toObject($user), $data['user'] );

        return $typeUser;
    }

    public function toArray():array{
        return [
            'id'=>$this->id,
            'libelle'=>$this->libelle,
            'users'=>array_map(fn($user)=>$user->toArray(),$this->users)

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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of users
     */ 
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set the value of users
     *
     * @return  self
     */ 
    public function addUsers($users)
    {
        $this->users[] = $users;

        return $this;
    }
}