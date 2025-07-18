
<?php
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errors'], $_SESSION['old']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen w-full">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden max-w-9xl w-full h-[100vh]">
        <div></div>
        <div class="w-1/2 p-[10rem] flex flex-col justify-center">

            <h2 class="text-3xl font-bold text-gray-800 mb-8">Inscription</h2>
            <form action="/formulaire" method="POST" class="space-y-4 flex-grow pr-2" enctype="multipart/form-data"> 
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                        <input type="text" id="nom" name="nom"  placeholder="Entrer votre nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                          <?php if (!empty($errors['nom'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['nom'] ?></span>
                            <?php endif; ?>
                          
                    </div>
                    <div class="w-1/2">
                        <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prénom</label>
                        <input type="text" id="prenom" name="prenom"  placeholder="Entrer votre prénom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                         <?php if (!empty($errors['prenom'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['prenom'] ?></span>
                            <?php endif; ?>
                          
                         
                    </div>
                </div>
                <div>
                    <label for="telephone" class="block text-gray-700 text-sm font-bold mb-2">Numéro de Téléphone</label>
                    <div class="relative">
                        <input type="tel" id="telephone" name="numero" placeholder="Entrer votre numéro de téléphone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-10">
                             <?php if (!empty($errors['numero'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['numero'] ?></span>
                            <?php endif; ?>

                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-orange-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                    </div>
                </div>
             
                    <div>
                        <label for="carte_identite" class="block text-gray-700 text-sm font-bold mb-2">Numéro Carte d'identité</label>
                        <input type="text" id="carte_identite" name="carte_identite" placeholder="Entrer votre numero de carte national d'identité" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                 <?php if (!empty($errors['carte_identite'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['carte_identite'] ?></span>
                            <?php endif; ?>
                    </div>

                    <div>
                        <label for="adresse" class="block text-gray-700 text-sm font-bold mb-2">Login</label>
                        <input type="text" id="login" name="login"  placeholder="Entrer votre login" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">           
                            <?php if (!empty($errors['login'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['login'] ?></span>
                            <?php endif; ?>
                    </div> 

                    <div>
                        <label for="adresse" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp"  placeholder="Entrer votre mot de passe" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                                              
                            <?php if (!empty($errors['mdp'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['mdp'] ?></span>
                            <?php endif; ?>
                    </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="photo_recto" class="block text-gray-700 text-sm font-bold mb-2">Photo CIN Recto</label>
                        <div class="relative">
                            <input type="file" id="photo_recto" accept="images/*" name="photo_recto" placeholder="Télécharger fichier" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-10">
                               <?php if (!empty($errors['photo_recto'])): ?>
                                <span class="text-red-500 text-sm font-bold"><?= $errors['photo_recto'] ?></span>
                                <?php endif; ?>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-500">
                               <i class="fa-solid fa-image"></i>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <label for="photo_verso" class="block text-gray-700 text-sm font-bold mb-2">Photo CIN Verso</label>
                        <div class="relative">
                            <input type="file" id="photo_verso" name="photo_verso" accept="images/*"  placeholder="Télécharger fichier" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-10">
                                <?php if (!empty($errors['photo_verso'])): ?>
                                    <span class="text-red-500 text-sm font-bold"><?= $errors['photo_verso'] ?></span>
                               <?php endif; ?>

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-500">
                               <i class="fa-solid fa-image"></i>
                            </div>
                        </div>
                    </div>

                   
                </div>
              
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline w-full">
                    Inscription
                </button>
            </form>
            <p class="text-center text-gray-600 text-xs mt-4">
                Vous avez déjà un compte?
                <a href="/" class="text-indigo-600 hover:underline">Connexion</a>
            </p>
        </div>
        <div class="w-1/2 bg-gray-50 flex items-center justify-center p-8">
            <img src="../../images/inscription.png" alt="Illustration" class="max-w-full h-auto max-h-full object-contain">
        </div>
    </div>
</body>
</html>