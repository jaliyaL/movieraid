@extends('app')

@section('title', 'Home | MovieRaid v1.0')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-center vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jumbotron bg-inherit text-white">
                    <div class="container">
                        {{--<h1 class="raleway">FACEM<i class="fa fa-smile-o"></i>SH<sup><em class="font70 lato"><span class="text-cyan">beta</span></em></sup>&nbsp;</h1>--}}
                        <h1 class="khand"><span class="font150">MOVIE<span class="text-red">RAID</span><sup><em class="font70 lato"><span class="text-cyan">beta</span></em></sup>&nbsp;</span></h1>
                        <p>Compare movies - Be Careful though.</p>
                        <p class="text-uppercase montserrat ">
                            @if (Auth::check()) 
                                <!--<a href="{{ url('/images') }}" class="btn btn-red">Upload images</a>-->
                                <a href="{{ url('/game') }}" class="btn btn-cyan">Play game</a>
                                <a href="{{ url('stats') }}" class="btn btn-orange">Game Stats</a>
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="btn btn-cyan">Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                </form>
                            @else
                                <a href="{{ url('/login') }}" class="btn btn-white">Login</a>
                                <a href="{{ url('/register') }}" class="btn btn-red">Register</a>
                                <a href="{{ url('/stats') }}" class="btn btn-white">Game Stats</a>
                            @endif 
                            <!-- <a href="{{ url('/share') }}" class="btn btn-orange">Invite friends</a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection