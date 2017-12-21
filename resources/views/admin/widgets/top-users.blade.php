
<div class="widget contacts-widget">
	
	<div class="widget-head br-purple">
		<h3><i class="fa fa-user"></i> Top5 Users</h3>
	</div>
	
	<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 340px;"><div class="widget-body scroll" style="overflow: hidden; width: auto; height: 340px;">
		
		<ul class="list-unstyled">
		
			<!-- Alphabet with number of contacts -->
			<li class="contact-alpha">
				
				<div class="clearfix"></div>
			</li>
			
			@foreach($top5_users as $top5_user)
			<li class="c-list">
				<!-- Contact pic -->
				<div class="contact-pic">
					<a href="#"><img src="{{ asset('admin/img/user.png') }}" alt="" class="img-responsive"></a>
				</div>
				<!-- Contact details -->
				<div class="contact-details">
					<!-- Contact name and number -->
					<div class="pull-left">
						<strong>{{ $top5_user->name }} | Score : {{ $top5_user->score }}</strong>
						<small>Joined Date : {{ $top5_user->created_at->todatestring() }}</small>
					</div>
					<!-- Call, Message and Email buttons -->
					<div class="pull-right">

						<a href="#" class="btn btn-info btn-xs" disabled><i class="fa fa-envelope-o"></i></a>
						<a href="#" class="btn btn-success btn-xs" disabled><i class="fa fa-comments"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</li>
			@endforeach												
			
		</ul>
												
	</div><div class="slimScrollBar" style="background: rgba(50, 50, 50, 0.3); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 150.341px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
	
	<div class="widget-foot">
		<span class="pull-left">520 Contacts</span>
		<a href="{{ url('/users') }}" class="btn btn-purple btn-xs pull-right">User List</a>
		<div class="clearfix"></div>
	</div>
	
</div>