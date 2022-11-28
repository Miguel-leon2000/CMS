<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="shortcut icon" href="/logos/c21-blanco-logo.png">
    <title>CMS Lacunza & Asociados</title>

    <link href="{{asset('css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/pace.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done pace-done">
    <div class="pace  pace-inactive pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <header class="app-header navbar" style="background-color:black !important">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="https://www.century21lacunza.mx" target="_blanck">
            <img src="/logos/C21Lacunza-blanco.png" alt="logo" style="width: 127px; margin-left:10px">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link text-danger" href="https://coreui.io/#sneak-peek"><strong>Sneak Peek! Try CoreUI PRO
                        3.0.0-alpha</strong></a>
            </li>
        </ul> -->
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false" style="margin-right:50px !important; color:white">
                    {{auth()->user()->email}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" style="margin-right:50px !important">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>

                    @if (Auth::check())
                    <form method="POST" action="{{route('logout')}}">
                        {{csrf_field()}}
                        <button class="btn btn-danger m-4"><i class="fa fa-lock"></i> Cerrar sesión</button>
                    </form>
                    @endif

                </div>
            </li>
        </ul>

        <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav ps ps--active-y" style="background:#252526">
                <ul class="nav">

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white !important">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                        </a>
                   
                    @if (auth::check())
                    @if (auth()->user()->role=='ADMIN')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.plantilla')}}" style="color:white !important">
                            <i class="nav-icon icon-book-open"></i> Plantillas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.usuarios')}}" style="color:white !important">
                            <i class="nav-icon icon-people"></i> Usuarios
                        </a>
                    </li>
                    @endif
                    @endif

                    @if (auth::check())
                    @if (auth()->user()->role=='USUARIO')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.pagina')}}">
                            <i class="nav-icon icon-folder"></i> Páginas
                        </a>
                    </li>

                    @if (auth()->user()->current_page)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.contacto')}}">
                            <i class="nav-icon icon-envelope"></i> Mensajes
                        </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-settings"></i>Configuraciones</a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index.menu')}}">
                                    <i class="nav-icon icon-grid"></i> Menú</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index.general')}}">
                                    <i class="nav-icon icon-equalizer"></i> General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index.footer')}}">
                                    <i class="nav-icon icon-frame"></i> Footer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index.fondo')}}">
                                    <i class="nav-icon icon-picture"></i> Fondos</a>
                            </li>

                        </ul>

                    </li>


                    <li class="nav-title" style="font-size:13px !important; color:#b6a888 !important">CONTENIDO</li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon icon-pencil"></i> Entradas</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.equipo')}}">
                            <i class="nav-icon icon-people"></i> Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.enlace')}}">
                            <i class="nav-icon icon-list"></i> Enlaces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.galeria')}}">
                            <i class="nav-icon icon-picture"></i> Propiedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.seccion_uno')}}">
                            <i class="nav-icon icon-drawer"></i> Sección uno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.seccion_dos')}}">
                            <i class="nav-icon icon-drawer"></i> Sección dos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.slider')}}">
                            <i class="nav-icon icon-film"></i> Sliders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.blog')}}">
                            <i class="nav-icon icon-cursor"></i> Blog</a>
                    </li>
                    @endif

                    @endif
                    @endif




                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 618px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 321px;"></div>
                </div>
            </nav>
            <!-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> -->
        </div>
        <!--CONTENIDO-->
        <main class="main">

            @yield('contenido')

        </main>

    </div>
    <footer class="app-footer">
        <div>

            <span>Copyright &copy 2022 Miguel Aguirre. Todos los derechos reservados.</span>
        </div>
        <div class="ml-auto">
            <span>Century 21 Lacunza & Asociados</span>
        </div>
    </footer>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/coreui.min.js')}}"></script>
    <script src="{{asset('js/jscolor.js')}}"></script>
    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    @stack('scripts')

    <script>
    tinymce.init({
        selector: '#editor',
        height: "500px",
        plugins: [
            'print preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons spellchecker mediaembed pageembed linkchecker powerpaste formatpainter casechange',
        ],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'casechange undo redo  bold italic underline strikethrough  fontselect fontsizeselect formatselect alignleft aligncenter alignright alignjustify outdent indent numlist bullist  forecolor backcolor removeformat pagebreak charmap emoticons fullscreen preview save print insertfile image media template link anchor codesample fullpage ltr rtl styleselect pageembed formatpainter',
    });
    </script>


    <script type="text/javascript" src="./js/custom-tooltips.min.js" class="view-script"></script>
    <script type="text/javascript" src="./js/main.js" class="view-script"></script>
    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>