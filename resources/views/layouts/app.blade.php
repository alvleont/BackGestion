
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/portal_assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/portal_assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Portal PHE |  {{ $header }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/portal_assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="/portal_assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/portal_assets/css/themify-icons.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="white" data-active-color="danger">

			<div class="logo">
				<a href="{{ route('dashboard') }}" class="m-0 simple-text logo-mini">
					<img src="phesymbol.svg">
				</a>

				<a href="{{ route('dashboard') }}" class="simple-text logo-normal">
					<img src="phelogo.svg" width="160px">
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="photo">
	                    <img src="/portal_assets/img/faces/face-2.jpg" />
	                </div>
	                <div class="info">
						<a  href="profile" >
	                        <span>
								{{ auth()->user()->name }}

							</span>
	                    </a>
						<div class="clearfix"></div>


	                </div>
	            </div>
	            <ul class="nav">
                    <li>
	                    <a href="{{ route('users') }}">
	                        <i class="ti-user"></i>
	                        <p>Usuarios</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="{{ route('companies') }}">
	                        <i class="ti-briefcase"></i>
	                        <p>Empresas</p>
	                    </a>
	                </li>

                    <li>
	                    <a href="{{ route('contracts') }}">
	                        <i class="ti-book"></i>
	                        <p>Contratos</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="{{ route('meetings') }}">
	                        <i class="ti-calendar"></i>
	                        <p>Reuniones</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="{{ route('support') }}">
	                        <i class="ti-ticket"></i>
	                        <p>Soporte</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="{{ route('apps') }}">
	                        <i class="ti-harddrives"></i>
	                        <p>Apps</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="{{ route('finance') }}">
	                        <i class="ti-money"></i>
	                        <p>Financiero</p>
	                    </a>
	                </li>
	    	</div>
	    </div>

	    <div class="main-panel">
	        <nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                    <a class="navbar-brand"> {{ $header }}</a>
	                </div>
	                <div class="collapse navbar-collapse">
                        <form method="POST" action="{{ route('logout') }}">
	                    <ul class="nav navbar-nav navbar-right">

	                        <li class="dropdown">
	                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
	                                <i class="ti-bell"></i>
	                                <span class="notification">5</span>
									<p class="hidden-md hidden-lg">
										Notifications
										<b class="caret"></b>
									</p>
	                            </a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#not1">Notification 1</a></li>
	                                <li><a href="#not2">Notification 2</a></li>
	                                <li><a href="#not3">Notification 3</a></li>
	                                <li><a href="#not4">Notification 4</a></li>
	                                <li><a href="#another">Another notification</a></li>
	                            </ul>
	                        </li>

							<li>
	                            <a href="{{ route('logout') }}" class="btn-rotate" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                @csrf
									<i class="ti-close"></i>
									<p class="hidden-md hidden-lg">
										Settings
									</p>
	                            </a>
	                        </li>




	                    </ul>
                    </form>
	                </div>
	            </div>
	        </nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">

                        {{ $slot }}

	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">

	                <div class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script>, Pharmaceutical Experts SAS</a>
	                </div>
	            </div>
	        </footer>
	    </div>
	</div>
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="/portal_assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="/portal_assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/portal_assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="/portal_assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="/portal_assets/js/jquery.validate.min.js"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="/portal_assets/js/es6-promise-auto.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="/portal_assets/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="/portal_assets/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="/portal_assets/js/bootstrap-selectpicker.js"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src="/portal_assets/js/bootstrap-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="/portal_assets/js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="/portal_assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="/portal_assets/js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="/portal_assets/js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src="/portal_assets/js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Wizard Plugin    -->
	<script src="/portal_assets/js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="/portal_assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="/portal_assets/js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src="/portal_assets/js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="/portal_assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="/portal_assets/js/demo.js"></script>
    @livewireScripts
</html>

