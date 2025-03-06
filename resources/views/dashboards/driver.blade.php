<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chauffeurs Disponibles - TaxiGOO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/defer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition">
                        TaxiGOO
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 hover:text-blue-600 transition">Accueil</a>
                    <a href="/drivers" class="text-gray-700 hover:text-blue-600 transition">Chauffeurs</a>
                    @auth
                        <a href="/reservations" class="text-gray-700 hover:text-blue-600 transition">Réservations</a>
                        <a href="/profile" class="text-gray-700 hover:text-blue-600 transition">Profil</a>
                        <a href="/logout" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">
                            Déconnexion
                        </a>
                    @endauth
                    @guest
                        <a href="/login" class="text-gray-700 hover:text-blue-600 transition">Connexion</a>
                        <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">
                            Inscription
                        </a>
                    @endguest
                </div>

                <div class="md:hidden" x-data="{ open: false }">
                    <button 
                        @click="open = !open"
                        class="text-gray-500 hover:text-blue-600 focus:outline-none"
                    >
                        <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Drivers Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-12">
        <div class="mb-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Nos Chauffeurs Disponibles</h1>
            <p class="text-gray-600 max-w-2xl">Trouvez le chauffeur parfait pour votre prochaine course. Chaque conducteur est soigneusement sélectionné pour vous offrir le meilleur service.</p>
        </div>

        <!-- Filters -->
        <div class="mb-8 flex flex-wrap items-center gap-4">
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Toutes les villes</option>
                @php $cities = $drivers->pluck('city')->unique() @endphp
                @foreach($cities as $city)
                    <option>{{ $city }}</option>
                @endforeach
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Statut</option>
                <option>Disponible</option>
                <option>Occupé</option>
            </select>
        </div>

        <!-- Drivers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($drivers as $driver)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-xl">
                    <div class="relative">
                        <div class="h-56 overflow-hidden">
                            <img class="w-full h-full object-cover" 
                                 src="{{ asset('storage/'.$driver->photo)}}" 
                                 alt="Chauffeur {{ $driver->firstname }} {{ $driver->lastname }}">
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/80 text-gray-800 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $driver->status }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900">
                                {{ $driver->firstname }} {{ $driver->lastname }}
                            </h3>
                            <div class="flex items-center text-yellow-500">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="ml-1 text-gray-600">4.8</span>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-600 mb-4">
                            <svg class="h-5 w-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $driver->city }}
                        </div>
                        @auth
                            <button 
                                onclick="openReservationModal('{{ $driver->id }}')"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition flex items-center justify-center space-x-2"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                                <span>Réserver maintenant</span>
                            </button>
                        @endauth
                        @guest
                            <a 
                                href="/login"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition flex items-center justify-center space-x-2"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                                <span>Connectez-vous pour réserver</span>
                            </a>
                        @endguest
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Reservation Modal -->
    @auth
    <div 
        id="reservation-modal" 
        x-data="{ isOpen: false }"
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden"
    >
        <div class="bg-white rounded-xl shadow-2xl max-w-md w-full p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                Réservation de Course
            </h2>
            <form id="reservation-form" action="/reserve" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                    <input 
                        type="date" 
                        id="date" 
                        name="date" 
                        required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Lieu de départ</label>
                    <input 
                        type="text" 
                        id="location" 
                        name="location" 
                        placeholder="Adresse de prise en charge" 
                        required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label for="destination" class="block text-sm font-medium text-gray-700 mb-2">Destination</label>
                    <input 
                        type="text" 
                        id="destination" 
                        name="destination" 
                        placeholder="Adresse de destination" 
                        required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <input type="hidden" name="driverid" id="driverid">
                <div class="flex space-x-4">
                    <button
                        type="submit" 
                        class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition"
                    >
                        Confirmer la Réservation
                    </button>
                    <button 
                        type="button" 
                        onclick="closeReservationModal()"
                        class="w-full bg-red-500 text-white py-3 rounded-lg hover:bg-red-600 transition"
                    >
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endauth

    <script>
        @auth
        // Global variable to store the Alpine.js modal instance
        let reservationModal;

        // Function to open the reservation modal
        function openReservationModal(driverId) {
            const modal = document.getElementById('reservation-modal');
            const modalInstance = modal.__x.$data;
            
            document.getElementById('driverid').value = driverId;
            modal.classList.remove('hidden');
            modalInstance.isOpen = true;
            reservationModal = modalInstance;
        }

        // Function to close the reservation modal
        function closeReservationModal() {
            const modal = document.getElementById('reservation-modal');
            
            modal.classList.add('hidden');
            if (reservationModal) {
                reservationModal.isOpen = false;
            }
        }

        // Handle form submission
       
        @endauth
    </script>
</body>
</html>