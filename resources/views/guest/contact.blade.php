<!DOCTYPE html>
<html lang="fr" class="dark">

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

<body class="font-sans bg-white dark:bg-gray-900">
    @include('layouts.navbar')
    @include('layouts.panier')
<!-- Contact Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Nous Contacter</h2>
            <form class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nom</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600">Envoyer</button>
            </form>
        </div>
    </section>
    @include('layouts.footer')

</body>







</html>