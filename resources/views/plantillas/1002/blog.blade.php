@extends('plantillas.1002.admin')
@section('1002')
<section class="section breadcrumb-classic context-dark" style="background:#0d2d62 !important">
    <div class="container">
      <h3>Blog</h3>
      
    </div>
  </section>
  <div id="fb-root"></div>
  <!-- Latest news-->
  <section class="section section-xl bg-catskill">
    <div class="container">
      <div class="row row-30 text-md-left justify-content-sm-center">

        @foreach ($blog as $item)
        <div class="col-md-6 col-lg-4">
            <article class="post-news post-news-wide"><a href="http://127.0.0.1:8000/midominioweb/contenido/pagina/blog/{{$item->slug}}"><img class="img-responsive" src="{{asset('blog/'.$item->imagen)}}" style="width:700px !important; height:255px !important"></a>
              <div class="post-news-body">
                <h6><a href="http://127.0.0.1:8000/midominioweb/contenido/pagina/blog/{{$item->slug}}">{{$item->titulo}}</a></h6>
                <div class="offset-top-20">
                  <p>{{$item->excerpt}}</p>
                </div>
                <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 font-italic text-black">2 days ago</span></div>
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