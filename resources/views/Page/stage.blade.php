@extends('layouts.cother')
@section('content')
<style>
    .alert {
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    position: relative;
    font-family: Arial, sans-serif;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.close-btn {
    background: none;
    border: none;
    color: inherit;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    position: absolute;
    top: 5px;
    right: 10px;
}
</style>

 <!-- Hero Section -->
 <section class="bg-light p-5 my-5">
    <div class="container text-center">
        <h1>Postuler pour un Stage</h1>
        <p>Rejoignez notre équipe pour des expériences enrichissantes.</p>
    </div>
</section>
        
@if(session('success') || session('error'))
    <div class="alert {{ session('success') ? 'alert-success' : 'alert-error' }}">
        <span>{{ session('success') ?? session('error') }}</span>
        <button class="close-btn" onclick="this.parentElement.remove()">Fermer</button>
    </div>
@endif
<!-- Main Content -->
<div class="container py-5">
    <div class="row">
        <!-- Opportunités de Stage -->
        <div class="col-lg-6 mb-4">
            <div>
                <img src="{{asset('img/stage.png')}}" alt="" class="img-fluid" style="width: 400px; height: 400px;">
            </div>
            <h2>Opportunités de Stage</h2>
            <p>Nous offrons des stages dans les domaines suivants :</p>
            <ul>
                <li>Développement Web et Mobile</li>
                <li>Marketing Digital</li>
                <li>Gestion de Projets</li>
                <li>CyberSécurité</li>
                <li>Vidéo Surveillance</li>
                <li>Administration Systeme et Reseau</li>
            </ul>
            <p>Pour toute question, contactez-nous via la section <a href="contact">Contact</a>.</p>
        </div>

        <!-- Formulaire de Postulation -->

<div class="col-lg-6 mb-4">
            <h2>Postuler Maintenant</h2>
            <form method="POST" enctype="multipart/form-data" action="{{route('user.stage')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom et Prénom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom complet" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numéro de Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone" required>
                </div>
                <div class="mb-3">
                    <label for="cv" class="form-label">CV</label>
                    <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                </div>
                <div class="mb-3">
                    <label for="certificat" class="form-label">Certificat de Scolarité</label>
                    <input type="file" class="form-control" id="certificat" name="certificat" accept=".pdf,.doc,.docx" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Parlez-nous de vous"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection

   

