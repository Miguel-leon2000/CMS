@extends('plantillas.1001.admin')

@section('1001')

<section id="about">

    <div class="container" style="margin-top: 90px !important;">

        <header class="section-header">
            <h3>{{$entrada->titulo}}</h3>

        </header>

       <div class="row">
        <div class="col-lg-12">
            <?php echo $entrada->contenido?>
        </div>
       </div>

    </div>
</section>
@endsection