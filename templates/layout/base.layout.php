<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAXIT SA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #ff6b35 0%, #ff8f00 100%);
        }
        .card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .balance-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }
        .dotted-pattern {
            background-image: radial-gradient(circle, #ddd 1px, transparent 1px);
            background-size: 10px 10px;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="bg-white px-4 py-3 flex items-center justify-between shadow-sm">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 gradient-bg rounded-full flex items-center justify-center">
                <span class="text-white font-bold text-sm">M</span>
            </div>
            <div>
                <h1 class="text-lg font-bold text-gray-900">MAXIT SA</h1>
            </div>
        </div>
        <div class="flex items-center justify-between space-x-4">
           
            <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                <div class="w-4 h-4 bg-gray-400 rounded-full"></div>
            </div>
            <div class="text-right">
                <p class="text-sm font-medium text-gray-900"><?php echo strtoupper($_SESSION['user']->getPrenom()).' '.strtoupper($_SESSION['user']->getNom())?></p>
                <p class="text-xs text-gray-500"></p>
            </div>
            <div class="w-8 h-8 bg-gray-900 rounded-full flex items-center justify-center">
                <span class="text-white font-bold text-sm">KF</span>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-64 bg-white h-screen shadow-lg">
            <nav class="pt-6">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="font-medium">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="font-medium">Comptes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                            <span class="font-medium">Paiement</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-6 py-3 text-orange-600 bg-orange-50 border-r-3 border-orange-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            <span class="font-medium">Transactions</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="absolute bottom-6 left-6">
                <a href="/deconnexion" class="flex items-center space-x-3 text-gray-700 hover:text-orange-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <span class="font-medium">Déconnexion</span>
                </a>
            </div>
        </div>

        <?php echo $containeForLayout; ?>
        
    </div>
</body>
</html>