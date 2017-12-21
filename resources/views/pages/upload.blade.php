@extends('app')

@section('title', 'Upload | MovieRaid v1.0')

@section('content')

<div class="home">
    <div class="container">
     @include('partials.navigation')
        <div class="row text-center vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('partials.notifications')
                <div class="jumbotron bg-inherit text-white">
                    <div class="container">
                        <h2 class="raleway">Paste Image assets inside public/img directory</h2>
                        @if(count($errors) > 0)
                        <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                        @endif  
                        <!-- @if (count($errors) > 0)
                          <div class = "alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                @endforeach
                             </ul>
                          </div>
                        @endif -->
                        <form class="form-inline" method="POST" action="/upload" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <!--<div class="form-group fileUpload btn btn-primary">
                          <span>Upload</span>
                          <input type="file" name="photos[]" class="upload" multiple />
                          </div>-->
                          <div class="fileUpload btn btn-primary">
                              <input id="uploadBtn" type="file" name="photos[]" multiple />
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-cyan montserrat">UPLOAD</button>
                          </div>
                          <!--<input type="submit" class="btn btn-cyan montserrat" value="Upload" />-->
                        </form> 
                        @if(count($images))
                          OR <br>
                          <p><a href="{{ url('/game') }}" class="btn  btn-green montserrat text-uppercase">Start Game</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop