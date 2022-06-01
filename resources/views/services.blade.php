<x-web-layout>
     <x-slot name="twittercard">
   </x-slot>
   <x-slot name="seo"></x-slot>
    @if(request()->routeIs('services'))

     <x-slot name="title">
        Servicios
    </x-slot>


         <x-slot name="description">
        Nuestra oferta tecnológica está agrupada en tres grandes lineas: Innovación, Transformación Digital y FastClínica.
    </x-slot>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Servicios</li>
                </ol>
                <h2>Tenemos varias opciones para comenzar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <p class="text-center">Nuestro portafolio de servicios está enfocado a potenciar la innovación y la
                    transformación digital. Lo hemos resumido en estas tres opciones, para que usted tome la mejor
                    opción de las mismas y comencemos a trabajar:</p>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-analyse"></i></div>
                            <h4><a href="{{route('innovation')}}">Gestión de Innovación</a></h4>
                            <p>Construimos y lideramos un equipo para el desarrollo de proyectos de innovación
                                intraempresarial.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxs-devices"></i></div>
                            <h4><a href="{{route('digital-transformation')}}">Transformación Digital</a></h4>
                            <p>Hacemos plataformas web, colaborativas, de innovación abierta, para el sector
                                farmacéutico y de salud</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-plus-circle"></i></div>
                            <h4><a href="https://fastclinica.com" target="blank">FastClínica</a></h4>
                            <p>Nuestro software colaborativo de gestión de Clínicas y Hospitales en la nube</p>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Services Section -->
        @elseif(request()->routeIs('innovation'))

 <x-slot name="title">
        Innovación
    </x-slot>

     <x-slot name="description">
        Innovamos en conjunto con las empresas en crecimiento, o grandes compañías que busquen solucionar necesidades hacia dentro y con sus clientes.
    </x-slot>

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Servicios</a></li>
                        <li>Innovación</li>
                    </ol>
                    <h2>¿Cómo vamos a crecer hoy?</h2>

                </div>
            </section><!-- End Breadcrumbs -->

            <section id="about" class="about">
                <div class="container">

                    <div class="row gy-4">
                        <div class="col-lg-6 content">
                            <h2 class="animate__animated animate__fadeInDown">Innovar <span class="color-phe">tiene una
                                    fórmula mágica</span></h2>
                            <p class="animate__animated animate__fadeInLeft">Hace algún tiempo se creía que los que
                                sabían innovar tenían una fórmula mágica para presentar al mercado productos y servicios
                                cada vez mejores.</p>
                            <p class="animate__animated animate__fadeInLeft">Hoy en día sabemos que sí tiene una
                                fórmula, y queremos presentársela como tal. Así que comencemos:</p>
                            <p class="animate__animated animate__fadeInLeft"><b>Ingredientes:</b></p>
                            <ul class="animate__animated animate__fadeInLeft">
                                <li><i class="bi bi-check-circle"></i> Una necesidad del modelo o del negocio.</li>
                                <li><i class="bi bi-check-circle"></i> Un equipo de trabajo comprometido.</li>
                                <li><i class="bi bi-check-circle"></i> Un plan de desarrollo para cumplir el objetivo.
                                </li>
                            </ul>


                        </div>
                        <div class="col-lg-6">
                            <img src="/innovation_1.svg" class="img-fluid">
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="container">
                        <h2 class="pb-3 pt-2 border-bottom mb-5"><b>El paso a paso <span class="color-phe">de la
                                    innovación</span></b></h2>
                        <!--first section-->
                        <div class="row align-items-center how-it-works d-flex">
                            <div
                                class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">1</div>
                            </div>
                            <div class="col-6">
                                <h5>Evaluar las necesidades del cliente</h5>
                                <p>En unas reuniones para conceptualización, realizaremos una presentación de la
                                    necesidad específica, y el resultado del <b>Benchmarking</b> la <b>Vigilancia
                                        Tecnológica</b> para plantear un objetivo.</p>
                            </div>
                        </div>
                        <!--path between 1-2-->
                        <div class="row timeline">
                            <div class="col-2">
                                <div class="corner top-right"></div>
                            </div>
                            <div class="col-8">
                                <hr />
                            </div>
                            <div class="col-2">
                                <div class="corner left-bottom"></div>
                            </div>
                        </div>
                        <!--second section-->
                        <div class="row align-items-center justify-content-end how-it-works d-flex">
                            <div class="col-6 text-right">
                                <h5>Conformar un equipo de alto rendimiento</h5>
                                <p>Definimos los roles necesarios para llevar a cabo el proyecto. Evaluamos en conjunto
                                    con el cliente el talento humano interno, y proponemos hojas de vida de expertos en
                                    los temas para conformar el equipo adecuado.</p>
                            </div>
                            <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">2</div>
                            </div>
                        </div>
                        <!--path between 2-3-->
                        <div class="row timeline">
                            <div class="col-2">
                                <div class="corner right-bottom"></div>
                            </div>
                            <div class="col-8">
                                <hr />
                            </div>
                            <div class="col-2">
                                <div class="corner top-left"></div>
                            </div>
                        </div>
                        <!--third section-->
                        <div class="row align-items-center how-it-works d-flex">
                            <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">3</div>
                            </div>
                            <div class="col-6">
                                <h5>Crear y ejecutar un plan de trabajo</h5>
                                <p>Con el equipo, y mediante reuniones sucesivas, creamos un plan de trabajo y un
                                    cronograma para el mismo. Lideramos la ejecución y hacemos seguimientos periódicos
                                    para ver qué tan cerca estamos de la meta.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr />
                    <div class="section-title mt-4">
                        <h2>¿Cómo comenzamos?</h2>
                        <p>Hemos dispuesto un pequeño formulario para que nos indique las necesidades de la compañía y
                            podamos comenzar a trabajar juntos.</p>

                    </div>
                    <div class='container shadow p-4'>
                        @livewire('sitioweb.form-innovacion')
                    </div>

                </div>
            </section><!-- End Portfolio Details Section -->


        </main>

        @elseif(request()->routeIs('digital-transformation'))

 <x-slot name="title">
       Transformación Digital
    </x-slot>

         <x-slot name="description">
        Ofrecemos modelos de optimización y fortalecimiento de procesos mediante la sistematización, automatización y organización.
    </x-slot>

        <main id="main">

        

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Servicios</a></li>
                        <li>Transformación digital</li>
                    </ol>
                    <h2>Fortalecer sus procesos, automatizando y organizando lo esencial.</h2>

                </div>
            </section><!-- End Breadcrumbs -->


            <section id="about" class="about">
                <div class="container">

                    <div class="row gy-4">
                        <div class="col-lg-6 content">
                            <h2 class="animate__animated animate__fadeInDown">Nuestro ERP <span
                                    class="color-phe">altamente personalizable</span></h2>
                            <p class="animate__animated animate__fadeInLeft">Sabemos que la tecnología es el aliado más
                                importante del crecimiento de las empresas. Por esto decidimos generar una herramienta,
                                que más que un software, es un concepto de desarrollo que permite disminuir los costos
                                de la digitalización y el uso de las tecnologías.</p>
                            <p class="animate__animated animate__fadeInLeft">Nuestro modelo mezcla tres principios
                                básicos que brindan la posibilidad de obtener un producto costo-efectivo, con tiempos
                                cortos de implementación y desarrollo, y utilizable por el 100% de las organizaciones
                                productivas.</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="/pharmaerp.svg" class="img-fluid">
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="container">
                        <h2 class="pb-3 pt-2 border-bottom mb-5"><b>Pilares del modelo ERP <span class="color-phe">de
                                    Pharmaceutical Experts</span></b></h2>
                        <!--first section-->

                        <section id="featured" class="featured">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="icon-box">
                                            <i class="bi bi-calendar2-week"></i>
                                            <h3><a href="">Modelo de desarrollo ágil</a></h3>
                                            <p>Basamos nuestro modelo de desarrollo en las metodologías AGILE y SCRUM,
                                                lo que nos permite ir desarrollando software que puede ser utilizado
                                                desde etapa temprana, con áltos estándares de calidad.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-4 mt-lg-0">
                                        <div class="icon-box">
                                            <i class="bi bi-columns-gap"></i>
                                            <h3><a href="">Código Open Source</a></h3>
                                            <p>Utilizamos tecnología open source para nuestros desarrollos. A su vez, el
                                                modelo de licenciamiento utilizado nos permite reusar código para
                                                procesos similiares en diferentes clientes, sin comprometer la
                                                especificidad del modelo de negocio, lo cual disminuye los costos.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-4 mt-lg-0">
                                        <div class="icon-box">
                                            <i class="bi bi-ui-checks-grid"></i>
                                            <h3><a href="">Experiencia del Usuario</a></h3>
                                            <p>Basamos nuestros desarrollos en un trabajo coordinado entre el equipo del
                                                clíente, nuestro equipo de Químicos Farmacéuticos y desarrolladores,
                                                para asegurar que nuestro software aporte en la optimización de sus
                                                procesos.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>




                    </div>

                    <section class="our-blog p-0 m-0 bg-silver">
    <div class="container work-process  pb-5 pt-5">
              <h2 class="pb-3 pt-2 border-bottom mb-5"><b>Pasos del modelo <span class="color-phe">de Desarrollo</span></b></h2>
    </div>
        <!-- ============ step 1 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Paso</p>
                                <h2 class="m-0 p-0">01</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Propuesta de Desarrollo</h5>
                            <p><small>Su empresa y nuestro equipo realizan una reunión para evaluar la propuesta de desarrollo tecnológico. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 2 =========== -->
        <div class="row">
            
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Paso</p>
                                <h2 class="m-0 p-0">02</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Generación de un plan de trabajo</h5>
                            <p><small>Su necesidad es transformada por pares farmacéutico-desarrollador en un plan de trabajo basados en experiencia del usuario. </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>

        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Paso</p>
                                <h2 class="m-0 p-0">03</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Montaje y pruebas</h5>
                            <p><small>Durante la implementación, se realizan pruebas de funcionalidad y usabilidad y se retroalimenta a nuestro equipo para mejoras.</small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 4 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Paso</p>
                                <h2 class="m-0 p-0">04</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Entrega del producto</h5>
                            <p><small>Configuramos el módulo creado/modificado en la interfase de producción del cliente.</small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>
            
            
        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">05</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Mejoras menores</h5>
                            <p><small>Posterior a la entrega, se revisan propuestas de modificaciones menores para optimizar el trabajo.</small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right process-last"></div>
            </div>
        </div>
        <!-- ============ -->
    </div>
