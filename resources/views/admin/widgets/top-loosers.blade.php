<div class="widget report-widget">
	
	<div class="widget-head br-lblue">
		<h3><i class="fa fa-bar-chart-o"></i>Top5 Losses</h3>
	</div>
	
	<div class="widget-body no-padd">
		<div class="table-responsive">
		  <table class="table table-bordered">
			  <tbody>
			  	<tr>
			  	  <th>Rank</th>
				  <th>Image</th>
				  <th>Movie Name</th>
				  <th>Losses</th>
				  <th>Wins</th>
				</tr> 
			  	@foreach($top5_losers as $top5_loser)
				<tr>
				  
				  <td>{{ $top5_loser->rank }}</td>
				  <td> <img src="{{ asset('img/models/W150H110/'. $top5_loser->filename) }}" style="width: 50px;height:39px"></td>	
				  <td>{{ $top5_loser->title }}</td>
				  <td>{{ $top5_loser->losses }}</td>
				  <td>{{ $top5_loser->wins }}</td>
				</tr> 
				@endforeach
			  </tbody>
		    </table>
		</div>
	</div>
	
	<div class="widget-foot">
		<span class="pull-left">Latest Update 24 Mins Ago</span>
		<a href="{{ url('/movies') }}" class="btn btn-xs pull-right btn-info">Movie List</a>
		<div class="clearfix"></div>
	</div>
	</div>
