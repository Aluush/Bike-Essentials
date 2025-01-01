{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bike Essentials - Shop de Pièces de Rechange pour Vélos</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="shortcut icon" href="images/bLogo1.png" type="image/x-icon">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
        <style>
            nav {
                background-color: #ff6d18 !important;
            }
    
            /* Ombre et dégradé pour le bouton WhatsApp */
            .shadow-whatsapp {
                filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1)) drop-shadow(0 1px 3px rgba(0, 0, 0, 0.08));
            }
    
            .group:hover .group-hover\:opacity-100 {
                opacity: 1;
            }
    
            html {
                background-color: rgb(188, 188, 188) !important;
            }
    
            .hid {
                display: none;
            }
        </style>
    
    
    </head>
<body class="font-sans bg-gray-100">
    <!-- Navigation -->
    @include('layouts.navbar')
    @include('layouts.panier')

    <div class="flex justify-center items-center min-h-screen pt-20">
        <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-3xl font-bold text-center text-orange-500">Réinitialisation du mot de passe</h2>
            
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded p-2" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.footer')

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
