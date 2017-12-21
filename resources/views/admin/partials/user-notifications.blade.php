<user-notification 
   v-bind:unreads="{{ Auth::user()->unreadNotifications }}"
   v-bind:userid="{{ Auth::id() }}">
</user-notification>

<!--  <div class="dropdown">
	  <a href="#" id="users" data-toggle="dropdown" class="mhead-icon" ><i class="fa fa-user"></i> <span class="label label-success">5</span></a>
	  Dropdown
	  <ul class="dropdown-menu drop-users" role="button" aria-labelledby="users">		
		Dropdown menu head
		<li class="dropdown-head">
			Users <span class="label label-success pull-right">5</span>
		</li>
		Content
		<li><a href="#">
			User image
			<img src="img/user1.png" alt="" class="img-responsive img-circle" />
			User details
			<div class="duser-content">
				Anjelina Jolie
				<span>Lorem ipsum dolor sit amet elit.</span>
			</div>
			<div class="clearfix"></div>
		</a></li>
		<li><a href="#">
			<img src="img/user2.png" alt="" class="img-responsive img-circle" />
			<div class="duser-content">
				Brad Pitt 
				<span>Lorem ipsum dolor sit amet elit.</span>
			</div>
			<div class="clearfix"></div>
		</a></li>
		<li><a href="#">
			<img src="img/user1.png" alt="" class="img-responsive img-circle" />
			<div class="duser-content">
				Al Pacino 
				<span>Lorem ipsum dolor sit amet elit.</span>
			</div>
			<div class="clearfix"></div>
		</a></li>		
		<li class="dropdown-foot text-center">
			<a href="#">View All</a>
		</li>
	  </ul>
</div>  -->