@extends('plantillas.1001.admin')

@section('1001')

<section id="portfolio" class="section-bg">

    <div class="container" style="margin-top: 90px !important">

        <header class="section-header" style="margin-bottom: 60px">
            <h3 class="section-title">Galeria</h3>
        </header>

        <div class="row portfolio-container" style="position: relative; height: 1080px;">

            @foreach ($galeria as $item)


            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp"
                style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('galeria/'.$item->imagen)}}" class="img-fluid"
                        style="height: 250px; width:100%">
                        <a href="{{asset('galeria/'.$item->imagen)}}" data-lightbox="portfolio" data-title="App 1"
                            class="link-preview" title="Vista previa" style="margin-left:25px !important; "><i class="ion ion-eye"></i></a>
                        <!--<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
                    </figure>

                </div>
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