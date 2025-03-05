<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaxiGOO - Tableau de Bord Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#2C3E50] text-white">
            <div class="p-4 border-b border-gray-800">
                <div class="flex items-center justify-between">
                    <img src="/logo-taxigoo.png" alt="TaxiGOO Logo" class="h-10 w-auto">
                    <span class="text-xl font-bold">Admin</span>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="p-4">
                <div class="relative">
                    <input type="text" class="w-full bg-[#34495E] text-white rounded-md pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Rechercher...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>

            <nav class="mt-5 px-2">
                <div class="space-y-4">
                    <!-- Dashboard -->
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg bg-[#34495E] text-white group transition-all duration-200 hover:bg-[#4A6984]">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Tableau de Bord
                    </a>

                    <!-- Courses -->
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-[#4A6984] hover:text-white group transition-all duration-200">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Courses
                    </a>

                    <!-- Conducteurs -->
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-[#4A6984] hover:text-white group transition-all duration-200">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Conducteurs
                    </a>

                    <!-- Passagers -->
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-[#4A6984] hover:text-white group transition-all duration-200">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Passagers
                    </a>

                    <!-- Paiements -->
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-[#4A6984] hover:text-white group transition-all duration-200">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                        Paiements
                    </a>
                </div>
            </nav>

            <!-- User Profile -->
            <div class="mt-auto p-4 border-t border-gray-800">
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Admin Profile">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-white">Admin TaxiGOO</p>
                        <p class="text-xs text-gray-400">Administrateur</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
            <h1 class="text-3xl font-bold text-gray-900">Tableau de Bord TaxiGOO</h1>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Statistiques rapides -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700">Courses Aujourd'hui</h3>
                    <p class="text-3xl font-bold text-blue-600 mt-2">124</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700">Nouveaux Conducteurs</h3>
                    <p class="text-3xl font-bold text-green-600 mt-2">12</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700">Chiffre d'Affaires</h3>
                    <p class="text-3xl font-bold text-purple-600 mt-2">3 542€</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700">Nouveaux Passagers</h3>
                    <p class="text-3xl font-bold text-red-600 mt-2">45</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>