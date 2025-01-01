{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
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
            <h2 class="text-3xl font-bold text-center text-orange-500">Confirmation de mot de passe</h2>

            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded">
                        {{ __('Confirm') }}
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
