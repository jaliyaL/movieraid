<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>@yield('title')</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="admin/css/bootstrap.css" rel="stylesheet">
<!-- 		<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
 -->		<!-- Font awesome CSS -->
		<link href="admin/css/font-awesome.min.css" rel="stylesheet">		
		<!-- jQuery gritter -->
		<link href="admin/css/jquery.gritter.css" rel="stylesheet">
		<!-- Custom Color CSS -->
		<link href="admin/css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="admin/css/style.css" rel="stylesheet">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		@yield('styles')
	</head>
	
	<body>

		<div class="outer" id="app">

			<!-- Sidebar starts -->
			@include('admin.partials.sidebar')
			<!-- Sidebar ends -->
			
			<!-- Mainbar starts -->
			<div class="mainbar">
			
				<!-- Mainbar head starts -->
			     	<div class="main-head">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Page title -->
								<!-- <h2><i class="fa fa-desktop lblue"></i> @yield('page-title')</h2> -->
							</div>
							
							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Search block -->
								<div class="head-search">
									<form class="form" role="form">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										  </span>
										</div>
									</form>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-4 hidden-xs">
								<!-- Notifications -->
								<div class="head-noty text-center">
									
									  <!-- Notifications -->
						              @include('admin.partials.common-notifications')
									
									  <!-- Messages -->
						              @include('admin.partials.message-notifications')
									  
									  <!-- Users -->
							          @include('admin.partials.user-notifications')
									  
								</div>
								<div class="clearfix"></div>
							</div>
							
							
							<div class="col-md-3 hidden-sm hidden-xs">
								<!-- Head user -->
								<div class="head-user dropdown pull-right">
							     @include('admin.partials.top-menu')
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
					</div>
					
				</div>
				
				<!-- Mainbar head ends -->
				
				<div class="main-content">
					<div class="container">
										
						<div class="page-content">
							@yield('content')
						</div>
						
					</div>
				</div>
				
			</div>
			<!-- Mainbar ends -->
			
			<div class="clearfix"></div>
		</div>
		<script src="js/app.js"></script>
		<!-- Javascript files -->
		<!-- jQuery -->
	<!-- 	<script src="admin/js/jquery.js"></script> -->
		<!-- Bootstrap JS -->
		<script src="admin/js/bootstrap.min.js"></script>
		<!-- jQuery UI -->
		<script src="admin/js/jquery-ui.min.js"></script>
		<!-- Date Time Picker JS -->
		<script src="admin/js/bootstrap-datetimepicker.min.js"></script>	
		<!-- Bootstrap wysihtml5 JS -->		
		<script src="admin/js/wysihtml5-0.3.0.js"></script>
		<script src="admin/js/prettify.js"></script>
		<script src="admin/js/bootstrap-wysihtml5.min.js"></script>
		<!-- Validate JS -->
		<script src="admin/js/jquery.validate.js"></script>
		<!-- Form wizard steps  JS -->
		<script src="admin/js/jquery.steps.min.js"></script>
		<!-- jQuery Knob -->
		<script src="admin/js/jquery.knob.js"></script>
		<!-- jQuery slim scroll -->
		<script src="admin/js/jquery.slimscroll.min.js"></script>
		<!-- Data Tables JS -->
		<script src="admin/js/jquery.dataTables.min.js"></script>	
		<!-- Pretty Photo JS -->
		<script src="admin/js/jquery.prettyPhoto.js"></script>	
		<!-- Rate It JS -->
		<script src="admin/js/jquery.rateit.min.js"></script>	
		<!-- Full calendar -->
	    <script src="admin/js/moment.min.js"></script>
	    <script src="admin/js/fullcalendar.min.js"></script>
		<!-- jQuery gritter -->
		<!-- <script src="admin/js/jquery.gritter.min.js"></script> -->
		<!-- jQuery gritter notification -->
		<script src="admin/js/custom.notification.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="admin/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="admin/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="admin/js/custom.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		

<!-- 		<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
 -->		

		@yield('footer')
		
		<!-- Javascript for this page -->
      
        <script type="text/javascript">
		</script>
		
	</body>	
</html>