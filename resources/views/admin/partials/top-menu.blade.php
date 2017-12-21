<a href="#" data-toggle="dropdown" id="profile">
<!-- Icon 
<i class="fa fa-user"></i>  -->

<img src="{{ asset('admin/img/user.png') }}" alt="" class="img-responsive img-circle"/>

<!-- User name -->
{{ auth()->user()->name }}  
<i class="fa fa-caret-down"></i> 
</a>
<!-- Dropdown -->
<ul class="dropdown-menu" aria-labelledby="profile">
<li><a href="#">View Profile <span class="badge badge-info pull-right">6</span></a></li>
<!-- <li><a href="#">Change Settings</a></li>
<li><a href="#">Messages <span class="badge badge-danger pull-right">5</span></a></li> -->

<li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Sign Out
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
          </form>
      </li>
</ul>