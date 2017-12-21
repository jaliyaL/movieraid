@extends('admin.layouts.app')

@section('title')
Movies
@endsection

@section('styles')

@endsection

@section('page-title')

@endsection

@section('content')
<!-- Heading -->
<div class="single-head">
	<!-- Heading -->
	<h3 class="pull-left"><i class="fa fa-desktop purple"></i> Add Movie</h3>
	<!-- Bread crumbs -->
	<div class="breads pull-right">
		<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
	</div>
	<div class="clearfix"></div>
</div>
@if($errors->any())
    <div class="alert alert-danger">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @foreach ($errors->all() as $error)
           {{ $error }}<br>
        @endforeach
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('success') }}
    </div>
@endif

<div class="page-form">  
 <form class="form-horizontal" method="POST" action="/submit-movie" enctype="multipart/form-data">
    {{ csrf_field() }}          
	<div class="form-group">
		<label class="col-lg-2 control-label">Movie Name</label>
		<div class="col-lg-10">
			<input type="text" class="form-control" name="movie_name" placeholder="">
		</div>
	</div>

	<div class="form-group">
		<label for="exampleInputFile" class="col-lg-2 control-label">Movie Poster</label>
		<div class="col-lg-10">
			<input type="file" id="exampleInputFile" name="photos">
			<p class="help-block">Click to upload your file.</p>
		</div>
	</div>
	<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
		<button type="submit" class="btn btn-primary">Add Movie</button>
		<a href="{{ url('/movies') }}" class="btn btn-default">Cancel</a>
	</div>	
</div>
</form>
</div>
@endsection

@section('footer')

@endsection
