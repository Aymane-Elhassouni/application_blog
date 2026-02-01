<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Catégorie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md">
        <div class="mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">Nouvelle Catégorie</h1>
            <p class="text-gray-500 text-sm mt-1">Ajoutez une nouvelle catégorie au blog.</p>
        </div>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            
            <!-- Note: ID et Timestamps sont générés automatiquement par la DB -->

            <!-- Nom -->
            <div class="mb-4">
                <label for="nom" class="block text-gray-700 font-semibold mb-2">Nom de la catégorie</label>
                <input type="text" 
                       name="name" 
                       id="nom" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border" 
                       placeholder="Ex: Laravel"
                       required>
                @error('nom')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" 
                          id="description" 
                          rows="4" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border"
                          placeholder="Description courte de la catégorie..."></textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Timestamps Display (Read-only simulation) -->
            <div class="mb-6 p-4 bg-gray-50 rounded text-xs text-gray-400">
                <p><i class="fas fa-clock mr-1"></i> Créé le : <em>Automatique</em></p>
                <p><i class="fas fa-history mr-1"></i> Mis à jour le : <em>Automatique</em></p>
            </div>

            <div class="flex justify-end space-x-3">
                <a href="#" class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition">Annuler</a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition shadow">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>

</body>
</html>

