@extends('layouts.cindex')

@section('content')
 
<section id="hero" class="d-flex align-items-center text-center">
    <div class="overlay"></div>
    <div class="container position-relative">
        <h1 class="display-3 fw-bold text-light mb-5">Bienvenue chez <span class="text-light">TrueSite technology</span></h1>
        
        <a href="service"> <button class="btn btn-primary btn-lg shadow-sm me-3 mb-2">En savoir plus</button> </a>
        <a href="contact"> <button class="btn btn-outline-light btn-lg shadow-sm mb-2">Nous contacter</button> </a>
    </div>
</section>

<!-- Statistiques Début -->
<div class="container-fluid facts my-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-secondary"></i>
                    </div>
                <div class="ps-4">
                    <h5 class="text-white mb-0">Projets réalisés</h5>
                    <h1 class="text-white mb-0" data-toggle="counter-up">40</h1>
                </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                <div class="ps-4">
                    <h5 class="text-secondary mb-0">Clients satisfaits</h5>
                    <h1 class="mb-0" data-toggle="counter-up">300</h1>
                </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-secondary"></i>
                    </div>
                <div class="ps-4">
                    <h5 class="text-white mb-0">Années d'expérience</h5>
                    <h1 class="text-white mb-0" data-toggle="counter-up">4</h1>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Statistiques Fin -->

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
                
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" 
                    data-wow-delay="0.9s" src="{{asset('img/noirs4.jpeg')}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- À propos Fin -->


    <!-- Fonctionnalités Début -->
<div class="container-fluid py-5 wow fadeInUp bg-secondary" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Nos Objectifs</h5>
            <h1 class="mb-0">Nous sommes là pour développer votre entreprise de manière exponentielle</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Le Meilleur du Secteur</h4>
                        <p class="mb-0">Nous offrons des solutions innovantes et fiables qui répondent à vos attentes, avec un engagement envers l'excellence.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Récompenses de Prestige</h4>
                        <p class="mb-0">Notre travail a été reconnu par des institutions de renom, confirmant la qualité de nos services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" 
                        src="{{asset('img/presentation.jpeg')}}" style="object-fit: cover;">
                </div>
            </div> 
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Équipe Professionnelle</h4>
                        <p class="mb-0">Notre équipe est composée d'experts compétents et passionnés, prêts à relever tous les défis.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>Support Disponible 24/7</h4>
                        <p class="mb-0">Nous sommes disponibles à tout moment pour répondre à vos besoins et vous offrir une assistance rapide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Fonctionnalités Fin -->

<!-- Début des Services -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Nos Services</h5>
            <h1 class="mb-0">Des solutions informatiques sur mesure pour la réussite de votre entreprise</h1>
        </div>
        <div class="row g-5">
            <!-- Service : Cybersécurité -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Cybersécurité</h4>
                    <p class="m-0">Protégez vos données sensibles et sécurisez vos systèmes contre les menaces numériques.</p>
                    <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#cybersecurityModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal pour Cybersécurité -->
            <div class="modal fade" id="cybersecurityModal" tabindex="-1" aria-labelledby="cybersecurityModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cybersecurityModalLabel">Cybersécurité</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/cybersecurite.jpeg')}}" alt="" class="img-fluid mx-2">
                        </div>
                        <div class="modal-body">
                            Nous proposons des solutions de cybersécurité avancées pour protéger vos systèmes contre les cyberattaques. Cela inclut la surveillance en temps réel, la gestion des pare-feu, et des formations en sécurité.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service : Analyse de Données -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3">Analyse de Données</h4>
                    <p class="m-0">Exploitez vos données pour prendre des décisions éclairées et stratégiques.</p>
                    <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#dataAnalysisModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal pour Analyse de Données -->
            <div class="modal fade" id="dataAnalysisModal" tabindex="-1" aria-labelledby="dataAnalysisModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dataAnalysisModalLabel">Analyse de Données</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/analyse.jpeg')}}" alt="" class="img-fluid mx-2">
                        </div>
                        <div class="modal-body">
                            Nos experts analysent vos données pour découvrir des tendances et des insights précieux, vous permettant de mieux comprendre votre marché et de prendre des décisions stratégiques.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Service : Développement web -->
             <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3">Développement web</h4>
                    <p class="m-0">Créez des sites web modernes et performants adaptés à vos besoins spécifiques.</p>
                    <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#webModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal pour Développement web -->
            <div class="modal fade" id="webModal" tabindex="-1" aria-labelledby="webModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="webModalLabel">Développement Web</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/design.jpeg')}}" alt="" class="img-fluid mx-3" style="height: 300px; width: 470px;">
                        </div>
                        <div class="modal-body">
                            Nous proposons des solutions de cybersécurité avancées pour protéger vos systèmes contre les cyberattaques. Cela inclut la surveillance en temps réel, la gestion des pare-feu, et des formations en sécurité.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service : Développement mobile -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3">Développement Mobile</h4>
                    <p class="m-0">Développez des applications mobiles performantes pour iOS et Android.</p>
                    <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#mobileModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal pour Développement mobile -->
            <div class="modal fade" id="mobileModal" tabindex="-1" aria-labelledby="mobileModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mobileModalLabel">Cybersécurité</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/mobile.jpeg')}}" alt="" class="img-fluid mx-2">
                        </div>
                        <div class="modal-body">
                            Nous proposons des solutions de cybersécurité avancées pour protéger vos systèmes contre les cyberattaques. Cela inclut la surveillance en temps réel, la gestion des pare-feu, et des formations en sécurité.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service : Design -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-paint-brush text-white"></i>
                    </div>
                    <h4 class="mb-3">Design Graphique</h4>
                    <p class="m-0">Améliorez votre identité visuelle grâce à des designs attrayants et professionnels.</p>
                    <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#designModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal pour Design  -->
            <div class="modal fade" id="designModal" tabindex="-1" aria-labelledby="designModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="designModalLabel">Design Graphique</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/design.jpeg')}}" alt="" class="img-fluid mx-0">
                        </div>
                        <div class="modal-body">
                            Nos services de design graphique incluent la création de logos, de brochures, de bannières, et bien plus encore, pour donner une identité visuelle forte et attrayante à votre marque.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Service : marketing -->
             <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-bullhorn text-white"></i>
                    </div>
                    <h4 class="mb-3">Marketing Digital</h4>
                    <p class="m-0">Déployez des stratégies digitales efficaces pour atteindre et engager votre audience.</p>
                    <a class="btn btn-lg btn-primary rounded" data-bs-toggle="modal" data-bs-target="#marketingModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal pour marketing  -->
            <div class="modal fade" id="marketingModal" tabindex="-1" aria-labelledby="marketingModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="marketingModalLabel">marketing Graphique</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/marketing.jpeg')}}" alt="" class="img-fluid mx-2">
                        </div>
                        <div class="modal-body">
                            Nos services de marketing digital incluent la gestion des réseaux sociaux, le SEO, les campagnes publicitaires en ligne, et bien plus encore.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</div>
<!-- Fin des Services -->
@endsection




