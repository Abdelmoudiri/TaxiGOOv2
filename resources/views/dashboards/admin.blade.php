<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaxiGOO - Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
        }

        .sidebar {
            width: 250px;
            transition: all 0.3s;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

    </style>
</head>
<body>
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="sidebar bg-gradient-to-b from-blue-600 to-purple-600 text-white">
            <div class="p-6">
                <h1 class="text-4xl font-extrabold text-center bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 text-transparent bg-clip-text">
                    <a href="/" class="hover:underline">Taxi<span class="text-black">GOO</span> Admin</a>
                </h1>
                <p class="text-sm text-blue-100">Tableau de bord</p>
            </div>
            <nav class="mt-6">
                <ul>
                    <li>
                        <a href="#" class="nav-link flex items-center px-6 py-3 hover:bg-white/10 transition" data-section="dashboard">
                            <span class="mr-3">📊</span>
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-6 py-3 hover:bg-white/10 transition" data-section="users">
                            <span class="mr-3">👥</span>
                            <span>Gérer utilisateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-6 py-3 hover:bg-white/10 transition" data-section="drivers">
                            <span class="mr-3">🚕</span>
                            <span>Gérer chauffeurs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-6 py-3 hover:bg-white/10 transition" data-section="rides">
                            <span class="mr-3">🗺️</span>
                            <span>Gérer courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-6 py-3 hover:bg-white/10 transition" data-section="payments">
                            <span class="mr-3">💳</span>
                            <span>Gestion paiements</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-6 py-3 hover:bg-white/10 transition" data-section="settings">
                            <span class="mr-3">⚙️</span>
                            <span>Paramètres</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="mt-auto p-6">
                <a href="#" class="flex items-center text-sm">
                    <span class="mr-2">🚪</span>
                    <span>Déconnexion</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <header class="bg-white shadow-sm">
                <div class="px-6 py-4 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800" id="section-title">Tableau de bord</h2>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-500 hover:text-gray-700">🔔</button>
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/40" alt="Admin" class="w-8 h-8 rounded-full">
                            <span class="ml-2 text-sm font-medium text-gray-700">Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Section -->
            <div class="section active p-6" id="dashboard-section">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">👥</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Total Utilisateurs</h3>
                                <p class="text-2xl font-bold">1,285</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">🚕</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Total Chauffeurs</h3>
                                <p class="text-2xl font-bold">342</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">🗺️</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Courses aujourd'hui</h3>
                                <p class="text-2xl font-bold">87</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium mb-4">Activité récente</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="bg-blue-100 text-blue-600 p-2 rounded mr-3">🚗</span>
                                <div>
                                    <p class="text-sm"><span class="font-medium">Martin Dupont</span> a terminé une course</p>
                                    <p class="text-xs text-gray-500">Il y a 10 minutes</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-green-100 text-green-600 p-2 rounded mr-3">💰</span>
                                <div>
                                    <p class="text-sm"><span class="font-medium">Sophie Martin</span> a effectué un paiement</p>
                                    <p class="text-xs text-gray-500">Il y a 25 minutes</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-yellow-100 text-yellow-600 p-2 rounded mr-3">👤</span>
                                <div>
                                    <p class="text-sm"><span class="font-medium">Jean Lefebvre</span> s'est inscrit</p>
                                    <p class="text-xs text-gray-500">Il y a 45 minutes</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium mb-4">Statistiques hebdomadaires</h3>
                        <div class="h-64 flex items-end justify-between px-4">
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 40%"></div>
                                <span class="mt-2 text-xs">Lun</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 65%"></div>
                                <span class="mt-2 text-xs">Mar</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 55%"></div>
                                <span class="mt-2 text-xs">Mer</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 80%"></div>
                                <span class="mt-2 text-xs">Jeu</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 95%"></div>
                                <span class="mt-2 text-xs">Ven</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 75%"></div>
                                <span class="mt-2 text-xs">Sam</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-500 w-8 rounded-t" style="height: 45%"></div>
                                <span class="mt-2 text-xs">Dim</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Management Section -->
            <div class="section p-6" id="users-section">
                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b flex justify-between items-center">
                        <h3 class="text-lg font-medium">Liste des utilisateurs</h3>
                        <div class="flex space-x-2">
                            <input type="text" placeholder="Rechercher..." class="px-3 py-2 border rounded text-sm">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Ajouter</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Téléphone</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date d'inscription</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Marie Dubois</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">marie.dubois@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+33 6 12 34 56 78</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/01/2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pierre Martin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">pierre.martin@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+33 6 98 76 54 32</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">18/01/2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Sophie Bernard</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">sophie.bernard@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+33 6 55 44 33 22</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20/01/2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Modifier</button>
                                        <button class="text-red-600 hover:text-red-900">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Affichage de 1 à 3 sur 25 entrées</p>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded text-sm">Précédent</button>
                                <button class="px-3 py-1 bg-blue-600 text-white rounded text-sm">1</button>
                                <button class="px-3 py-1 border rounded text-sm">2</button>
                                <button class="px-3 py-1 border rounded text-sm">3</button>
                                <button class="px-3 py-1 border rounded text-sm">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Drivers Management Section -->
            <div class="section p-6" id="drivers-section">
                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b flex justify-between items-center">
                        <h3 class="text-lg font-medium">Liste des chauffeurs</h3>
                        <div class="flex space-x-2">
                            <input type="text" placeholder="Rechercher..." class="px-3 py-2 border rounded text-sm">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Ajouter</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Véhicule</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Note</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Courses</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#D001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jean Moreau</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Toyota Prius</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.8/5</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">253</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">En ligne</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Détails</button>
                                        <button class="text-red-600 hover:text-red-900">Suspendre</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#D002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Amélie Petit</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Renault Clio</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.6/5</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">178</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Hors ligne</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Détails</button>
                                        <button class="text-red-600 hover:text-red-900">Suspendre</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#D003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Thomas Leroy</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Citroën C4</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.9/5</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">312</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">En course</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Détails</button>
                                        <button class="text-red-600 hover:text-red-900">Suspendre</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Affichage de 1 à 3 sur 18 entrées</p>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded text-sm">Précédent</button>
                                <button class="px-3 py-1 bg-blue-600 text-white rounded text-sm">1</button>
                                <button class="px-3 py-1 border rounded text-sm">2</button>
                                <button class="px-3 py-1 border rounded text-sm">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rides Management Section -->
            <div class="section p-6" id="rides-section">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">🚗</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Courses aujourd'hui</h3>
                                <p class="text-2xl font-bold">87</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">✅</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Courses terminées</h3>
                                <p class="text-2xl font-bold">72</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">⏳</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Courses en cours</h3>
                                <p class="text-2xl font-bold">15</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b flex justify-between items-center">
                        <h3 class="text-lg font-medium">Courses récentes</h3>
                        <div class="flex space-x-2">
                            <select class="px-3 py-2 border rounded text-sm">
                                <option>Aujourd'hui</option>
                                <option>Cette semaine</option>
                                <option>Ce mois</option>
                            </select>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Exporter</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Chauffeur</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">De</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">À</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#R001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Marie Dubois</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jean Moreau</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Gare de Lyon</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Tour Eiffel</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15,50 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terminée</span>
                                    </td>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terminée</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Détails</button>
                                        <button class="text-red-600 hover:text-red-900">Annuler</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#R002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pierre Martin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Amélie Petit</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Place de la République</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Aéroport CDG</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45,80 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">En cours</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Détails</button>
                                        <button class="text-red-600 hover:text-red-900">Annuler</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#R003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Sophie Bernard</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Thomas Leroy</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Montmartre</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Place de la Bastille</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12,30 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Détails</button>
                                        <button class="text-red-600 hover:text-red-900">Annuler</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Affichage de 1 à 3 sur 87 entrées</p>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded text-sm">Précédent</button>
                                <button class="px-3 py-1 bg-blue-600 text-white rounded text-sm">1</button>
                                <button class="px-3 py-1 border rounded text-sm">2</button>
                                <button class="px-3 py-1 border rounded text-sm">3</button>
                                <button class="px-3 py-1 border rounded text-sm">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments Management Section -->
            <div class="section p-6" id="payments-section">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">💰</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Revenus aujourd'hui</h3>
                                <p class="text-2xl font-bold">1 245,60 €</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">📊</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Revenus hebdomadaires</h3>
                                <p class="text-2xl font-bold">8 720,35 €</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">📈</div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm">Revenus mensuels</h3>
                                <p class="text-2xl font-bold">32 450,75 €</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b flex justify-between items-center">
                        <h3 class="text-lg font-medium">Historique des paiements</h3>
                        <div class="flex space-x-2">
                            <input type="date" class="px-3 py-2 border rounded text-sm">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm">Filtrer</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Transaction</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Méthode</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Commision</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#T001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Marie Dubois</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#R001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Carte</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15,50 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1,55 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">06/03/2025 - 10:15</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Validé</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#T002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pierre Martin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#R002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PayPal</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45,80 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4,58 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">06/03/2025 - 09:45</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">En cours</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#T003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jacques Petit</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#R004</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Espèces</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">22,75 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2,28 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">06/03/2025 - 08:30</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Validé</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Affichage de 1 à 3 sur 42 entrées</p>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded text-sm">Précédent</button>
                                <button class="px-3 py-1 bg-blue-600 text-white rounded text-sm">1</button>
                                <button class="px-3 py-1 border rounded text-sm">2</button>
                                <button class="px-3 py-1 border rounded text-sm">3</button>
                                <button class="px-3 py-1 border rounded text-sm">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Section -->
            <div class="section p-6" id="settings-section">
                <div class="bg-white rounded-lg shadow">
                    <div class="p-4 border-b">
                        <h3 class="text-lg font-medium">Paramètres de l'application</h3>
                    </div>
                    <div class="p-6">
                        <div class="mb-8">
                            <h4 class="text-md font-medium mb-4">Paramètres généraux</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nom de l'application</label>
                                    <input type="text" value="PIPYalah" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Devise</label>
                                    <select class="w-full px-3 py-2 border rounded">
                                        <option selected>EUR (€)</option>
                                        <option>USD ($)</option>
                                        <option>GBP (£)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Fuseau horaire</label>
                                    <select class="w-full px-3 py-2 border rounded">
                                        <option selected>Europe/Paris (UTC+1)</option>
                                        <option>Europe/London (UTC+0)</option>
                                        <option>America/New_York (UTC-5)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Langue par défaut</label>
                                    <select class="w-full px-3 py-2 border rounded">
                                        <option selected>Français</option>
                                        <option>Anglais</option>
                                        <option>Espagnol</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-md font-medium mb-4">Paramètres de commission</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Commission standard (%)</label>
                                    <input type="number" value="10" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Commission heures de pointe (%)</label>
                                    <input type="number" value="15" class="w-full px-3 py-2 border rounded">
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-md font-medium mb-4">Notifications</h4>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h5 class="font-medium">Notifications par email</h5>
                                        <p class="text-sm text-gray-500">Recevoir des notifications par email</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h5 class="font-medium">Notifications push</h5>
                                        <p class="text-sm text-gray-500">Recevoir des notifications push</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded mr-2">Annuler</button>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript pour la navigation entre les sections -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélectionner tous les liens de navigation
            const navLinks = document.querySelectorAll('.nav-link');

            // Fonction pour afficher une section spécifique
            function showSection(sectionId) {
                // Cacher toutes les sections
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.remove('active');
                });

                // Afficher la section sélectionnée
                document.getElementById(sectionId + '-section').classList.add('active');

                // Mettre à jour le titre de la section
                document.getElementById('section-title').textContent =
                    document.querySelector(`[data-section="${sectionId}"]`).querySelector('span:last-child').textContent;

                // Mettre à jour la classe active dans la navigation
                navLinks.forEach(link => {
                    link.classList.remove('bg-white/10');
                    if (link.getAttribute('data-section') === sectionId) {
                        link.classList.add('bg-white/10');
                    }
                });
            }

            // Ajouter des écouteurs d'événements aux liens de navigation
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    showSection(sectionId);
                });
            });

            // Par défaut, afficher la section du tableau de bord
            showSection('dashboard');
        });

    </script>
</body>
</html>
