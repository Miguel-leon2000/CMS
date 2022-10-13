@extends('plantillas.1000.admin')
@section('1000')

<!-- Section Shop-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row row-50 row-md-60">
            <div class="col-lg-12 col-xl-12">
                <div class="inset-xl-right-100">
                    <div class="row row-50 row-md-60 row-lg-80">
                        <div class="col-12">
                            <article class="post post-modern box-xxl">
                                <div class="post-modern-panel">

                                </div>
                                <h3 class="post-modern-title" style="margin-top: 130px !important;">{{$entrada->titulo}}
                                </h3>

                        </div>
                        <p class="post-modern-text">
                            <?php echo $entrada->contenido?></p>

                        </article>
                        <!-- Quote Classic-->


                    </div>



                </div>
            </div>
        </div>

    </div>
    </div>
</section>

@endsection