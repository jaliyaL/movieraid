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
	<h3 class="pull-left"><i class="fa fa-desktop purple"></i> Movie List</h3>
	<!-- Bread crumbs -->
	<div class="breads pull-right">
		<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
	</div>
	<div class="clearfix"></div>
</div>
    <!-- <button type="button" class="btn btn-sm btn-primary">
    	<i class="fa fa-plus"></i> Add New</button> -->
<a href="{{ url('/add-movie') }}" class="btn btn-sm btn-primary"> Add New</a>
<movie-list-table v-bind:movies="{{ $movies }}"></movie-list-table>


@endsection

@section('footer')

@endsection
