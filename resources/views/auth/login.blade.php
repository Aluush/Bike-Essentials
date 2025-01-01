{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-3xl font-bold text-center text-orange-500">Se Connecter</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded p-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded p-2" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-orange-500 focus:ring-orange-500" name="remember">
                        <span class="ml-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-orange-500 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ml-3 bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
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

    <div class="flex justify-center items-center p-20 dark:bg-gray-900">
        <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg dark:bg-gray-800">
            <h2 class="text-3xl font-bold text-center text-orange-500 dark:text-orange-400">Se Connecter</h2>
    
            <x-auth-session-status :status="session('status')" />
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded p-2 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200" type="email"
                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 dark:text-red-400" />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded p-2 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200" type="password"
                        name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 dark:text-red-400" />
                </div>
    
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-400" name="remember">
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-orange-500 hover:underline dark:text-orange-400" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-primary-button class="ml-3 bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded dark:bg-orange-400 dark:hover:bg-orange-500">
                        {{ __('Log in') }}
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
