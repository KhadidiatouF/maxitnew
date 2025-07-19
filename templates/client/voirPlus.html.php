<!DOCTYPE html>
<html lang="fr">
        <div class="flex-1 p-6 bg-gray-50">
            <div class="bg-black flex items-center justify-between mb-4 rounded-lg shadow-md p-4 w-[100%]">
                <div>
                    <h2 class="text-xl font-semibold mb-4 text-white">SOLDE DU COMPTE</h2>
                    <div class="items-center">                           
                        <p class="text-2xl font-bold text-green-600">
                            <i id="toggleSolde" class="fa-solid fa-eye-slash text-white cursor-pointer mr-2"></i> 
                            <span id="montantSolde"><?php echo $_SESSION['solde']['solde']  ;?>  CFA</span>
                        </p>

                    </div>
                   
                </div>
                  

                    <div class="bg-black rounded-lg px-3 py-1">
                        <span class="text-sm">Principal</span>
                      
                        <img src="../../images/V.png" class="w-[15rem] h-[10rem]" alt="">

                    </div>
            </div>
            <!-- <div class="balance-card bg-black rounded-2xl p-6 mb-6 text-white relative overflow-hidden">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold">SOLDE</h2>
                        <div class="flex items-center space-x-2 mt-2">
                            <div class="w-6 h-6 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                               <i class="fa-solid fa-eye-slash"></i>
                            </div>
                            <span class="text-sm font-medium">150 300 CFA</span>
                        </div>
                    </div>
                    <div class="bg-black  rounded-lg px-3 py-1">
                        <span class="text-sm">Principal</span>
                      
                        <img src="../../images/V.png" class="w-[15rem] h-[5rem]" alt="">

                    </div>
                </div>
                
             
            </div> -->

            <!-- Action Cards -->
            <div class="grid grid-cols-3 gap-4 mb-8">
                <div class="bg-white rounded-2xl p-6 card-shadow">

                    <div class="flex justify-between">
                        <div class="h-16 rounded-lg mb-4 flex items-center justify-center">
                            <img src="../../images/b.png" class="w-[10rem] h-[15rem] mt-[4rem] ml-0 p-9 z-0" alt="">
                            
                        </div>

                        <div>
                            <h3 class="font-bold text-xl  text-black mb-1">Mes</h3>
                            <p class="text-xl font-bold  text-black">transactions</p>
                        </div>
                    </div>
                  
                    
                    <div class=" flex justify-end ">
                        <div class="w-12 h-12 cursor-pointer gradient-bg rounded-full flex items-center justify-center">
                           <i class="fa-solid fa-money-bill-transfer text-white"></i>
                        </div>
                    </div>
                     
                 
                </div>

                <div class="bg-white rounded-2xl p-6 card-shadow">
                    <div class="flex justify-between">
                        <div class="h-16 rounded-lg mb-4 flex items-center justify-center">
                            <img src="../../images/b.png" class="w-[10rem] h-[15rem] mt-[4rem] ml-0 p-9 z-0" alt="">
                            
                        </div>

                        <div>
                            <h3 class="font-bold text-xl  text-black mb-1">Créer</h3>
                            <p class="text-xl font-bold  text-black">compte Secondaire</p>
                        </div>
                    </div>
                  
                    
                    <div class=" flex justify-end ">
                        <div class="w-12 h-12 cursor-pointer gradient-bg rounded-full flex items-center justify-center">
                           <a href="/creerCompte"><i class="fa-solid fa-circle-plus text-white"></i></a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 card-shadow">
                    <div class="flex justify-between">
                        <div class="h-16 rounded-lg mb-4 flex items-center justify-center">
                            <img src="../../images/b.png" class="w-[10rem] h-[15rem] mt-[4rem]  p-9 z-0" alt="">
                            
                        </div>

                        <div>
                            <h3 class="font-bold text-xl  text-black mb-1">Changer</h3>
                            <p class="text-xl font-bold  text-black">Compte</p>
                        </div>
                    </div>
                  
                    
                    <div class=" flex justify-end ">
                        <div class="w-12 h-12 cursor-pointer gradient-bg rounded-full flex items-center justify-center">
                           <i class="fa-solid fa-rotate text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Filters -->
                <div class="flex items-center space-x-4 mb-6">
                    <div class="relative">
                        <select class="bg-white border border-gray-300 rounded-lg px-4 py-2 pr-8 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option>Filtrer par date</option>
                        </select>
                        <svg class="absolute right-2 top-2.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                    
                    <div class="relative">
                        <select class="bg-white border border-gray-300 rounded-lg px-4 py-2 pr-8 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option>Filtrer par type</option>
                        </select>
                        <svg class="absolute right-2 top-2.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="flex items-center space-x-2 ml-auto">
                        <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <div class="flex space-x-1">
                            <button class="w-8 h-8 bg-gray-200 rounded text-sm text-gray-600">1</button>
                            <button class="w-8 h-8 bg-orange-500 rounded text-sm text-white">2</button>
                            <button class="w-8 h-8 bg-gray-200 rounded text-sm text-gray-600">3</button>
                            <button class="w-8 h-8 bg-gray-200 rounded text-sm text-gray-600">4</button>
                        </div>
                        <button class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-gray-800">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>

            <div class="bg-white rounded-2xl p-6 card-shadow">

                <div class="overflow-x-auto">

                    <table class="min-w-full border border-orange-400 rounded-2xl text-sm">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left">ID</th>
                                <th class="px-4 py-3 text-left">Date</th>
                                <th class="px-4 py-3 text-left">Type</th>
                                <th class="px-4 py-3 text-left">Montant</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-orange-100">
                        <?php  foreach ($data as $key => $value): ?>
                                
                                <tr>
                                    <td class="px-4 py-10"><?= $value['id'] ?? '' ?></td>
                                    <td class="px-4 py-10 text-orange-600"><?= $value['date'] ?? '' ?></td>
                                    <td class="px-4 py-10"><?= $value['type'] ?? '' ?></td>
                                    <td class="px-4 py-10 font-semibold <?= ($value['type'] ?? '') === 'Retrait' ? 'text-red-600' : 'text-green-600' ?>">
                                        <?= ($value['type'] ?? '') === 'Retrait' ? '-' : '+' ?>
                                        <?= $value['montant'] ?? '' ?> CFA
                                    </td>
                                </tr>
                        <?php endforeach ; ?>

                        </tbody>
                    </table>

                    

                </div>
            </div>

        </div>

       <script>
            const icon = document.getElementById("toggleSolde");
            const montant = document.getElementById("montantSolde");

            let estVisible = true;
            const vraiMontant = "200.000 CFA";

            icon.addEventListener("click", function () {
                estVisible = !estVisible;

                if (estVisible) {
                    montant.textContent = vraiMontant;
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                } else {
                    montant.textContent = "•••••• CFA";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
            });
        </script>

</body>
</html>