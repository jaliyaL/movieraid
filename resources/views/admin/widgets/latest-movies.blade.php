<div class="widget report-widget">
	
	<div class="widget-head br-red">
		<h3><i class="fa fa-bar-chart-o"></i> Latest Movies</h3>
	</div>
	
	<div class="widget-body no-padd">
		<div class="table-responsive">
			<!-- Table with icon and details -->
			<table class="table table-bordered">
			  <tbody>
			  	<tr>
			  	  <th>Rank</th>
				  <th>Image</th>
				  <th>Movie Name</th>
				  <th>Wins</th>
				  <th>Losses</th>
				</tr> 
			  	@foreach($latest_movies as $latest_movie)
				<tr>
				  <td>{{ $latest_movie->rank }}</td>
				  <td> <img src="{{ asset('img/models/W150H110/'. $latest_movie->filename) }}" style="width: 50px;height:39px"></td>				  
				  <td>{{ $latest_movie->title }}</td>
				  <td>{{ $latest_movie->wins }}</td>
				  <td>{{ $latest_movie->losses }}</td>
				</tr> 
				@endforeach
			  </tbody>
		    </table>
		</div>
	</div>
	
	<div class="widget-foot">
		<span class="pull-left">Latest Update 24 Mins Ago</span>
		<a href="{{ url('/movies') }}" class="btn btn-xs pull-right btn-success">Movie List</a>
		<div class="clearfix"></div>
	</div>
	
</div>