<?php
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
$loginmdp= $_SESSION['loginMdp'] ?? [];
unset($_SESSION['errors'], $_SESSION['old'], $_SESSION['loginMdp']);
?>
<!DOCTYPE html>
<html lang="fr">

    

    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden  max-w-9xl w-full h-[100vh] ">
        <div class="w-1/2 h-[50rem] p-[10rem] flex flex-col justify-center">

           <form action="/page" method="post">
            
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Connexion</h2>
                        <?php if (!empty($loginmdp)): ?>
                            <span class="text-red-500 text-sm font-bold"><?= $loginmdp ?></span>
                        <?php endif; ?>
                    <div class="mb-6">

                        <label for="phone" class="text-black text-sm font-bold">Login</label>
                        <div class="relative">
                            <input type="text" id="login" name="login"  placeholder="Entrer votre login" class="w-full pl-4 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                <?php if (!empty($errors['login'])): ?>
                                    <span class="text-red-500 text-sm font-bold"><?= $errors['login'] ?></span>
                                <?php endif; ?>
                            <span class="absolute inset-y-0 right-0 pr-4 flex items-center text-orange-500">
                               <i class="fa-solid fa-phone"></i>
                            </span>
                                 
                        </div>
                    </div>
                      <div class="mb-6">
                        <label for="mdp" class="text-black text-sm font-bold">Mot de passe</label>
                        <div class="relative">
                            <input type="password" id="mdp" name="mdp"    placeholder="Entrer votre mot de passe" class="w-full pl-4 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                <?php if (!empty($errors['mdp'])): ?>
                                    <span class="text-red-500 text-sm font-bold"><?= $errors['mdp'] ?></span>
                                <?php endif; ?>
                            <span class="absolute inset-y-0 right-0 pr-4 flex items-center text-orange-500">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                                 
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Connexion
                    </button>
                    <p class="text-center text-gray-600 mt-6">
                        Vous n'avez pas de compte? 
                        <a href="/inscription" class="text-indigo-400 hover:underline font-semibold">Inscription</a>
                    </p>
             </form>

             
        </div>
        <div class="w-1/2 bg-gray-50 flex items-center justify-center p-8">
            <img src="../../images/login.png" alt="Illustration" class="max-w-full h-auto"> 
        </div>
    </div>

</html>