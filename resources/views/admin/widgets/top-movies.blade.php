<div class="widget report-widget">
	
	<div class="widget-head br-green">
		<h3><i class="fa fa-bar-chart-o"></i> Top5 Ranks</h3>
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
			  	@foreach($top5_movies as $top5_movie)
				<tr>
				  <td>{{ $top5_movie->rank }}</td>
				  <td> <img src="{{ asset('img/models/W150H110/'. $top5_movie->filename) }}" style="width: 50px;height:39px"></td>				  
				  <td>{{ $top5_movie->title }}</td>
				  <td>{{ $top5_movie->wins }}</td>
				  <td>{{ $top5_movie->losses }}</td>
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