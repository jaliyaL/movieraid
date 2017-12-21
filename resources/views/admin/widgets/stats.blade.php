
<!-- Current status -->
<div class="current-status">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-6">
			<!-- Current status item -->
			<div class="current-status-item">
				<!-- Icon 
				<i class="fa fa-user lblue"></i> -->
				<!-- Heading -->
				<h6>Total Users</h6>
				<h3>{{ $total_users }} <span class="fa fa-arrow-circle-up green"></span></h3>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<!-- Current status item -->
			<div class="current-status-item">
				<!-- Icon 
				<i class="fa fa-bar-chart-o lblue"></i> -->
				<!-- Heading -->
				<h6>Total Movies</h6>
				<h3>{{ $total_movies }} <span class="fa fa-arrow-circle-down red"></span></h3>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<!-- Current status item -->
			<div class="current-status-item">
				<!-- Heading -->
				<h6>All Time Played</h6>
				<h3>{{ $times_played }} <span class="fa fa-arrow-circle-up lblue"></span></h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-6">
			<!-- Current status item -->
			<div class="current-status-item">
				<!-- Icon 
				<i class="fa fa-user lblue"></i> -->
				<!-- Heading -->
				<h6>New Users</h6>
				<h3>{{$this_month_users}} <span class="fa fa-arrow-circle-down lblue"></span></h3>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<!-- Current status item -->
			<div class="current-status-item">
				<!-- Icon 
				<i class="fa fa-bar-chart-o lblue"></i> -->
				<!-- Heading -->
				<h6>New Movies</h6>
				<h3>{{ $this_month_movies }} <span class="fa fa-arrow-circle-up green"></span></h3>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<!-- Current status item -->
			<div class="current-status-item">
				<!-- Heading -->
				<h6>Today's Played</h6>
				<h3>{{ $today_played }} <span class="fa fa-arrow-circle-up green"></span></h3>
			</div>
		</div>
	</div>
</div>