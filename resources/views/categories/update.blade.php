<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Catégorie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md">
        <div class="mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">Modifier : Développement</h1>
            <p class="text-gray-500 text-sm mt-1">Édition de la catégorie #1</p>
        </div>

        <form action="{{ categories.update,$categorie->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Nom -->
            <div class="mb-4">
                <label for="nom" class="block text-gray-700 font-semibold mb-2"></label>
                <input type="text" 
                       name="name" 
                       id="name"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border" 
                       value="{{$categorie->name}}"
                       required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" 
                          id="description" 
                          rows="4" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2 border">{{$categorie->description}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="#" class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition">Annuler</a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition shadow">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>

</body>
</html>
