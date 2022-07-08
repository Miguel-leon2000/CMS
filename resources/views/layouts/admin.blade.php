<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>

    <link href="{{asset('css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/pace.min.css')}}" rel="stylesheet">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
   
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done pace-done">
    <div class="pace  pace-inactive pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
            <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
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
                <a class="nav-link text-danger" href="https://coreui.io/#sneak-peek"><strong>Sneak Peek! Try CoreUI PRO 3.0.0-alpha</strong></a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                    <div class="dropdown-header text-center">
                        <strong>You have 5 notifications</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="icon-user-follow text-success"></i> New user registered</a>
                    <a class="dropdown-item" href="#">
                        <i class="icon-user-unfollow text-danger"></i> User deleted</a>
                    <a class="dropdown-item" href="#">
                        <i class="icon-chart text-info"></i> Sales report is ready</a>
                    <a class="dropdown-item" href="#">
                        <i class="icon-basket-loaded text-primary"></i> New client</a>
                    <a class="dropdown-item" href="#">
                        <i class="icon-speedometer text-warning"></i> Server overloaded</a>
                    <div class="dropdown-header text-center">
                        <strong>Server</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <div class="text-uppercase mb-1">
                            <small>
<b>CPU Usage</b>
</small>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="text-uppercase mb-1">
                            <small>
<b>Memory Usage</b>
</small>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        <small class="text-muted">11444GB/16384MB</small>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="text-uppercase mb-1">
                            <small>
<b>SSD 1 Usage</b>
</small>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        <small class="text-muted">243GB/256GB</small>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-list"></i>
                    <span class="badge badge-pill badge-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                    <div class="dropdown-header text-center">
                        <strong>You have 5 pending tasks</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <div class="small mb-1">Upgrade NPM &amp; Bower
                            <span class="float-right">
<strong>0%</strong>
</span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="small mb-1">ReactJS Version
                            <span class="float-right">
<strong>25%</strong>
</span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="small mb-1">VueJS Version
                            <span class="float-right">
<strong>50%</strong>
</span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="small mb-1">Add new layouts
                            <span class="float-right">
<strong>75%</strong>
</span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="small mb-1">Angular 2 Cli Version
                            <span class="float-right">
<strong>100%</strong>
</span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                    </a>
                    <a class="dropdown-item text-center" href="#">
                        <strong>View all tasks</strong>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-envelope-letter"></i>
                    <span class="badge badge-pill badge-info">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                    <div class="dropdown-header text-center">
                        <strong>You have 4 messages</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="avatar">
                                    <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">Just now</small>
                            </div>
                            <div class="text-truncate font-weight-bold">
                                <span class="fa fa-exclamation text-danger"></span> Important message</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="avatar">
                                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-warning"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">5 minutes ago</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="avatar">
                                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-danger"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="avatar">
                                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-info"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">4:03 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center" href="#">
                        <strong>View all messages</strong>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
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
        <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav ps ps--active-y">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                            <span class="badge badge-info">NEW</span>
                        </a>
                    </li>
                    <li class="nav-title">Theme</li>
                    <li class="nav-item">
                        <a class="nav-link" href="colors.html">
                            <i class="nav-icon icon-drop"></i> Colors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="typography.html">
                            <i class="nav-icon icon-pencil"></i> Typography</a>
                    </li>
                    <li class="nav-title">Components</li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-puzzle"></i> Base</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/cards.html">
                                    <i class="nav-icon icon-puzzle"></i> Cards</a>
                            </li>  
                        </ul>
                    </li>
                    
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 618px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 321px;"></div>
                </div>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">

            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>

                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i> &nbsp;Dashboard</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i> &nbsp;Settings</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div id="ui-view">
                    <div>

                        <div class="animated fadeIn">
                           

                            

                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io/pro/">CoreUI Pro</a>
            <span>© 2018 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io/pro/">CoreUI Pro</a>
        </div>
    </footer>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/coreui.min.js')}}"></script>
 

   
    <script type="text/javascript" src="./js/custom-tooltips.min.js" class="view-script"></script>
    <script type="text/javascript" src="./js/main.js" class="view-script"></script>
</body>

</html>