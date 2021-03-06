<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e | {{ $title }} </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- select pinker -->
  <link rel="stylesheet" href="{{ asset('storage/css/bootstrap-select.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Tables -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('storage/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('storage/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('storage/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('storage/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}"> 
  <!-- Flashy -->
  <link rel="stylesheet" href="{{ asset('/css/flashy.css') }}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/84A60109-4722-B547-83F0-4F944594AEFE/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/D50D5C43-2FD2-E649-8437-F4E3858B1430/abn/main.css"/><script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/84A60109-4722-B547-83F0-4F944594AEFE/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/D50D5C43-2FD2-E649-8437-F4E3858B1430/abn/main.css"/>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Header  -->
    <header class="main-header">
    <!-- Logo -->
      <a href="{{route('index_path')}}" class="logo" title="Retour vers l'acceuil">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">e-R</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">e-Réservation</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-envelope-o"></i>
                      <span class="label label-danger">4</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header text-center" style="color: red">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                          <li><!-- start message -->
                            <a href="#">
                              <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <!-- end message -->
                          <li>
                            <a href="#">
                              <h4>
                                AdminLTE Design Team
                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h4>
                                Developers
                                <small><i class="fa fa-clock-o"></i> Today</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h4>
                                Sales Department
                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <h4>
                                Reviewers
                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="footer"><a href="{{ route('messages') }}"><b>Voir tous les messages</b></a></li>
                    </ul>
                  </li>
            <!-- Les avis -->
                  <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-comment"></i>
                          <span class="label label-danger">8</span>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="header text-center" style="color: red">Vous avez 8 nouveaux avis</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                              <ul class="menu ">
                                  <li>
                                      <a href="#">
                                        <i class="fa fa-users text-aqua"></i> Vous avez 5 ratrapages
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                        page and may cause design problems
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                        <i class="fa fa-user text-red"></i> Vous avez changé votre nom d'utilisateur
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="footer"><a href="{{ route('comments') }}"><b class="text-center">Tous afficher</b></a></li>
                      </ul>
                  </li>
            <!-- Notifications: style can be found in dropdown.less -->
                  <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-bell-o"></i>
                          <span class="label label-danger">10</span>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="header text-center" style="color: red">Vous avez 10 notifications</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                              <ul class="menu ">
                                  <li>
                                      <a href="#">
                                        <i class="fa fa-users text-aqua"></i> Vous avez 5 ratrapages
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                        page and may cause design problems
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                        <i class="fa fa-user text-red"></i> Vous avez changé votre nom d'utilisateur
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="footer"><a href="{{ route('notifications') }}"><b class="text-center">Tous afficher</b></a></li>
                      </ul>
                  </li>
              <!-- User Account: style can be found in dropdown.less -->
                  <!-- /.dropdown -->
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i>Fadel Sylla </i> <i class="fa fa-caret-down"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-user">
                          <li><a href="#"><i class="fa fa-user fa-fw"></i> Mon Profile</a></li>
                          <li class="divider"></li>
                          <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                          </li>
                      </ul>
                      <!-- /.dropdown-user -->
                  </li>
                  <!-- /.dropdown -->
                  <li></br></li>
                  <li><br></li>
              </ul>
          </div>
      </nav>
    </header>
  <!-- Menu -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="searchText" class="form-control" placeholder="Recherche...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>s
                    </span>
                </div>
            </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">NAVIGATION</li>
                <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i> <span>Tableau de bord</span></a></li> 

                <li><a href="{{ url('agent/maCompagnie') }}"><i class="fa fa-home"></i> <span>Ma compagnie</span></a></li>
                
                <li><a href="{{ url('agent/trajets') }}"><i class="fa fa-exchange"></i> <span>Trajets</span></a></li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-save"></i>
                    <span>Réservations</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Non validées</a></li>
                    <li><a href="{{ url('agent/reservations') }}"><i class="fa fa-circle-o"></i> Tout voir</a></li>
                    <li><a href="{{ route('AgentClotureReserv') }}"><i class="fa fa-circle-o"></i> Clôturer</a></li>
                  </ul>
                </li>

                <li><a href="{{ route('AgentFicheControle') }}"><i class="fa fa-file-text-o"></i> <span>Fiche de contrôle</span></a></li>

                <li class="header">NOTIFICATIONS</li>

                <li><a href="#"><i class="fa fa-envelope text-green"></i> <span>Messages</span><span class="pull-right-container">
                  <span class="label label-danger pull-right">4</span>
                </span></a> 
                </li>
                <li><a href="#"><i class="fa fa-bell-o text-yellow" ></i> <span>Notifications</span><span class="pull-right-container">
                  <span class="label label-danger pull-right">10</span></a>
                </li>
                <li><a href="#"><i class="fa fa-comment text-yellow" ></i> <span>Avis</span><span class="pull-right-container">
                  <span class="label label-danger pull-right">10</span></a>
                </li>
                <li class="header">PROFIL</li>
                <li><a href="#"><i class="fa fa-user text-red"></i> <span>Mon profil</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside> 

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <!-- Notification avec helpers/flash -->

  <!--    <div class="container">
        <div class="row">
        @if(session()->has('notification.message'))
        <div class="col-md-4 col-xs-8 col-md-offset-3 col-xs-offset-2 alert alert-{{ session()->get('notification.type') }}" style="text-align: center">
            {{ session()->get('notification.message') }}
        </div>
        @endif
      </div>
      </div>  -->

      <!-- Fin notification -->      

      @yield('content_header')

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

      

    </section>
    <!-- /.content -->
  </div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">FANAP Réservation</a>.</strong> Tous droits réservés.
</footer>

</div>


<!-- jQuery 3 -->
<script src=" {{ asset('storage/bower_components/jquery/dist/jquery.min.js') }} "></script>
<!-- Bootstrap 3.3.7 -->
<script src=" {{ asset('storage/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>
<!-- select pinker -->
<script src="{{ asset('storage/js/bootstrap-select.min.js') }}"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('storage/dist/js/adminlte.min.js') }} "></script>
<!-- Flashy -->
<script src="{{ asset('/js/flashy.js') }}"></script>
<script src="//code.jquery.com/jquery.js"></script>
      @include('flashy::message')
</body>
</htlm>

