<x-web-layout>

 <x-slot name="title">
        Inicio
    </x-slot>
     <x-slot name="twittercard">
   </x-slot>
   <x-slot name="seo"></x-slot>

         <x-slot name="description">
        Llevamos la transformación digital al alcance de las empresas del sector farmacéutico y salud colombiano.
    </x-slot>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Farmacéuticos <span>que innovan</span></h2>
                <p class="animate__animated animate__fadeInUp">Un equipo multidisciplinario liderado por farmacéuticos que pueden ayudar a tu empresa a desarrollar proyectos de innovación.</p>
                <a href="{{route('innovation')}}" class="btn-get-started animate__animated animate__fadeInUp">Conoce cómo</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Tecnología <span>colaborativa</span></h2>
                <p class="animate__animated animate__fadeInUp">Nuestra propuesta es crear un ERP que agrupe las buenas prácticas de la industria farmacéutica colombiana con el fin de apoyar los procesos del ecosistema farmacéutico y hacer asequible la transformación digital.</p>
                <a href="{{route('digital-transformation')}}" class="btn-get-started animate__animated animate__fadeInUp">Estudia nuestra propuesta</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Salud <span>Integral</span></h2>
                <p class="animate__animated animate__fadeInUp">Nuestro software de FastClínica unifica e integra las necesidades administrativas y asistenciales de las IPS y las Redes de Prestadores.</p>
                <a href="https://fastclinica.com" target="blank" class="btn-get-started animate__animated animate__fadeInUp">Ve al sitio web de FastClínica</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <div class='container'>

    <div class='row gx-5 align-items-center mb-4 pb-4'>
      <div class='col-lg-3'>
      <img src='/img/insignia_1.jpg' class='img-fluid'>
      </div>
      <div class='col-lg-3'>
      <img src='/img/insignia_2.jpg' class='img-fluid'>
      </div>

    </div>

  </div>




</x-web-layout>
