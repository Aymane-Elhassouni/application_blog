<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corbeille Articles</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-6xl mx-auto">
         <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Corbeille : Articles</h1>
            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-blue-600 transition">
                <i class="fas fa-arrow-left mr-1"></i> Retour à la liste
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
             <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Suppression</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- @foreach($trashedPosts as $post) -->
                    <tr class="hover:bg-red-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">Ancien Article Supprimé</div>
                            <div class="text-xs text-gray-500">ID: #10</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                Développement
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-xs text-red-500">
                             24/01/2026
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex items-center justify-end space-x-3">
                                <!-- Restore -->
                                <form action="{{ route('posts.restore', 10) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-green-600 hover:text-green-900" title="Restaurer">
                                        <i class="fas fa-trash-restore"></i>
                                    </button>
                                </form>
                                
                                <!-- Force Delete -->
                                <form action="{{ route('posts.forceDelete', 10) }}" method="POST" onsubmit="return confirm('DÉFINITIF : Cet article sera perdu à jamais !');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" title="Supprimer Définitivement">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <!-- @endforeach -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
