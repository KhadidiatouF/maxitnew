<?php
namespace App\Entity;

use App\Core\Abstract\AbstractEntity;

class User extends AbstractEntity{
    private int $id; 
    private string $nom;
    private string $prenom;
    private string $numerocarte;
    private string $photorecto;
    private string $photoverso;
    private string $login;
    private string $mdp;
    private array $numeros;
    private array $comptes;
    private TypeUser $typeUser;

    public function __construct($id=0, $nom='', $prenom='', $numerocarte='', $photorecto='', $photoverso='', $login='', $mdp=''){
      $this->id=$id;   
      $this->nom=$nom;   
      $this->prenom=$prenom;   
      $this->numerocarte=$numerocarte;   
      $this->photorecto=$photorecto;   
      $this->photoverso=$photoverso;   
      $this->login=$login;   
      $this->mdp=$mdp;   
      $this->numeros=[];   
      $this->comptes=[];  
      $this->typeUser=new TypeUser(); 

    }


    public static function toObject($data):static{

        $user =  new self(
           (int) $data ['id'],
          $data['nom'],
          $data['prenom'],
          $data['numerocarte'],
          $data['photorecto'],
          $data['photoverso'],
          $data['login'],
          $data['mdp'],

        );

        // $user->numeros = $data['numeros'];
        // $user->comptes= array_map(fn($compte)=>Compte::toObject($compte), $data['compte'] );

        return $user;


    }

    public function toArray():array{
        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'numeroCarte'=>$this->numerocarte,
            'photorecto'=>$this->photorecto,
            'photoverso'=>$this->photoverso,
            'login'=>$this->login,
            'mdp'=>$this->mdp,
            'typeUser'=>$this->typeUser->toArray(),
            'numeros'=>$this->numeros,
            'comptes'=>array_map(fn($compte)=>$compte->toArray(),$this->comptes)

        ];

    }


  
    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

   
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

   
    public function getPrenom()
    {
        return $this->prenom;
    }

   
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of numeroCarte
     */ 
    public function getNumeroCarte()
    {
        return $this->numerocarte;
    }

  
    public function setNumeroCarte($numeroCarte)
    {
        $this->numerocarte = $numeroCarte;

        return $this;
    }

   
    public function getPhotoRecto()
    {
        return $this->photorecto;
    }

   
    public function setPhotoRecto($photorecto)
    {
        $this->photorecto = $photorecto;

        return $this;
    }

  
    public function getPhotoVerso()
    {
        return $this->photoverso;
    }

 
    public function setPhotoVerso($photoverso)
    {
        $this->photoverso = $photoverso;

        return $this;
    }


  
    public function getNumeros()
    {
        return $this->numeros;
    }

  
    public function addNumeros($numeros)
    {
        $this->numeros[]= $numeros;

        return $this;
    } 

    public function getComptes()
    {
        return $this->comptes;
    }

 
    public function addComptes($comptes)
    {
        $this->comptes []= $comptes;

        return $this;
    }

  
    public function getTypeUser()
    {
        return $this->typeUser;
    }

 
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}