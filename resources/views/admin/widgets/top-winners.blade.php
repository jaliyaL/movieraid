 <div class="widget report-widget">
	
	<div class="widget-head br-red">
		<h3><i class="fa fa-bar-chart-o"></i> Top5 Winners</h3>
	</div>
	
	<div class="widget-body no-padd">
		<div class="table-responsive">
	      <table class="table table-bordered">
			  <tbody>
			  	<tr>
				  <th>Rank</th>
				  <th>Image</th>
				  <th>Movie Name</th>
				  <th>Wins</th>
				  <th>Losses</th>
				</tr> 
			  	@foreach($top5_winners as $top5_winner)
				<tr>
				  <td>{{ $top5_winner->rank }}</td>
				  <td> <img src="{{ asset('img/models/W150H110/'. $top5_winner->filename) }}" style="width: 50px;height:39px"></td>	
				  <td>{{ $top5_winner->title }}</td>
				  <td>{{ $top5_winner->wins }}</td>
				  <td>{{ $top5_winner->losses }}</td>
				</tr> 
				@endforeach
			  </tbody>
		    </table>
		</div>
	</div>
	
	<div class="widget-foot">
		<span class="pull-left">Latest Update 24 Mins Ago</span>
		<a href="{{ url('/movies') }}" class="btn btn-xs pull-right btn-danger">Movie List</a>
		<div class="clearfix"></div>
	</div>
</div>