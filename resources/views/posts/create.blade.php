<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-2xl">
        <div class="mb-6 border-b pb-4 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Nouvel Article</h1>
                <p class="text-gray-500 text-sm mt-1">Publiez un nouveau contenu sur le blog.</p>
            </div>
            <a href="#" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></a>
        </div>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Note: ID et Timestamps sont générés automatiquement par la DB -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                <!-- Titre -->
                <div class="col-span-2">
                    <label for="titre" class="block text-gray-700 font-semibold mb-2">Titre de l'article</label>
                    <input type="text" 
                           name="titre" 
                           id="titre" 
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border" 
                           placeholder="Ex: Les nouveautés de Laravel 11"
                           required>
                    @error('titre')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Categorie ID -->
                <div>
                    <label for="categorie_id" class="block text-gray-700 font-semibold mb-2">Catégorie</label>
                    <select name="categorie_id" 
                            id="categorie_id" 
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border"
                            required>
                        <option value="">Sélectionner une catégorie</option>
                        <!-- @foreach($categories as $category) -->
                        <option value="1">Développement</option>
                        <option value="2">Design</option>
                        <option value="3">Tutoriel</option>
                        <!-- @endforeach -->
                    </select>
                    @error('categorie_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image (Optionnel) -->
                <div>
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Image de couverture <span class="text-sm text-gray-400 font-normal">(Optionnel)</span></label>
                    <input type="file" 
                           name="image" 
                           id="image" 
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Contenu -->
            <div class="mb-6">
                <label for="contenu" class="block text-gray-700 font-semibold mb-2">Contenu</label>
                <textarea name="contenu" 
                          id="contenu" 
                          rows="8" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border font-mono text-sm"
                          placeholder="Écrivez votre article ici..."></textarea>
                @error('contenu')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Timestamps Display (Read-only simulation) -->
            <div class="mb-6 flex justify-between items-center text-xs text-gray-400 bg-gray-50 p-3 rounded">
                <span>ID: <em>Auto-généré</em></span>
                <span>Créé le: <em>{{ date('d/m/Y') }}</em></span>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                <a href="#" class="px-6 py-2.5 text-gray-600 hover:bg-gray-100 rounded-lg transition font-medium">Annuler</a>
                <button type="submit" class="px-8 py-2.5 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition shadow flex items-center">
                    <i class="fas fa-paper-plane mr-2"></i> Publier
                </button>
            </div>
        </form>
    </div>

</body>
</html>
