<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIPYalah - Profil Utilisateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Navigation -->
  <x-navigation>
  </x-navigation>

    <!-- Profile Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-40 relative">
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                    <div class="border-4 border-white rounded-full w-32 h-32 overflow-hidden">
                        <img 
                            src="{{ auth()->user()->profile_photo ?? '/default-avatar.png' }}" 
                            alt="Profile Picture" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            </div>

            <div class="pt-20 p-8">
                <form action="/profile/update" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                            <input 
                                type="text" 
                                id="firstname" 
                                name="firstname" 
                                value="{{ auth()->user()->firstname }}" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required
                            >
                        </div>
                        <div>
                            <label for="lastname" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                            <input 
                                type="text" 
                                id="lastname" 
                                name="lastname" 
                                value="{{ auth()->user()->lastname }}" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required
                            >
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ auth()->user()->email }}" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        >
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Numéro de téléphone</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="{{ auth()->user()->phone }}" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        >
                    </div>

                    <div>
                        <label for="account_type" class="block text-sm font-medium text-gray-700 mb-2">Type de Compte</label>
                        <select 
                            id="account_type" 
                            name="account_type" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        >
                            <option value="">Sélectionnez un type de compte</option>
                            <option value="passenger" {{ auth()->user()->account_type == 'passenger' ? 'selected' : '' }}>
                                Passager
                            </option>
                            <option value="driver" {{ auth()->user()->account_type == 'driver' ? 'selected' : '' }}>
                                Chauffeur
                            </option>
                        </select>
                    </div>

                    <div>
                        <label for="profile_photo" class="block text-sm font-medium text-gray-700 mb-2">
                            Photo de Profil
                        </label>
                        <input 
                            type="file" 
                            id="profile_photo" 
                            name="profile_photo" 
                            accept="image/*"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        <p class="text-sm text-gray-500 mt-2">
                            Format recommandé : JPG, PNG. Taille max : 5 Mo.
                        </p>
                    </div>

                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition"
                        >
                            Mettre à jour le Profil
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Password Change Section -->
        <div class="mt-8 bg-white shadow-xl rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Changer de Mot de Passe</h3>
            <form action="/profile/change-password" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                        Mot de Passe Actuel
                    </label>
                    <input 
                        type="password" 
                        id="current_password" 
                        name="current_password" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">
                        Nouveau Mot de Passe
                    </label>
                    <input 
                        type="password" 
                        id="new_password" 
                        name="new_password" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        minlength="8"
                    >
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-2">
                        Confirmez le Nouveau Mot de Passe
                    </label>
                    <input 
                        type="password" 
                        id="confirm_password" 
                        name="confirm_password" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        minlength="8"
                    >
                </div>

                <div class="pt-4">
                    <button 
                        type="submit" 
                        class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition"
                    >
                        Changer le Mot de Passe
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4 text-blue-400">PIPYalah</h4>
                    <p class="text-gray-400">Révolutionnons ensemble la mobilité urbaine</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Réservation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Chauffeurs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Entreprises</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ressources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contactez-nous</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Légal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-500">© 2025 PIPYalah. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>