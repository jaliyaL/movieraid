  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-50">
    <span class="pull-left" style="margin-top: -13px;">
      <h3 class="khand"><span class="font150">MOVIE<span class="text-red">RAID</span><sup><em class="font70 lato"><span class="text-cyan">beta</span></em></sup>&nbsp;</span></h3>
    </span>
    <ul class="list-inline pull-right">
      <li><a href="{{ url('/') }}" class="btn btn-sm btn-cyan">Home</a></li>
      <li><a href="{{ url('stats') }}" class="btn btn-sm btn-orange">Game Stats</a></li>
      @if (Auth::check()) 
      <li class="active"><a href="{{ url('game') }}" class="btn btn-sm btn-green">Play Game</a></li>
      <li><a href="{{ url('/my-stats') }}" class="btn btn-sm btn-white">My Stats</a></li>

      @if(count(Auth::user()->unreadNotifications)>0)
      <li class="dropdown">
        <a class="dropdown-toggle btn btn-sm btn-red" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o fa-lg" aria-hidden="true"></i>
            <span class="badge noticount">
             {{ count(Auth::user()->unreadNotifications) }}
            </span>
        </a>
        <ul class="dropdown-menu">
          @foreach (Auth::user()->unreadNotifications as $notification)
            <li class="{{ $notification->id }}">
              <a href="{{ $notification->id }}" class="noti" data-notifId="232323">
                <span class="font12"><b>{{ $notification->data['header'] }}</b><br>
                 {{ $notification->data['body1'] }}<br>
                 {{ $notification->data['body2'] }}<br>
                <span class="font10">{{  $notification->created_at->diffForHumans() }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      </li>
      @endif
      <!--<li><a href="{{ url('images') }}" class="btn btn-sm btn-red">Upload</a></li>-->
      <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-sm btn-cyan">Log Out
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
          </form>
      </li>
      @else
          <li><a href="{{ url('/login') }}" class="btn btn-sm btn-white">Login</a></li>
          <li><a href="{{ url('/register') }}" class="btn btn-sm btn-red">Register</a></li>
      @endif
    </ul>
  </div>