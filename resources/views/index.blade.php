<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIPYalah - Réservation de Grands Taxis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .curved-shape {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
    </style>
</head>
<body>
    <!-- Navigation Avec Boutons Connexion/Inscription -->
   <x-navigation>
   </x-navigation>

    <!-- Le reste du code reste identique au design précédent -->
    <header class="relative h-screen flex items-center curved-shape">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 opacity-75"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-5xl font-bold mb-6 leading-tight">
                        Votre Mobilité <br/>
                        <span class="text-yellow-300">Réinventée</span>
                    </h1>
                    <p class="text-xl mb-8 text-white/90">
                        PIPYalah transforme vos déplacements en expérience fluide et sécurisée. Réservez, suivez, voyagez.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="px-6 py-3 bg-white text-blue-600 rounded-full hover:bg-blue-50 transition">
                            Réserver un Taxi
                        </a>
                        <a href="#" class="px-6 py-3 border border-white/50 text-white rounded-full hover:bg-white/10 transition">
                            Devenir Chauffeur
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white/20 backdrop-blur-lg rounded-2xl p-6 transform hover:scale-105 transition duration-300">
                        <div class="text-center mb-4">
                            <span class="text-xl font-semibold text-white">Réservation Instantanée</span>
                        </div>
                        <div class="space-y-4">
                            <input type="text" placeholder="Départ" class="w-full px-4 py-3 bg-white/20 backdrop-blur-md rounded-xl text-white placeholder-white/70"/>
                            <input type="text" placeholder="Destination" class="w-full px-4 py-3 bg-white/20 backdrop-blur-md rounded-xl text-white placeholder-white/70"/>
                            <button class="w-full px-6 py-3 bg-yellow-400 text-blue-900 rounded-xl hover:bg-yellow-500 transition">
                                Trouver un Taxi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Fonctionnalités Modernes -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pourquoi PIPYalah ?</h2>
                <p class="text-xl text-gray-500">Une solution technologique au service de votre mobilité</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-xl transition">
                    <div class="text-blue-600 text-4xl mb-4">⏱️</div>
                    <h3 class="text-xl font-semibold mb-3">Rapidité</h3>
                    <p class="text-gray-600">Réservation instantanée en moins de 30 secondes</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-xl transition">
                    <div class="text-blue-600 text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-semibold mb-3">Transparence</h3>
                    <p class="text-gray-600">Prix clairement affichés sans frais cachés</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl hover:shadow-xl transition">
                    <div class="text-blue-600 text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-semibold mb-3">Sécurité</h3>
                    <p class="text-gray-600">Chauffeurs vérifiés et traçabilité en temps réel</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Moderne -->
    <footer class="bg-gray-900 text-white py-12">
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