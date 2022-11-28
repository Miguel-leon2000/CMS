@extends('plantillas.1001.admin')

@section('1001')

<!--==========================
    Intro Section
  ============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{asset('sliders/'.$slider[0]->imagen)}}"
                            style="filter: brightness(150%)" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>{{$slider[0]->titulo}}</h2>
                        </div>
                    </div>
                </div>

                @foreach($slider as $item)
                @if($item->id != $slider[0]->id)
                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{asset('sliders/'.$item->imagen)}}"
                            style="filter: brightness(150%)" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>{{$item->titulo}}</h2>
                        </div>
                    </div>
                </div>
                @endif

                @endforeach


            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      Featured Services Section
    ============================-->


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>{{$seccion_uno->titulo}}</h3>

            </header>

            <div class="row about-cols" style="margin-top:50px !important">

                <div class="col-md-6 wow fadeInUp">
                    <img src="{{asset('secciones/'.$seccion_uno->imagen)}}" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="word-wrap: break-word;">
                    <p><?php echo $seccion_uno->descripcion?></p>
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->

    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Nuestro Blog</h3>

            </header>

            <div class="row about-cols" style="margin-top: 50px !important">

                @foreach ($blog_index as $item)
                <div class="col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('blog/'.$item->imagen)}}" style="width: 100%; height: 250px;"
                                class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a
                                href="http://127.0.0.1:8000/century21lacunza.com/contenido/pagina/blog/{{$item->slug}}">{{$item->titulo}}</a>
                        </h2>
                        <p style="text-align: center;">
                            {{$item->excerpt}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>{{$seccion_dos->titulo}}</h3>

            </header>

            <div class="row about-cols" style="margin-top:50px !important">

                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="word-wrap: break-word;">
                    <p><?php echo $seccion_dos->descripcion?></p>
                </div>

                <div class="col-md-6 wow fadeInUp">
                    <img src="{{asset('secciones/'.$seccion_dos->imagen)}}" style="width:100%">
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header" style="margin-bottom: 50px !important">
                <h3 class="section-title">Propiedades</h3>
            </header>

            

                <div class="row portfolio-container" style="position: relative; height: 1080px;">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                        style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('galeria/1669602015.jpg')}}" class="img-fluid"
                                    style="height: 250px; width:100%">
                                <a href="{{asset('galeria/1669602015.jpg')}}" data-lightbox="portfolio"
                                    data-title="Century 21 Lacunza & Asociados" class="link-preview"
                                    title="Vista previa"><i class="ion ion-eye"></i></a>
                                <a target="_blanck"
                                    href="https://www.century21lacunza.mx/p/4709549-Departamento-en-Venta-en-Fraccionamiento-Playa-Diamante-Av.-Costera-de-las-Palmas-Lote-H-8-B-Fraccionamiento,-Playa-Diamante"
                                    class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                            </figure>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                        style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('galeria/1668716974.jpg')}}" class="img-fluid"
                                    style="height: 250px; width:100%">
                                <a href="{{asset('galeria/1668716974.jpg')}}" data-lightbox="portfolio"
                                    data-title="Century 21 Lacunza & Asociados" class="link-preview"
                                    title="Vista previa"><i class="ion ion-eye"></i></a>
                                <a target="_blanck"
                                    href="https://www.century21lacunza.mx/p/4709370-Casa-en-Venta-en-Fraccionamiento-Las-Playas-Av.-Gran-Via-Tropical-565,-Las-Playas,-Acapulco"
                                    class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                            </figure>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                        style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('galeria/1668716999.jpg')}}" class="img-fluid"
                                    style="height: 250px; width:100%">
                                <a href="{{asset('galeria/1668716999.jpg')}}" data-lightbox="portfolio"
                                    data-title="Century 21 Lacunza & Asociados" class="link-preview"
                                    title="Vista previa"><i class="ion ion-eye"></i></a>
                                <a target="_blanck"
                                    href="https://www.century21lacunza.mx/p/4709616-Departamento-en-Venta-en-Granjas-del-Marqu%C3%A9s-Costera-De-Las-Palmas-al-100"
                                    class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                            </figure>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                        style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('galeria/1668717071.jpg')}}" class="img-fluid"
                                    style="height: 250px; width:100%">
                                <a href="{{asset('galeria/1668717071.jpg')}}" data-lightbox="portfolio"
                                    data-title="Century 21 Lacunza & Asociados" class="link-preview"
                                    title="Vista previa"><i class="ion ion-eye"></i></a>
                                <a target="_blanck"
                                    href="https://www.century21lacunza.mx/p/4681770-Casa-en-Venta-en-Quinta-Real-Villa-de-las-Aves-Seccion-II-18,-Quinta-Real,-Acapulco"
                                    class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                            </figure>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                        style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('galeria/1669602047.jpg')}}" class="img-fluid"
                                    style="height: 250px; width:100%">
                                <a href="{{asset('galeria/1669602047.jpg')}}" data-lightbox="portfolio"
                                    data-title="Century 21 Lacunza & Asociados" class="link-preview"
                                    title="Vista previa"><i class="ion ion-eye"></i></a>
                                <a target="_blanck"
                                    href="https://www.century21lacunza.mx/p/4709734-Departamento-en-Venta-en-Fraccionamiento-Costa-Azul-Av.-Crist%C3%B3bal-Col%C3%B3n-120,-Costa-Azul"
                                    class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                            </figure>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                        style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset('galeria/1669602112.jpg')}}" class="img-fluid"
                                    style="height: 250px; width:100%">
                                <a href="{{asset('galeria/1669602112.jpg')}}" data-lightbox="portfolio"
                                    data-title="Century 21 Lacunza & Asociados" class="link-preview"
                                    title="Vista previa"><i class="ion ion-eye"></i></a>
                                <a target="_blanck"
                                    href="https://www.century21lacunza.mx/p/4708763-Casa-en-Venta-en-Fraccionamiento-Condesa-Paraiso-43,-Condesa,-Acapulco"
                                    class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                            </figure>

                        </div>
                    </div>

                </div>
         

            <header class="section-header" style="margin-bottom: 60px">
                <h3 class="section-title">Desarrollos</h3>
            </header>

            <div class="row portfolio-container" style="position: relative; height: 1080px;">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                    style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('galeria/1668717156.jpg')}}" class="img-fluid"
                                style="height: 250px; width:100%">
                            <a href="{{asset('galeria/1668717156.jpg')}}" data-lightbox="portfolio"
                                data-title="Century 21 Lacunza & Asociados" class="link-preview" title="Vista previa"><i
                                    class="ion ion-eye"></i></a>
                            <a target="_blanck"
                                href="https://www.century21lacunza.mx/d/46009-AREZZA-BLUE-TOWERS---%C3%9Anico-Condominio-Vertical-en-Construcci%C3%B3n-a-Pie-de-Playa-en-Acapulco-de-Ju%C3%A1rez"
                                class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                        </figure>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                    style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('galeria/1668717183.jpg')}}" class="img-fluid"
                                style="height: 250px; width:100%">
                            <a href="{{asset('galeria/1668717183.jpg')}}" data-lightbox="portfolio"
                                data-title="Century 21 Lacunza & Asociados" class="link-preview" title="Vista previa"><i
                                    class="ion ion-eye"></i></a>
                            <a target="_blanck"
                                href="https://www.century21lacunza.mx/p/4681276-Casa-en-condominio-en-Venta-en-Plan-de-los-Amates-Carretera-Barra-Vieja,-Plan-de-Los-Amates-7,-Acapulco"
                                class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                        </figure>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                    style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('galeria/1668717132.jpg')}}" class="img-fluid"
                                style="height: 250px; width:100%">
                            <a href="{{asset('galeria/1668717132.jpg')}}" data-lightbox="portfolio"
                                data-title="Century 21 Lacunza & Asociados" class="link-preview" title="Vista previa"><i
                                    class="ion ion-eye"></i></a>
                            <a target="_blanck"
                                href="https://www.century21lacunza.mx/d/46114-AREZZA-SENIOR-ACTIVE-LIVING----Departamentos-que-ofrece-Grandes-Espacios-Verdes-Arbolados,-Amenidades-y-Servicios-Especializados-en-Acapulco-de-Ju%C3%A1rez"
                                class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a>
                        </figure>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Redes sociales</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                @foreach ($enlace as $item)
                <a href="{{$item->enlace}}" target="_blanck"><img src="{{asset('enlace/'.$item->imagen)}}" alt=""
                        style="width:80px !important"></a>
                @endforeach

            </div>

        </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Testimonios</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                @foreach ($equipo as $item)
                <div class="testimonial-item">
                    <img src="{{asset('equipo/'.$item->imagen)}}" class="testimonial-img" alt="">
                    <h3>{{$item->nombres}}
                    </h3>
                    <h4>{{$item->cargo}}</h4>
                </div>
                @endforeach

            </div>
            <p class="text-center" style="margin-top:25px; font-family:sans-serif">Asesores inmobiliarios profesionales
            </p>
        </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Nuestro equipo</h3>

            </div>

            <div class="row" style="margin-left:60px">

                @foreach ($equipo as $item)
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member" style="width:150px; background:transparent">
                        <img src="{{asset('equipo/'.$item->imagen)}}" class="img-fluid" style="border-radius:50%">
                        <div class="member-info" style="border-radius:50%">
                            <div class="member-info-content">
                                <h4 style="font-size:11px">{{$item->nombres}}</h4>
                                <span>{{$item->cargo}}</span>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- #team -->



</main>

@endsection