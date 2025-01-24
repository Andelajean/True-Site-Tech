<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden { display: none; }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="h-screen bg-gray-100">
    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-800 text-white flex flex-col">
            <div class="py-4 px-6 text-2xl font-bold border-b border-blue-700">
                Dashboard
            </div>
            <nav class="flex-grow">
                <ul class="mt-4 space-y-2">
                    <li>
                        <a href="#" onclick="showSection('contact')" class="block py-2 px-4 hover:bg-blue-700 rounded">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showSection('formation')" class="block py-2 px-4 hover:bg-blue-700 rounded">
                            Formation
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showSection('stage')" class="block py-2 px-4 hover:bg-blue-700 rounded">
                            Stage
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showSection('actualite')" class="block py-2 px-4 hover:bg-blue-700 rounded">
                            Actualité
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="py-4 px-6 border-t border-blue-700">
                <p class="text-sm">&copy; 2025 True Site Technology</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6">
            <!-- Contact Section -->
            <div id="contact" class="section">
                <h2 class="text-2xl font-semibold text-blue-800 mb-4">Contact</h2>
                <table class="w-full bg-white rounded shadow">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600">
                            <th class="py-2 px-4">Nom</th>
                            <th class="py-2 px-4">Email</th>
                            <th class="py-2 px-4">Téléphone</th>
                            <th class="py-2 px-4">Message</th>
                            <th class="py-2 px-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="contactTable">
    @foreach ($contacts as $contact)
        <tr>
        <td class="py-2 px-4">{{ $contact->nom }}</td>
            <td class="py-2 px-4">{{ $contact->email }}</td>
            <td class="py-2 px-4">{{ $contact->telephone }}</td>
            <td class="py-2 px-4">{{ $contact->message }}</td>
            <td class="py-2 px-4">
                <button onclick="openReplyModal('{{ $contact->email }}')" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Répondre</button>
                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
                </table>
            </div>

          
<div id="formation" class="section hidden">
    <h2 class="text-2xl font-semibold text-blue-800 mb-4">Formations</h2>
    <table class="w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200 text-gray-600">
                <th class="py-2 px-4">Nom</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Téléphone</th>
                <th class="py-2 px-4">Nom Formation</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $formation)
                <tr>
                    <td class="py-2 px-4">{{ $formation->name }}</td>
                    <td class="py-2 px-4">{{ $formation->email }}</td>
                    <td class="py-2 px-4">{{ $formation->phone }}</td>
                    <td class="py-2 px-4">{{ $formation->nom_formation }}</td>
                    <td class="py-2 px-4">
                    <button onclick="openReplyModalFormation('{{ $formation->email }}')" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Répondre</button>

                        <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div id="stage" class="section hidden">
    <h2 class="text-2xl font-semibold text-blue-800 mb-4">Stages</h2>
    <table class="w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200 text-gray-600">
                <th class="py-2 px-4">Nom</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Téléphone</th>
                <th class="py-2 px-4">Message</th>
                <th class="py-2 px-4">CV</th>
                <th class="py-2 px-4">Certificat</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stages as $stage)
                <tr>
                    <td class="py-2 px-4">{{ $stage->name }}</td>
                    <td class="py-2 px-4">{{ $stage->email }}</td>
                    <td class="py-2 px-4">{{ $stage->phone }}</td>
                    <td class="py-2 px-4">{{ $stage->message }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ asset('storage/' . $stage->cv) }}" target="_blank" class="text-blue-500 underline">Voir CV</a>
                    </td>
                    <td class="py-2 px-4">
                        <a href="{{ asset('storage/' . $stage->certificat) }}" target="_blank" class="text-blue-500 underline">Voir Certificat</a>
                    </td>
                    <td class="py-2 px-4">
                    <button onclick="openReplyModalStage('{{ $stage->email }}')" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Répondre</button>

                        <form action="{{ route('stages.destroy', $stage->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


            <!-- Actualités Page -->
