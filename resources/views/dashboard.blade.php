<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Bike Essentials</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">
    <!-- Navigation -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center p-5">
            <a href="#" class="text-2xl font-bold text-orange-500 flex items-center">
                <img src="images/bLogo.png" alt="Bike Essentials Logo" class="inline w-20"> 
                <span>Bike Essentials</span>
            </a>
            <button id="menu-toggle" class="lg:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <nav id="menu" class="hidden lg:flex lg:items-center lg:space-x-6">
                <ul class="flex flex-col lg:flex-row lg:space-x-6 space-y-2 lg:space-y-0">
                    <li><a href="#" class="text-gray-700 hover:text-orange-500">Accueil</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-orange-500">Produits</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-orange-500">Contact</a></li>
                </ul>
                <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-4 space-y-2 lg:space-y-0 mt-4 lg:mt-0">
                    <a href="#" class="text-gray-700 hover:text-orange-500">Se Connecter</a>
                    <a href="#" class="ml-4 text-gray-700 hover:text-orange-500">Panier</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="flex justify-center items-center min-h-screen pt-20">
        <div class="w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl leading-tight">Dashboard</h2>
                    <p class="py-6">{{ __("You're logged in!") }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-100 text-center py-4">
        <p>&copy; 2024 Bike Essentials. Tous droits réservés.</p>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html> --}}
