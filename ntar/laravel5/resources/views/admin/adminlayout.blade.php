<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield("title")</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, cocobootstrap,template, bootstrap ">
        <meta name="author" content="Huban Creative">
        @yield("styletambahan")
        @section("stylesheet")
        <!-- Base Css Files -->
        <link href="{{asset("assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/fontello/css/fontello.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/animate-css/animate.min.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/nifty-modal/css/component.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/magnific-popup/magnific-popup.css")}}" rel="stylesheet" /> 
        <link href="{{asset("assets/libs/ios7-switch/ios7-switch.css")}}" rel="stylesheet" /> 
        <link href="{{asset("assets/libs/pace/pace.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/sortable/sortable-theme-bootstrap.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/bootstrap-datepicker/css/datepicker.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/jquery-icheck/skins/all.css")}}" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="{{asset("assets/libs/prettify/github.css")}}" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="{{asset("assets/libs/rickshaw/rickshaw.min.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/morrischart/morris.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/jquery-clock/clock.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/bootstrap-calendar/css/bic_calendar.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/sortable/sortable-theme-bootstrap.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/jquery-weather/simpleweather.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/bootstrap-xeditable/css/bootstrap-editable.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{asset("assets/css/style-responsive.css")}}" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{asset("assets/img/favicon.ico")}}">
        <link rel="apple-touch-icon" href="{{asset("assets/img/apple-touch-icon.png")}}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset("assets/img/apple-touch-icon-57x57.png")}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset("assets/img/apple-touch-icon-72x72.png")}}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset("assets/img/apple-touch-icon-76x76.png")}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset("assets/img/apple-touch-icon-114x114.png")}}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset("assets/img/apple-touch-icon-120x120.png")}}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset("assets/img/apple-touch-icon-144x144.png")}}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset("assets/img/apple-touch-icon-152x152.png")}}" />
        @show
    </head>
    <body class="fixed-left">
        <!-- Modal Start --> 
        	<!-- Modal Task Progress -->	
	<div class="md-modal md-3d-flip-vertical" id="task-progress">
		<div class="md-content">
			<h3><strong>Task Progress</strong> Information</h3>
			<div>
				<p>CLEANING BUGS</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="sr-only">80&#37; Complete</span>
				  </div>
				</div>
				<p>POSTING SOME STUFF</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
					<span class="sr-only">65&#37; Complete</span>
				  </div>
				</div>
				<p>BACKUP DATA FROM SERVER</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
					<span class="sr-only">95&#37; Complete</span>
				  </div>
				</div>
				<p>RE-DESIGNING WEB APPLICATION</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
					<span class="sr-only">100&#37; Complete</span>
				  </div>
				</div>
				<p class="text-center">
				<button class="btn btn-danger btn-sm md-close">Close</button>
				</p>
			</div>
		</div>
	</div>
		
	<!-- Modal Logout -->
	<div class="md-modal md-3d-sign" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
                <p class="text-center"><span class="rounded-image topbar-profile-image"><img style="width:70px;height:70px;" src="{{asset($user->gambar)}}"></span></p>
                <p class="text-center">Hi , <strong>{{$user->nama}}</strong> !</p>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Nope!</button>
				<a href="/logout" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
    <!-- Modal Logout -->
    <div class="md-modal md-3d-sign" id="setting-modal">
        <div class="md-content">
            <h3><strong>Account</strong> Profile</h3>
            <div>
                <p class="text-center"><span class="rounded-image topbar-profile-image"><img style="width:70px;height:70px;" src="{{asset($user->gambar)}}"></span></p>
                <p class="text-center">Name : <strong>{{$user->nama}}</strong>
                Username : <strong>{{$user->username}}</strong>
            </p>
                <p class="text-center">
                    <a class="btn btn-block btn-success" href="{{ url("admin/tabelakun/$user->id/edit")}}">Edit</a>
                </p>
                <a class="btn btn-danger btn-block md-close">Close !</a>
            </div>
        </div>
    </div>        <!-- Modal End -->    
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="{{asset("assets/img/logo.png")}}" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                </div>
                            </div>
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i>
                        
                        <span class="label label-danger absolute">7</span></a>
                        
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                            <?php
                                  $pelanggan = \App\Pelanggan::orderBy('id','desc')->limit('7')->get();
                                  foreach($pelanggan as $plg)
                                  { ?>
                            <li class="unread">
                                <a href="#">
                                    <p><strong><?php echo $plg->nama;?></strong> Ingin Menggunakan Jasa SMD-Kurir <strong>&#34;TELP : <?php echo $plg->telepon;?>&#34;</strong>
                                        <br /><i>2 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                                <?php  }  ?>

                            <li class="dropdown-footer">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <a href="/admin/tabelpelanggan" class="btn btn-block btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> Tidak Ada Pesan Masuk</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="width:35px;height:35px;" class="rounded-image topbar-profile-image"><img style="width:35px;height:35px;" src="{{asset($user->gambar)}}"></span><strong> {{($user->nama)}} </strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="md-trigger" data-modal="setting-modal"> Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a data-modal="setting-modal" style="width:75px;height:75px;" class="md-trigger rounded-image profile-image"><img style="width:67px;height:67px;" src="{{asset($user->gambar)}}"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>{{($user->username)}}</b></div>
                        <div class="profile-buttons">
                          <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                          <a href="#connect" ><i class="fa fa-comments"></i></a>
                          <a href="javascript:;" class="md-trigger" data-modal="logout-modal"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                <ul><li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='/admin/dashboard'><span>Home</span></a></li></ul></li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i><span>Input Data</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                                                        <ul>
                                                                            <li><a href='/admin/inputkurir'><span>Input Data Kurir</span></a></li>
                                                                            <li><a href='/admin/inputpelanggan'><span>Input Data Pelanggan</span></a></li>
                                                                            <li><a href='/admin/inputcustomer-service'><span>Input Data Customer Service</span></a></li>
                                                                            <li><a href='/admin/inputpemesanan'><span>Input Data Pemesanan</span></a></li>
                                                                            <li><a href='/admin/inputakun'><span>Input Akun</span></a></li>
                                                                        </ul>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Tables</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                                                        <ul>
                                                                            <li><a href='/admin/tabelkurir'><span>Tabel Data Kurir</span></a></li>
                                                                            <li><a href='/admin/tabelpelanggan'><span>Tabel Data Pelanggan</span></a></li>
                                                                            <li><a href='/admin/tabelcustomer-service'><span>Tabel Data Customer Service</span></a></li>
                                                                            <li><a href='/admin/tabelpemesanan'><span>Tabel Data Pemesanan</span></a></li>
                                                                            <li><a href='/admin/tabelakun'><span>Tabel Akun</span></a></li>
                                                                        </ul>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Maps</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                                                        <ul>
                                                                            <li><a href='/admin/google-map'><span>Google Maps</span></a></li>
                                                                        </ul>
                    </li>
                </ul>
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <div class="portlets">
                <div id="chat_groups" class="widget transparent nomargin">
                    <div class="widget-content">
                        
                    </div>
                </div>

                <div id="recent_tickets" class="widget transparent nomargin">
                    <h2>Recent Tickets</h2>
                    <div class="widget-content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="javascript:;">My wordpress blog is broken <span>I was trying to save my page and...</span></a>
                            </li>
                            <li>
                                <a href="javascript:;">Server down, need help!<span>My server is not responding for the last...</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
            <div class="left-footer">
                <div class="progress progress-xs">
                  <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="progress-precentage">80%</span>
                  </div>
                  
                  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>

            </div>
        </div>
        <!-- Left Sidebar End -->
		<!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                
    @yield("body")
                            <!-- Footer Start -->
            <footer>
                Huban Creative & Modified by KodokCaster &copy; 2014
                <div class="footer-links pull-right">
                    <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
            <!-- Footer End -->         
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

	</div>
	<div id="contextMenu" class="dropdown clearfix">
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
		        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
		    </ul>
		</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
    @section("javascript")
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset("assets/libs/jquery/jquery-1.11.1.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-detectmobile/detect.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-animate-numbers/jquery.animateNumbers.js")}}"></script>
	<script src="{{asset("assets/libs/ios7-switch/ios7.switch.js")}}"></script>
	<script src="{{asset("assets/libs/fastclick/fastclick.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-blockui/jquery.blockUI.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-bootbox/bootbox.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-slimscroll/jquery.slimscroll.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-sparkline/jquery-sparkline.js")}}"></script>
	<script src="{{asset("assets/libs/nifty-modal/js/classie.js")}}"></script>
	<script src="{{asset("assets/libs/nifty-modal/js/modalEffects.js")}}"></script>
	<script src="{{asset("assets/libs/sortable/sortable.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-fileinput/bootstrap.file-input.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-select/bootstrap-select.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-select2/select2.min.js")}}"></script>
	<script src="{{asset("assets/libs/magnific-popup/jquery.magnific-popup.min.js")}}"></script> 
	<script src="{{asset("assets/libs/pace/pace.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-icheck/icheck.min.js")}}"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="{{asset("assets/libs/prettify/prettify.js")}}"></script>

	<script src="{{asset("assets/js/init.js")}}"></script>
	<!-- Page Specific JS Libraries -->
	<script src="{{asset("assets/libs/d3/d3.v3.js")}}"></script>
	<script src="{{asset("assets/libs/rickshaw/rickshaw.min.js")}}"></script>
	<script src="{{asset("assets/libs/raphael/raphael-min.js")}}"></script>
	<script src="{{asset("assets/libs/morrischart/morris.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-knob/jquery.knob.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-clock/clock.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-easypiechart/jquery.easypiechart.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-calendar/js/bic_calendar.min.js")}}"></script>
	<script src="{{asset("assets/js/apps/calculator.js")}}"></script>
	<script src="{{asset("assets/js/apps/todo.js")}}"></script>
	<script src="{{asset("assets/js/apps/notes.js")}}"></script>
	<script src="{{asset("assets/js/pages/index.js")}}"></script>
    @show
    @yield("scripttambahan")
	</body>
</html>