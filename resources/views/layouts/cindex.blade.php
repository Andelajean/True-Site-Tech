
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('lgo/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('lgo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('lgo/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('lgo/site.webmanifest')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- CSS Files -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/hero.css') }}" rel="stylesheet">

<!-- Library CSS -->
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <title>True Site Technology</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0">TrueSite Technology</h1>
    </a>
    <!-- Navbar Toggler (fa-bars) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Accueil</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">À propos</a>
            <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('stage') || Request::is('formation') ? 'active' : '' }}" data-bs-toggle="dropdown">Postuler</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('stage') }}" class="dropdown-item {{ Request::is('stage') ? 'active' : '' }}">Stage</a>
                    <a href="{{ route('formation') }}" class="dropdown-item {{ Request::is('formation') ? 'active' : '' }}">Formation</a>
                </div>
            </div>
            <a href="{{ route('actu') }}" class="nav-item nav-link {{ Request::is('actu') ? 'active' : '' }}">Actualité</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
        </div>
    </div>
</nav>


    @yield('content')

    <footer class="bg-dark text-light pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- About the Company -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase mb-3">À propos de TrueSite</h5>
                    <p>
                        TrueSite est une startup innovante spécialisée dans les solutions numériques modernes pour
                        les entreprises. Notre mission est de transformer vos idées en réalité grâce à des outils
                        technologiques avancés et un support client de qualité.
                    </p>
                </div>
    
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-uppercase mb-3">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="about">À propos</a></li>
                        <li><a href="service">Services</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
    
                <!-- Contact Information -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase mb-3">Contact</h5>
                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Poste centrale , Yaounde , Cameroun</p>
                    <p class="mb-1"><i class="fas fa-phone-alt me-2"></i>+237 659 454 737 / 679 091 819</p>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i>contact@truesitetechnology.com</p>
                </div>
    
                <!-- Social Media Links -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase mb-3">Suivez-nous</h5>
                    <div>
                        <a href="#" class="btn btn-outline-light btn-sm me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
    
            <!-- Footer Bottom -->
            <div class="text-center mt-4">
                <p class="mb-0">&copy; 2025 TrueSite. Tous droits réservés.</p>
                <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
            </div>
        </div>
    </footer>
    
    <!-- Inclusion des scripts nécessaires pour Bootstrap (JavaScript) -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Script personnalisé pour basculer la classe "show" -->
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('#navbarCollapse');

            // Fonction pour basculer la navbar
            navbarToggler.addEventListener('click', () => {
                navbarCollapse.classList.toggle('show'); // Basculer l'état de 'show'
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('#navbarCollapse');
            const body = document.body;

            // Fonction pour basculer la navbar
            navbarToggler.addEventListener('click', () => {
                navbarCollapse.classList.toggle('show'); // Basculer l'état de 'show'
            });

            // Fermer la navbar si l'utilisateur clique en dehors
            body.addEventListener('click', (event) => {
                // Si le clic se produit en dehors de la navbar ou du bouton hamburger, fermer la navbar
                if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
                    navbarCollapse.classList.remove('show');
                }
            });
        });
    </script>
    
    
  <!-- JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- JavaScript Libraries -->
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template JavaScript -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>