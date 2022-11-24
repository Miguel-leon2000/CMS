<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$general->titulo}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/ico" href="{{asset('general/'.$general->favicon)}}" sizes="any">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('themes/1001/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('themes/1001/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/1001/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/1001/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/1001/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/1001/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('themes/1001/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fuentes.css')}}" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

    <style>
    h3::after {
        background: #beaf87 !important;
    }

    div.icon {
        background: #beaf87 !important;
    }

    a.back-to-top {
        background: #beaf87 !important;
    }

    a.back-to-top:hover {
        background: white !important;
    }


    a:hover {
        color: #beaf87 !important;
    }

    i.ion-ios-speedometer-outline::before {
        color: white !important;
    }

    i.ion-ios-location-outline::before, i.ion-ios-telephone-outline::before, i.ion-ios-email-outline::before{
        color:#beaf87 !important;
    }

    button{
        background:#beaf87 !important;
    }

    #portfolio .portfolio-item figure .link-preview:hover,
    #portfolio .portfolio-item figure .link-details:hover {
        background: #beaf87 !important;
    }

    h4::after {
        background: #beaf87 !important;
    }

    img.btn-whatsapp {
        display: block !important;
        position: fixed;
        z-index: 9999999;
        bottom: 20px;
        right: 20px;
        cursor: pointer;
        border-radius: 100px !important;
    }

    img.btn-whatsapp:hover {
        border-radius: 100px !important;
        -webkit-box-shadow: 0px 0px 15px 0px rgba(7, 94, 84, 1);
        -moz-box-shadow: 0px 0px 15px 0px rgba(7, 94, 84, 1);
        box-shadow: 0px 0px 15px 0px rgba(7, 94, 84, 1);
        transition-duration: 1s;
    }

    a.facebook:hover, a.instagram:hover, a.youtube:hover{
        background: white !important;   
    }

    #header #logo{
        margin-left:-80px;
    }

    </style>
</head>

<body
    style="font-family: {{$general->fuente}} !important; font-size: {{$general->size}} !important;  background-image: url({{asset('recursos_fondo/'.$general->fondo)}}) !important">

    <!--==========================
    Header
  ============================-->
    <header id="header" style="background: {{$menu->background}} !important">
        <div class="container-fluid">

            <div id="logo" class="pull-left" >

                <h1><a href="" style="color: white !important; font-size:22px"><img
                            src="{{asset('general/'.$general->logo)}}" style="width:30px; margin-left:60px"> {{$menu->titulo}}</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    @foreach($items_menu as $item)
                    <li class="menu-active"><a style="color: white !important"
                            href="{{$item->enlace}}"><?php echo $item->icono?>
                            {{$item->titulo}}
                        </a>
                    </li>
                    @endforeach

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    @yield('1001')

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top" style="background: {{$footer->background}} !important">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="{{asset('general/'.$general->logo)}}" style="width:120px !important">
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            @foreach($items_menu as $item)
                            <li style="color: {{$menu->color}} !important"><a href="{{$item->enlace}}">
                                    {{$item->titulo}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contactanos</h4>
                        <p>
                            <strong>Ubicación: </strong><?php echo $footer->direccion ?> <br>
                            <strong>Teléfono:</strong> {{$footer->telefono}}<br>
                            <strong>Email:</strong> {{$footer->correo}}<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.facebook.com/C21LacunzaYAsociados" class="facebook" target="_blanck"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/century21lacunza.inmobiliaria/" class="instagram" target="_blanck"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCMiQ5NASafslbD4Abc3ajgA" class="youtube" target="_blanck"><i class="fab fa-youtube"></i></a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.6099484080733!2d-99.87289751994022!3d16.86056310807462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc496474023e11f4f!2sCentury%2021%20Lacunza%20%26%20Asociados!5e0!3m2!1ses-419!2smx!4v1669267235225!5m2!1ses-419!2smx"
                            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                {{$footer->cr}}
            </div>

        </div>
    </footer><!-- #footer -->

    <img class="btn-whatsapp" src="https://clientes.dongee.com/whatsapp.png" width="64" height="64" alt="Whatsapp" onclick="window.location.href='https://wa.me/7444843000?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio.'">


    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('themes/1001/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('themes/1001/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('themes/1001/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('themes/1001/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('themes/1001/js/main.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>

</body>

</html>