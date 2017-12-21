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
      @php
        $user = Auth::user();
        $counter = 0;
      @endphp

      @foreach (Auth::user()->unreadNotifications as $notification)
          @if($notification->type=='App\Notifications\UserGameTitleUpgrade')
             @php $counter = $counter + 1 @endphp 
          @endif
      @endforeach
      
      @if($counter>0)
      <li class="dropdown">
        <a class="dropdown-toggle btn btn-sm btn-red" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o fa-lg" aria-hidden="true"></i>
            <span class="badge noticount">
             {{ $counter }}
            </span>
        </a>
        <ul class="dropdown-menu">
          @foreach (Auth::user()->unreadNotifications as $notification)
            @if($notification->type=='App\Notifications\UserGameTitleUpgrade')
            <li class="{{ $notification->id }}">
              <a href="{{ $notification->id }}" class="noti" data-notifId="232323">
                <span class="font12"><b>Congratulations !</b><br>
                 You scored {{ $notification->data['score'] }} Marks & Earned <br>the Title <i>" {{ $notification->data['new_user_title'] }} "</i></span><br>
                <span class="font10">{{  $notification->created_at->diffForHumans() }}</span>
              </a>
            </li>
            @endif
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