<div id="actualite" class="section hidden">
    <h2 class="text-2xl font-semibold text-blue-800 mb-4">Actualités</h2>
    
    <!-- Navbar -->
    <nav class="mb-4 bg-gray-200 p-2 rounded">
        <button onclick="showSubSection('addActualite')" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Ajouter une actualité</button>
        <button onclick="showSubSection('listActualite')" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Liste des actualités</button>
    </nav>
    
    <!-- Ajouter une actualité -->
    <div id="addActualite" class="sub-section">
        <h3 class="text-xl font-semibold mb-2">Ajouter une nouvelle actualité</h3>
        <form action="{{ route('actualites.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-4">
                <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" id="titre" name="titre" class="w-full border-gray-300 rounded px-3 py-2" placeholder="Titre de l'actualité" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full border-gray-300 rounded px-3 py-2" placeholder="Description de l'actualité" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="w-full border-gray-300 rounded" accept="image/*">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enregistrer</button>
        </form>
    </div>
    
    <!-- Liste des actualités -->
    <div id="listActualite" class="sub-section hidden">
        <h3 class="text-xl font-semibold mb-2">Liste des actualités</h3>
        <table class="w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200 text-gray-600">
                <th class="py-2 px-4">Titre</th>
                <th class="py-2 px-4">Description</th>
                <th class="py-2 px-4">Image</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($actualites as $actualite)
                <tr>
                    <td class="py-2 px-4">{{ $actualite->titre }}</td>
                    <td class="py-2 px-4">{{ $actualite->description }}</td>
                    <td class="py-2 px-4">
                        @if ($actualite->image)
                            <img src="{{ asset('storage/' . $actualite->image) }}" class="w-16 h-16 object-cover" alt="Image">
                        @else
                            <span>Aucune image</span>
                        @endif
                    </td>
                    <td class="py-2 px-4 space-x-2">
                        <a href="{{ route('actualites.edit', $actualite->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                            Modifier
                        </a>
                        <form action="{{ route('actualites.destroy', $actualite->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-2 px-4 text-center">Aucune actualité disponible.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
</div>

        </div>
    </div>

    <!-- Reply Modal -->
    <div id="replyModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded shadow p-6 w-96">
            <h3 class="text-lg font-semibold mb-4">Rédiger une réponse</h3>
            <form id="replyForm">
                <div class="mb-4">
                    <label for="replyEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="replyEmail" name="replyEmail" class="w-full border-gray-300 rounded px-3 py-2" readonly>
                </div>
                <div class="mb-4">
                    <label for="replyMessage" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="replyMessage" name="replyMessage" rows="4" class="w-full border-gray-300 rounded px-3 py-2"></textarea>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeReplyModal()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Annuler</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
<!-- Reply Modal for Stages -->
<div id="replyModalStage" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded shadow p-6 w-96">
        <h3 class="text-lg font-semibold mb-4">Rédiger une réponse (Stage)</h3>
        <form id="replyFormStage">
            <div class="mb-4">
                <label for="replyEmailStage" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="replyEmailStage" name="replyEmail" class="w-full border-gray-300 rounded px-3 py-2" readonly>
            </div>
            <div class="mb-4">
                <label for="replyMessageStage" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="replyMessageStage" name="replyMessage" rows="4" class="w-full border-gray-300 rounded px-3 py-2"></textarea>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeReplyModalStage()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Annuler</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Envoyer</button>
            </div>
        </form>
    </div>
</div>
<!-- Reply Modal for Formations -->
<div id="replyModalFormation" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded shadow p-6 w-96">
        <h3 class="text-lg font-semibold mb-4">Rédiger une réponse (Formation)</h3>
        <form id="replyFormFormation">
            <div class="mb-4">
                <label for="replyEmailFormation" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="replyEmailFormation" name="replyEmail" class="w-full border-gray-300 rounded px-3 py-2" readonly>
            </div>
            <div class="mb-4">
                <label for="replyMessageFormation" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="replyMessageFormation" name="replyMessage" rows="4" class="w-full border-gray-300 rounded px-3 py-2"></textarea>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeReplyModalFormation()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Annuler</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Envoyer</button>
            </div>
        </form>
    </div>
</div>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => section.classList.add('hidden'));
            document.getElementById(sectionId).classList.remove('hidden');
        }

        function openReplyModal(email) {
            document.getElementById('replyEmail').value = email;
            document.getElementById('replyModal').classList.remove('hidden');
        }

        function closeReplyModal() {
            document.getElementById('replyModal').classList.add('hidden');
            document.getElementById('replyForm').reset();
        }

     document.getElementById('replyForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('replyEmail').value;
    const message = document.getElementById('replyMessage').value;

    fetch('/contact/reply', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({ email, message }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Réponse envoyée avec succès.');
            closeReplyModal();
        }
    })
    .catch(error => {
        console.error('Erreur lors de l\'envoi de la réponse :', error);
    });
});


        function deleteContact(button) {
            const row = button.closest('tr');
            row.remove();
            alert('Contact supprimé.');
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSection('contact');
        });

        // Stages Reply Modal
function openReplyModalStage(email) {
    document.getElementById('replyEmailStage').value = email;
    document.getElementById('replyModalStage').classList.remove('hidden');
}

function closeReplyModalStage() {
    document.getElementById('replyModalStage').classList.add('hidden');
    document.getElementById('replyFormStage').reset();
}

document.getElementById('replyFormStage').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('replyEmailStage').value;
    const message = document.getElementById('replyMessageStage').value;

    // Logique pour envoyer un e-mail via le backend
    alert(`Réponse envoyée à ${email}:\n\n${message}`);
    closeReplyModalStage();
});

// Formations Reply Modal
function openReplyModalFormation(email) {
    document.getElementById('replyEmailFormation').value = email;
    document.getElementById('replyModalFormation').classList.remove('hidden');
}

function closeReplyModalFormation() {
    document.getElementById('replyModalFormation').classList.add('hidden');
    document.getElementById('replyFormFormation').reset();
}

document.getElementById('replyFormFormation').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('replyEmailFormation').value;
    const message = document.getElementById('replyMessageFormation').value;

    // Logique pour envoyer un e-mail via le backend
    alert(`Réponse envoyée à ${email}:\n\n${message}`);
    closeReplyModalFormation();
});



// Gérer la navigation entre Ajouter une actualité et Liste des actualités
function showSubSection(subSectionId) {
    const subSections = document.querySelectorAll('.sub-section');
    subSections.forEach(section => section.classList.add('hidden'));
    document.getElementById(subSectionId).classList.remove('hidden');
}

// Gérer le formulaire Ajouter une actualité
document.getElementById('addActualiteForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const titre = document.getElementById('titre').value;
    const description = document.getElementById('description').value;

    alert(`Actualité ajoutée:\n\nTitre: ${titre}\nDescription: ${description}`);
    // Réinitialiser le formulaire
    this.reset();
});

// Modifier une actualité
function editActualite(button) {
    const row = button.closest('tr');
    const titre = row.children[0].textContent;
    const description = row.children[1].textContent;

    // Pré-remplir le formulaire Ajouter une actualité pour la modification
    document.getElementById('titre').value = titre;
    document.getElementById('description').value = description;

    // Afficher la section Ajouter une actualité pour modification
    showSubSection('addActualite');
}

// Supprimer une actualité
function deleteActualite(button) {
    const row = button.closest('tr');
    row.remove();
    alert('Actualité supprimée.');
}

// Initialiser la page en affichant la liste des actualités
document.addEventListener('DOMContentLoaded', () => {
    showSubSection('listActualite');
});

    </script>
</body>
</html>
