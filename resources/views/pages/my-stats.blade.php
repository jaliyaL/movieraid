@extends('app')

@section('title', 'My Stats | MovieRaid v1.0')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-left align">
        @include('partials.navigation')
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 margin-top-100">
                <div class="panel">
                  <div class="text-center"><h4>My Game History</h4></div>
                  <div class="panel-body">
                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date / Time</th>
                          <th>Winner</th>
                          <th>Loser</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($games as $game)
                        <tr>
                          <td>{{ $game->created_at }}</td>
                          <td>{{ $game->winnerTitle->title }}</td>
                          <td>{{ $game->loserTitle->title }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <span class="col-md-offset-4">{{ $games->links() }}</span>
                  </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 margin-top-100">
              <div class="panel-group">
                <div class="panel">
                  <div class="text-center"><h4>My Game Status</h4></div>
                  <div class="panel-body">
                      <ul class="list-group">
                        <li class="list-group-item"><b>My Rank : </b><span class="badge">none</span></li>
                        <li class="list-group-item"><b>My Score : </b><span class="badge">{{ $user->score }}</span></li>
                        <li class="list-group-item"><b>My Title : </b><span class="badge">{{ $user_title }}</span></li>
                      </ul> 
                  </div>
                </div><br>
                <div class="panel">
                  <div class="text-center"><h4>My Profile</h4></div>
                  <div class="panel-body">
                      <ul class="list-group">
                        <li class="list-group-item"><b>User Name : </b><span> {{ $user->name }}</span></li>
                        <li class="list-group-item"><b>Email : </b><span> {{ $user->email }}</span></li>
                        <li class="list-group-item"><b>Joined Date : </b><span> {{ $user->created_at }}</span></li>
                      </ul> 
                  </div>
                </div>
              </div>

            </div>
        </div>
    </div>
</div>

@stop