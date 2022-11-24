@extends('plantillas.1001.admin')

@section('1001')

<section id="about">

    <div class="container" style="margin-top: 90px !important">

        <header class="section-header">
            <h3>Nuestro Blog</h3>

        </header>

        <div class="row about-cols" style="margin-top: 50px !important">

            @foreach ($blog as $item)
            <div class="col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <a href="http://127.0.0.1:8000/century21lacunza.com/contenido/pagina/blog/{{$item->slug}}">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('blog/'.$item->imagen)}}" style="width: 100%; height: 250px;"
                                class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="http://127.0.0.1:8000/century21lacunza.com/contenido/pagina/blog/{{$item->slug}}">{{$item->titulo}}</a></h2>
                        <p style="text-align: center;">
                            {{$item->excerpt}}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="row" style="margin-top:20px !important">
            <div class="col-lg-12">
                {{$galeria->render()}}
            </div>
        </div>

    </div>
</section>
@endsection