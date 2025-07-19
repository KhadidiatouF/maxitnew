<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
use App\Core\FileUpload;
use App\Core\App;
use App\Core\Middlewares\CryptPassword;
use App\Core\Validator;
use App\Service\CompteService;
use App\Service\SecurityService;
use App\Service\UserCompteService;

class SecurityController extends AbstractController{
    private SecurityService $securityService;
    private UserCompteService $userCompteService;
    private CompteService $compteService;


    public function __construct()
    {
        parent::__construct();
        $this->layout= 'security.layout.php';
        $this->securityService= App::getDependencie('securityService');
        $this->userCompteService= App::getDependencie('userCompteService');
        $this->compteService= App::getDependencie('compteService');


    }
    
    public function login() {

     Validator::reset();

        $login = $_POST['login'] ?? '';
        $mdp = $_POST['mdp'] ?? '';
        $user = $this->securityService->seConnecter($login, $mdp);

           Validator::isEmpty($login, 'login', 'Le login est requis');
           Validator::isEmpty($mdp, 'mdp', 'Le mot de passe est requis');

       if (!Validator::isValid()) {
            $this->session->set('errors',Validator::getErrors());
            $this->renderHtml('security/connexion.html.php');
            return;
        }

        if ($user) {
           $activePage = $activePage ?? 'accueil';
           $solde = $this->compteService->afficheSolde($user->getID());
           $this->session->set('solde',$solde );

           $this->session->set('user',$user );
           $this->session->set('idcompte', $this->userCompteService->getIdComptePrincipale($user->getId()));
           $this->session->set('iduser', $this->compteService->creationCompteSecondaire($user->getId()));

           header("Location: ". URL."accueilClient");  
        }else {
           $this->session->set('loginMdp','Login ou mot de passe incorrect ' );
            header("Location: ". URL);  

        }
    }

    public function inscription(){

        Validator::reset();

        $crypteur = new CryptPassword();
        $crypteur();

        

        $nom = $_POST['nom'] ?? '';
        $prenom = $_POST['prenom'] ?? '';
        $numeroTelephone = $_POST['numero'] ?? '';
        $numeroCarte = $_POST['carte_identite'] ?? '';
        $login = $_POST['login'] ?? '';
        $mdp = $_POST['mdp'] ?? '';
        // var_dump($mdp);die;

       
        Validator::isEmpty($nom, 'nom', 'Le nom est requis');
        Validator::isEmpty($prenom, 'prenom', 'Le prénom est requis');
        Validator::isEmpty($numeroTelephone, 'numerotelephone', 'Le numéro de tel est requis');
        Validator::isEmpty($numeroCarte, 'carte_identite', 'Le numero de cin est requis');
        Validator::isEmpty($login, 'login', 'Le login est requis');
        Validator::isEmpty($mdp, 'mdp', 'Mot de passe requis');

        Validator::isValidSenegalPhone($numeroTelephone, 'numero', 'Numéro invalide');
        Validator::isValidCni($numeroCarte, 'carte_identite', 'Format de carte invalide');

        Validator::isFileUploaded($_FILES['photo_recto'], 'photo_recto', 'Photo recto requise');
        Validator::isFileUploaded($_FILES['photo_verso'], 'photo_verso', 'Photo verso requise');

        if (!Validator::isValid()) {
            $this->session->set('errors',Validator::getErrors());
            $this->renderHtml('security/inscription.html.php');
            return;
        }

       

        $uploader = new FileUpload();
        $photoRecto = $uploader->upload($_FILES['photo_recto']);
        $photoVerso = $uploader->upload($_FILES['photo_verso']);

        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'numerotelephone' => $numeroTelephone,
            'login' => $login,
            'mdp' => $mdp,
            'numerocarte' => $numeroCarte,
            'photorecto' => $photoRecto,
            'photoverso' => $photoVerso
        ];

            $estInscrit = $this->userCompteService->inscriptionService($data);

        if ($estInscrit) {

                $smsService = App::getDependencie('smsService');
                $message = "Bienvenue sur MAXITSA, $prenom ! Votre compte est bien créé.";
                $smsService->envoyerSms($numeroTelephone, $message);
            header("Location: " . URL);
            exit;
        } else {
            $this->session->set('errors','Login ou mot de passe incorrect ' );
            $this->renderHtml('security/inscription.html.php');
        }

    }
     
    

    public function deconnexion(){
        
        header("Location: ".URL);   
    }


    public function create(){
        $this->renderHtml('security/connexion.html.php');
    }

    public function index(){
        $this->renderHtml('security/inscription.html.php');  
    }

    public function show(){

    }

}