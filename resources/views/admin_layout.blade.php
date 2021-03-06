
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ADMIN BOXACAROLE</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

<link id="bootstrap-style" href="{{asset('admintemplate/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admintemplate/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link id="base-style-responsive" href="{{asset('admintemplate/css/style-responsive.css')}}" rel="stylesheet">
<link id="base-style" href="{{asset('admintemplate/css/style.css')}}" rel="stylesheet">


<!-- <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('admintemplate/js/bootstrap.min.js')}}"></script> -->
<!-- <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 -->
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>BOXACAROLE</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						 
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>
								<span class="caret"></span>
							</a>
						
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{URL::to('/fr/login')}}"><i class="halflings-icon off"></i> Se déconnecter</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet" style="font-size: 20px; font-style: bold;"> Dashboard</span></a></li>	
						<!-- <li><a href="#"><i class="icon-tasks"></i><span class="hidden-tablet" style="font-size: 20px; font-style: bold;"> Utilisateurs</span></a></li> -->
						<li><a href="{{URL::to('/liste-categories')}}"><i class="icon-tasks"></i><span class="hidden-tablet" style="font-size: 20px; font-style: bold;"> Categorie de produits</span></a></li>
						<li><a href="{{URL::to('/liste-produits')}}"><i class="icon-tasks"></i><span class="hidden-tablet" style="font-size: 20px; font-style: bold;"> Produits</span></a></li>
						<li>
							<a href="{{URL::to('/commandes')}}"><i class="icon-tasks"></i><span class="hidden-tablet" style="font-size: 20px; font-style: bold;"> Commandes clients</span>
							</a></li>
						<li><a href="{{URL::to('/')}}"><i class="icon-tasks"></i><span class="hidden-tablet" style="font-size: 20px; font-style: bold;">Boutique</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<!-- <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul> -->

		<!-- 	<div class="row-fluid">
				
			</div> -->		

			<!--/row-->
			
       @yield('admin_content')

	        </div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	<script src="{{asset('admintemplate/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery-migrate-1.0.0.min.js')}}"></script>
    <script src="{{asset('admintemplate/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
    <script src="{{asset('admintemplate/js/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('admintemplate/js/modernizr.js')}}"></script>
	<script src="{{asset('admintemplate/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('admintemplate/js/fullcalendar.min.js')}}"></script>
<!-- 	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 -->

 <script src="{{asset('admintemplate/js/jquery.dataTables.min.js')}}"></script>
	
     <script src="{{asset('admintemplate/js/excanvas.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.flot.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.uniform.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.cleditor.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.noty.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.elfinder.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.raty.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.iphone.toggle.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.uploadify-3.1.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.gritter.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.imagesloaded.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.masonry.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.knob.modified.js')}}"></script>
	<script src="{{asset('admintemplate/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('admintemplate/js/counter.js')}}"></script>
	<script src="{{asset('admintemplate/js/retina.js')}}"></script>
	
	<script src="{{asset('admintemplate/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
