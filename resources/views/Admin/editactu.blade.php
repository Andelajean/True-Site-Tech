<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Actualité</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="container mx-auto max-w-lg p-8 bg-white rounded shadow-md">
            <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center">Modifier une Actualité</h2>
            <form action="{{ route('actualites.update', $actualite->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                <!-- Simulate CSRF and method fields for example -->
                <input type="hidden" name="_token" value="csrf_token_placeholder">
                <input type="hidden" name="_method" value="PUT">

                <div class="mb-4">
            <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="titre" id="titre" value="{{ $actualite->titre }}" class="w-full border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border-gray-300 rounded px-3 py-2">{{ $actualite->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image (optionnelle)</label>
            <input type="file" name="image" id="image" class="w-full border-gray-300 rounded px-3 py-2">
        </div>



        <div class="flex justify-end space-x-2">
            <a href="{{ route('dashboard-admin') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Annuler</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enregistrer</button>
            </form>
        </div>
    </div>
</body>
</html>
