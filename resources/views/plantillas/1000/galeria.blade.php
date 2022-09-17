@extends('plantillas.1000.admin')
@section('1000')
<section class="breadcrumbs-custom" style="margin-top: 150px !important">
        <div class="parallax-container" data-parallax-img="{{asset('themes/1000/images/bg-about.jpg')}}">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h1 class="breadcrumbs-custom-title">Nuestra Galeria</h1>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
    
              <li class="active">Grid Galeria</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Grid Gallery-->
      <section class="section section-xl bg-default">
        <div class="container isotope-wrap">
          
          <div class="row row-30 isotope" data-lightgallery="group">

            @foreach ($galeria as $item)
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2" >
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="{{asset('galeria/'.$item->imagen)}}" alt="" style="height: 250px !important"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                        <h5 class="thumbnail-classic-title"><a href="#">ZOOM</a></h5>
                        <div class="thumbnail-classic-button-wrap">
                            <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{asset('galeria/'.$item->imagen)}}" data-lightgallery="item"><img src="{{asset('galeria/'.$item->imagen)}}" alt="" width="370" height="315"/></a></div>
                        </div>
                        </div>
                    </div>
                    </article>
                </div>
            @endforeach
           
          </div>

            <div class="row">
                <div class="col-lg-12">
                    {{$galeria->render()}}
                </div>
            </div>

        </div>
      </section>
@endsection