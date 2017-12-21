@extends('admin.layouts.app')

@section('title')
Dashboard
@endsection

@section('styles')

@endsection

@section('page-title')

@endsection

@section('content')
<!-- Heading -->
<div class="single-head">
	<!-- Heading -->
	<h3 class="pull-left"><i class="fa fa-desktop purple"></i> Dashboard</h3>
	<!-- Bread crumbs -->
	<div class="breads pull-right">
		<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
	</div>
	<div class="clearfix"></div>
</div>

<!-- row1 -->
<div class="row">
    <div class="col-md-6 col-sm-6">
       @include('admin.widgets.stats')
	</div>
    <div class="col-md-6 col-sm-6">
      @include('admin.widgets.knob-stats')
    </div>
</div>	

<!-- row2 -->
<div class="row">
    <div class="col-md-4 col-sm-4">
        @include('admin.widgets.top-movies')
    </div>
    <div class="col-md-4 col-sm-4">
  	    @include('admin.widgets.top-winners')
    </div>
    <div class="col-md-4 col-sm-4">
  	    @include('admin.widgets.top-loosers')
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-sm-4">
      @include('admin.widgets.latest-movies')  
							
	</div>
	<div class="col-md-4 col-sm-4">
    @include('admin.widgets.top-users')
       
	</div>
    <div class="col-md-4 col-sm-4">
       @include('admin.widgets.new-users')  
					
	</div>
</div>
@endsection

@section('footer')

@endsection
