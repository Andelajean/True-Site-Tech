@extends('layouts.cother')
@section('content')
<!-- Section Héro -->
<section id="sub-hero" class="d-flex align-items-center text-center">
    <div class="overlay"></div>
    <div class="container position-relative">
        <h1 class="fw-bold text-secondary">Nos Services</h1>
        <p class="lead">Découvrez nos solutions personnalisées pour répondre à vos besoins technologiques.</p>
    </div>
</section>

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
                            <img src="{{asset('img/cybersecurite.jpeg')}}" alt="" class="img-fluid mx-0" style="height: 300px; background-size: cover;">
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
                            <img src="{{asset('img/analyse.jpeg')}}" alt="" class="img-fluid mx-0" style="height: 300px; background-size: cover;">
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
                            <img src="{{asset('img/devweb.jpeg')}}" alt="" class="img-fluid" style="height: 300px; width:1000px; background-size: cover;">
                        </div>
                        <div class="modal-body">
                            Nous concevons des applications Web modernes et performants adaptés à vos besoins spécifiques, disponiles sur les plateformes et tout appareil.
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
                            <h5 class="modal-title" id="mobileModalLabel">Développement Mobile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <img src="{{asset('img/mobile.jpeg')}}" alt="" class="img-fluid" style="background-size: cover; width: 2000px">
                        </div>
                        <div class="modal-body">
                            Nous concevons des applications mobiles disponiles sur les plateformes iOS et Android.
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
                            <img src="{{asset('img/design.jpeg')}}" alt="" class="img-fluid mx-0" style=" background-size: cover;">
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
                            <img src="{{asset('img/marketing.jpeg')}}" alt="" class="img-fluid mx-0" style="width: 2000px; background-size: cover;">
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
