@extends('app')

@section('title', 'Game | MovieRaid v1.0')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-center">
        @include('partials.navigation')
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-50">
                @if(count($images)>=2)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form id="left-form" class="form-horizontal" method="POST" action="/game/update">
                    {{ csrf_field() }}
                      <div class="form-group">
                          <input type="hidden" class="form-control" name="winner" id="{{ $images->first()->id }}" value="{{ $images->first()->id }}"></input>
                          <input type="hidden" class="form-control" name="loser" id="{{ $images->last()->id }}" value="{{  $images->last()->id }}"></input>
                      </div>
                    </form> 

                    <div id="left" class="animated bounceInLeft">
                        <a href="#" class="pickoption" data-winside="left">
                            <div class="view view-first">
                                <img src="{{ asset('img/models/W600H400/'. $images->first()->filename) }}" alt="" class="img-responsive">
                                <div class="mask">
                                    <h2>Rank: {{ $images->first()->rank }} </h2>
                                    <p class="lead">Movie stats are these</p>
                                    <table class="table bg-inherit text-center">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><span class="font120">Won: {{ $images->first()->wins }}</span></td></tr>
                                            <tr><td><span class="font120">Lost: {{ $images->first()->losses }}</span></td></tr>
                                            <tr><td><span class="font120">Score: {{ $images->first()->score }}</span></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form id="right-form" class="form-horizontal" method="POST" action="/game/update">
                    {{ csrf_field() }}
                      <div class="form-group">
                          <input type="hidden" class="form-control" name="winner" id="{{ $images->last()->id }}" value="{{ $images->last()->id }}"></input>
                          <input type="hidden" class="form-control" name="loser" id="{{ $images->first()->id }}" value="{{  $images->first()->id }}"></input>
                      </div>
                    </form> 

                    <div id="right" class="animated bounceInRight">
                        <a href="#" class="pickoption" data-winside="right">
                            <div class="view view-first">
                                <img src="{{ asset('img/models/W600H400/'. $images->last()->filename) }}" alt="" class="img-responsive">
                                <div class="mask">
                                    <h2>Rank: {{ $images->last()->rank }} </h2>
                                    <p class="lead">Movie stats are these</p>
                                    <table class="table bg-inherit text-center">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><span class="font120">Won: {{ $images->last()->wins }}</span></td></tr>
                                            <tr><td><span class="font120">Lost: {{ $images->last()->losses }}</span></td></tr>
                                            <tr><td><span class="font120">Score: {{ $images->last()->score }}</span></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                          </div>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="list-inline">                   
                  @foreach($top6 as $top)
                    <li class="col-lg-2">
                     <p><strong>Rank:{{ $top->rank }}</strong></p>
                     <img src="{{ asset('img/models/W150H110/'. $top->filename) }}" alt="" class="img-responsive">
                        <ul class="list-inline list-unstyled margin-top-10 small">
                          <li><strong>Won:<span classs="text-success">{{ $top->wins }}</span></strong></li> 
                          <li><strong>Lost:<span classs="text-success">{{ $top->losses }}</span></strong></li> 
                          <li><strong>Score:<span classs="text-success">{{ $top->score }}</span></strong></li> 
                        </ul>
                    </li>  
                  @endforeach
              </ul>       
          </div>         
        </div>
    </div>
</div>

@stop