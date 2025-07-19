<!DOCTYPE html>
<html lang="fr">
       <main class="flex-1 p-6">
            <div class="bg-white rounded-xl shadow-sm p-8 max-w-lg mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mb-8 text-center">Transfert d'argent</h2>
                
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Entrer le numero</label>
                        <div class="relative">
                            <input 
                                type="text" 
                                placeholder="Numero"
                                class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none text-gray-700"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="fas fa-phone text-orange-500"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Entrer le montant</label>
                        <div class="flex space-x-2">
                            <input 
                                type="text" 
                                placeholder="Montant"
                                class="flex-1 px-4 py-3 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none text-gray-700"
                            >
                            <div class="px-4 py-3 bg-gray-100 border border-gray-300 rounded-md text-gray-700">
                                CFA
                            </div>
                        </div>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-200 mt-8">
                        Envoyer
                    </button>
                </form>
            </div>
       </main>
</body>
</html>