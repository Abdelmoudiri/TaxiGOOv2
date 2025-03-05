<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition">
                    TaxiGOO
                </a>
            </div>

            {{-- Navigation Links --}}
            <div class="hidden md:flex items-center space-x-6">
                {{-- Common Links --}}
                <a href="/" class="text-gray-700 hover:text-blue-600 transition">
                    Accueil
                </a>
                <a href="/drivers" class="text-gray-700 hover:text-blue-600 transition">
                    Chauffeurs
                </a>

                {{-- Authentication-based Links --}}
                @auth
                    {{-- Passenger-specific Links --}}
                    @if(Auth::user()->account_type == 'passenger')
                        <a href="/reservations" class="text-gray-700 hover:text-blue-600 transition">
                            Mes Réservations
                        </a>
                    @endif

                    {{-- Driver-specific Links --}}
                    @if(Auth::user()->account_type == 'driver')
                        <a href="/reservations" class="text-gray-700 hover:text-blue-600 transition">
                            Demandes
                        </a>
                    @endif

                    {{-- Profile and Logout --}}
                    <a href="/profile" class="text-gray-700 hover:text-blue-600 transition">
                        Profil
                    </a>
                    <a href="/logout" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">
                        Déconnexion
                    </a>
                @endauth

                {{-- Guest Links --}}
                @guest
                    <a href="/login" class="text-gray-700 hover:text-blue-600 transition">
                        Connexion
                    </a>
                    <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">
                        Inscription
                    </a>
                @endguest
            </div>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden">
                <button 
                    x-data="{ open: false }"
                    @click="open = !open"
                    class="text-gray-500 hover:text-blue-600 focus:outline-none"
                >
                    <svg 
                        x-show="!open"
                        class="h-6 w-6" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M4 6h16M4 12h16M4 18h16" 
                        />
                    </svg>
                    <svg 
                        x-show="open"
                        class="h-6 w-6" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M6 18L18 6M6 6l12 12" 
                        />
                    </svg>
                </button>

                {{-- Mobile Dropdown Menu --}}
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute top-16 right-0 w-full bg-white shadow-lg z-50"
                >
                    <div class="px-4 pt-2 pb-3 space-y-1">
                        <a href="/" class="block text-gray-700 hover:bg-blue-50 px-3 py-2 rounded-md">
                            Accueil
                        </a>
                        <a href="/drivers" class="block text-gray-700 hover:bg-blue-50 px-3 py-2 rounded-md">
                            Chauffeurs
                        </a>

                        @auth
                            @if(Auth::user()->account_type == 'passenger')
                                <a href="/reservations" class="block text-gray-700 hover:bg-blue-50 px-3 py-2 rounded-md">
                                    Mes Réservations
                                </a>
                            @endif

                            @if(Auth::user()->account_type == 'driver')
                                <a href="/reservations" class="block text-gray-700 hover:bg-blue-50 px-3 py-2 rounded-md">
                                    Demandes
                                </a>
                            @endif

                            <a href="/profile" class="block text-gray-700 hover:bg-blue-50 px-3 py-2 rounded-md">
                                Profil
                            </a>
                            <a href="/logout" class="block bg-blue-600 text-white hover:bg-blue-700 px-3 py-2 rounded-md text-center">
                                Déconnexion
                            </a>
                        @endauth

                        @guest
                            <a href="/login" class="block text-gray-700 hover:bg-blue-50 px-3 py-2 rounded-md">
                                Connexion
                            </a>
                            <a href="/register" class="block bg-blue-600 text-white hover:bg-blue-700 px-3 py-2 rounded-md text-center">
                                Inscription
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>