</section>





                    <div class="container">
                     
                        <h2 class="pb-3 pt-2 border-bottom mb-5"><b>Precios de membresía  <span class="color-phe">del modelo ERP</span></b></h2>



                            <section id="pricing" class="pricing">
                                <div class="container">

                                    <div class="row no-gutters">

                                        <div class="col-lg-4 box">
                                            <h3>PYMEs</h3>
                                            <h4>$299.900<span>+ IVA ppor mes</span></h4>
                                            <ul>
                                                <li><i class="bx bx-check"></i> Acceso a instalar y usar módulos abiertos</li>
                                                <li><i class="bx bx-check"></i> Soporte vía whatsapp/tickets en horario de oficina</li>
                                                <li><i class="bx bx-check"></i> Hosting de archivos/registros hasta por 10GB</li>
                                                <li class="na"><i class="bx bx-x"></i> <span>Personalización de módulos abiertos</span></li>
                                                <li class="na"><i class="bx bx-x"></i> <span>Creación de Módulos personalizados exclusivos</span></li>
                                            </ul>
                                            <a href="#" class="buy-btn">Adquirir</a>
                                        </div>

                                        <div class="col-lg-4 box featured">
                                            <h3>Crecimiento</h3>
                                            <h4>$499.900<span>+ IVA por mes</span></h4>
                                            <ul>
                                                           <li><i class="bx bx-check"></i> Acceso a instalar y usar módulos abiertos</li>
                                                <li><i class="bx bx-check"></i> Soporte vía whatsapp/tickets/videollamada en horario de oficina</li>
                                                <li><i class="bx bx-check"></i> Hosting de archivos/registros hasta por 50GB</li>
                                                <li><i class="bx bx-check"></i> <span>Personalización de módulos abiertos (1 al mes)</span></li>
                                                <li class="na"><i class="bx bx-x"></i> <span>Creación de Módulos personalizados exclusivos</span></li>
                                            </ul>
                                            <a href="#" class="buy-btn">Adquirir</a>
                                        </div>

                                        <div class="col-lg-4 box">
                                            <h3>Grandes Empresas</h3>
                                            <h4>$999.900<span>+ IVA ppor mes</span></h4>
                                              <ul>
                                                           <li><i class="bx bx-check"></i> Acceso a instalar y usar módulos abiertos</li>
                                                <li><i class="bx bx-check"></i> Soporte vía whatsapp/tickets/videollamada en horario de oficina</li>
                                                <li><i class="bx bx-check"></i> Hosting de archivos/registros hasta por 50GB</li>
                                                <li><i class="bx bx-check"></i> <span>Personalización de módulos abiertos (3 al mes)</span></li>
                                                <li><i class="bx bx-check"></i> <span>Creación de Módulos personalizados exclusivos (1 al mes)</span></li>
                                            </ul>
                                            <a href="#" class="buy-btn">Adquirir</a>
                                        </div>

                                    </div>

                                </div>
                            </section>
                        </div>
                       
            </section><!-- End Portfolio Details Section -->


        </main>

        @endif
</x-web-layout>
