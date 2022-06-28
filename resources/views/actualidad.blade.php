@if(isset($post))
<x-web-layout>
 <x-slot name="title">
        {{$post['titulo']}}
    </x-slot>

     <x-slot name="description">
     {{$post->heading}}
           </x-slot>
           <x-slot name="twittercard">
           <meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{$post['titulo']}}">
<meta name="twitter:site" content="@PharmaceuticalE">
<meta name="twitter:description" content="{{$post['heading']}}">
<meta name="twitter:image" content="https://pharmaceuticalexperts.com.co/{{$post['imagen']}}">
<meta name="twitter:image:alt" content="{{$post['titulo']}}">

<meta property="og:type" content="article">
<meta property="og:title" content="{{$post['titulo']}}">
<meta property="og:url" content="https://pharmaceuticalexperts.com.co/actualidad/{{$post['slug']}}">
<meta property="og:image" content="https://pharmaceuticalexperts.com.co/{{$post['imagen']}}">
<meta property="og:description" content="{{$post['heading']}}">
<meta property="article:author" content="{{$post->Autor->name}}">
<meta property="article:published_time" content="{{$post['fecha_publicacion']}}">
           </x-slot>

             <x-slot name="seo">
             {
  "@context": "http://schema.org/",
  "@type": "Article",
  "author": {
    "@type": "Person",
    "name": "{{$post->Autor->name}}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Pharmaceutical Experts",
    "logo": {
      "@type": "ImageObject",
      "url": "https://pharmaceuticalexperts.com.co/logophe.png"
    }
  },
  "headline": "{{$post->heading}}",
  "image": "https://pharmaceuticalexperts.com.co/{{$post->imagen}}",
  "datePublished": "{{$post->fecha_publicacion}}"
}
           </x-slot>


<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Inicio</a></li>
          <li><a href="{{route('actualidad')}}">Actualidad</a></li>
        </ol>
        <h2>{{$post->titulo}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row align-items-center">

          <div class="col-lg-10 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{$post->imagen}}" alt="" class="img-fluid w-100">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$post->titulo}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{$post->Autor->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{$post->fecha_publicacion}}">{{$post->fecha_publicacion->DiffForHumans()}}</time></a></li>

                </ul>
              </div>

              <div class="entry-content">
                {!!$post->contenido!!}

              </div>

              
            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="{{$post->Autor->profile_photo_url}}" class="rounded-circle float-left" alt="">
              <div>
                <h4>{{$post->Autor->name}}</h4>
                <div class="social-links">
                  <a href="{{$post->Autor->twitter}}"><i class="bi bi-twitter"></i></a>
                  <a href="{{$post->Autor->linkedin}}"><i class="bi bi-linkedin"></i></a>
                                 </div>
                <p>
                  {{$post->Autor->mini_bio}}
                </p>
              </div>
            </div><!-- End blog author bio -->

            

          </div><!-- End blog entries list -->

          
      </div>
    </section><!-- End Blog Single Section -->



</x-web-layout>
@else
<x-web-layout>

 <x-slot name="title">
        Actualidad
    </x-slot>
   <x-slot name="twittercard">
   </x-slot>
   <x-slot name="seo"></x-slot>
     <x-slot name="description">
      Encuentra en nuestro blog noticias y actualidad del sector farmacéutico que puedan ser relevantes para su transformación digital e innovación.
           </x-slot>

             <x-slot name="seo">
           </x-slot>

  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Actualidad</li>
        </ol>
        <h2>Mantente al día con la innovación y la transformación tecnológica del sector</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">
          <div class='row'>

@foreach($blogs as $item)
            <article class="entry col-lg-4 rounded">

              <div class="entry-img">
                <img src="{{$item->imagen}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{route('post',$item->slug)}}">{{$item->titulo}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{route('post',$item->slug)}}">{{$item->Autor->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{route('post',$item->slug)}}"><time datetime="{{$item->fecha_publicacion}}">{{$item->fecha_publicacion->DiffForHumans()}}</time></a></li>

                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {{$item->heading}}
                </p>
                <div class="read-more">
                  <a href="{{route('post',$item->slug)}}">Ver más</a>
                </div>
              </div>

            </article><!-- End blog entry -->

         @endforeach

</div>


            <div class="blog-pagination">
              {{ $blogs->links() }}
            </div>

          </div><!-- End blog entries list -->

         </div>
      </div>
    </section><!-- End Blog Section -->

 

</x-web-layout>

@endif