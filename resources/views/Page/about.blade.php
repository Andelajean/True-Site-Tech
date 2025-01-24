@extends('layouts.cother')
@section('content')
<style>
    .team-scroll-container {
        overflow-x: hidden;
        position: relative;
    }
    
    .team-scroll {
        display: flex;
        gap: 30px;
        animation: scroll 15s linear infinite;
    }
    
    .team-item {
        text-align: center;
        flex: 0 0 auto;
        width: 200px;
    }
    
    .team-item img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .team-item p {
        margin-top: 10px;
        font-size: 16px;
        color: #333;
    }
    
    @keyframes scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }
    
</style>

<section id="sub-hero" class="d-flex align-items-center text-center">
    <div class="overlay"></div>
    <div class="container position-relative">
        <h1 class="fw-bold text-secondary">A Propos De Nous</h1>
    </div>
</section>

<!-- À propos Début -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">À propos de nous</h5>
                    <h1 class="mb-0">Découvrez qui nous sommes et ce que nous faisons.</h1>
                </div>
                <p class="mb-4">Nous sommes une équipe passionnée qui travaille à fournir des solutions innovantes pour répondre aux besoins spécifiques de nos clients. Grâce à notre expertise et notre dévouement, nous avons réussi à transformer des idées en projets concrets et impactants.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Récompenses prestigieuses</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Équipe professionnelle</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Support 24/7</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Tarifs compétitifs</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Appelez-nous pour toute question</h5>
                        <h4 class="text-primary mb-0">+237 659 454 737 / 679 091 819</h4>
                    </div>
                </div>
                <a href="contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contactez Nous</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" 
                        src="{{ asset('img/noirs4.jpeg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- À propos Fin -->

<!-- Équipe Début -->


<div class="container-fluid py-5 wow fadeInUp">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Membres de l'Équipe</h5>
            <h1 class="mb-0">Des Professionnels Prêts à Soutenir Votre Entreprise</h1>
        </div>

        <div class="team-scroll-container">
    <div class="team-scroll">
        <div class="team-item">
            <img src="{{ asset('img/and.jpg') }}" alt="Jean Dupont">
            <p><strong>ANDELA Jean Gael</strong><br>Chef de Projet</p>
        </div>
        <div class="team-item">
            <img src="{{ asset('img/em.jpg') }}" alt="Emma Durand">
            <p><strong>NDZANA Emmanuel</strong><br>Développeuse Web</p>
        </div>
        <div class="team-item">
            <img src="{{ asset('img/fab.jpg') }}" alt="Fabien Martin">
            <p><strong>TCHUEGANG Fabrice</strong><br>Designer Graphique</p>
        </div>
        <div class="team-item">
            <img src="{{ asset('img/tavel.jpg') }}" alt="Chloé Tavernier" style="height: 250px;">
            <p><strong>MANFO Tavel</strong><br>Spécialiste Marketing</p>
        </div>
        <div class="team-item">
            <img src="{{ asset('img/otomo.jpg') }}" alt="François Leroy">
            <p><strong>OTOMO Daniel</strong><br>Analyste Financier</p>
        </div>
        <div class="team-item">
            <img src="{{ asset('img/moi.jpg') }}" alt="Élise Blanc">
            <p><strong>KOUOMO Merveille</strong><br>Responsable RH</p>
        </div>
        <div class="team-item">
            <img src="{{ asset('img/fran.jpg') }}" alt="Paul Moreau">
            <p><strong>MBANI Francine</strong><br>Consultant IT</p>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
<!-- Équipe Fin -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollContainer = document.querySelector('.team-scroll');
        const items = document.querySelectorAll('.team-item');
    
        // Duplique les éléments pour assurer un scroll fluide
        items.forEach((item) => {
            const clone = item.cloneNode(true);
            scrollContainer.appendChild(clone);
        });
    });
    
</script>

    @endsection





   