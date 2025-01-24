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
  <section id="sub-hero" class="d-flex align-items-center text-center">
    <div class="overlay"></div>
    <div class="container position-relative">
        <h1 class="fw-bold text-secondary">Nous Contacter</h1>
    </div>
  </section>

  <!-- Contact Début -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
          <h5 class="fw-bold text-primary text-uppercase">Nous Contacter</h5>
          <h1 class="mb-0">N'hésitez pas à nous envoyer un message dès maintenant !</h1>
      </div>
      <div class="row g-5">
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
              <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon bg-secondary">
                      <i class="fa fa-phone text-white"></i>
                  </div>
                  <h4 class="mb-3">Téléphone</h4>
                  <p class="m-0">Contactez-nous par téléphone pour toute demande ou assistance rapide.</p>
                  <a href="#" class="text-secondary">659  454 737 / 670 971 434 / 679 091 819</a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
              <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon bg-secondary">
                      <i class="fa fa-envelope text-white"></i>
                  </div>
                  <h4 class="mb-3">Email</h4>
                  <p class="m-0">Envoyez-nous un courriel et nous vous répondrons dès que possible.</p>
                  <a href="mailto:contact@truesitetechnology.com" class="text-secondary">contact@truesitetechnology.com</a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
              <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="service-icon bg-secondary">
                      <i class="fa fa-map-marker text-white"></i>
                  </div>
                  <h4 class="mb-3">Localisation</h4>
                  <p class="m-0">Retrouvez-nous au cœur de Yaoundé, près de la Poste Centrale.</p>
                  <a href="#map" class="text-secondary">Voir sur Google Maps</a>
              </div>
          </div>
      </div>
  </div>
</div>

@if(session('success') || session('error'))
    <div class="alert {{ session('success') ? 'alert-success' : 'alert-error' }}">
        <span>{{ session('success') ?? session('error') }}</span>
        <button class="close-btn" onclick="this.parentElement.remove()">Fermer</button>
    </div>
@endif



<div class="callback-form contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Envoyez-nous un <em>message</em></h2>
                    <span>Nous sommes toujours disponibles pour répondre à vos besoins.</span>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="contact-form">
                    <form method="POST" action="{{route('user.contact')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="name" name="nom" required>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label for="phone" class="form-label">Telepone</label>
                                <input type="phone" class="form-control" id="phone" name="telephone" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
  

<div id="map" class="my-3">
  <iframe src="https://maps.google.com/maps?q=Poste%20Centrale%20Yaound%C3%A9&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- Contact Fin -->


    @endsection
