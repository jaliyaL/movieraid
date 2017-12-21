@extends('admin.layouts.app')

@section('title')
Users
@endsection

@section('styles')

@endsection

@section('page-title')

@endsection

@section('content')
<!-- Heading -->
<div class="single-head">
	<!-- Heading -->
	<h3 class="pull-left"><i class="fa fa-desktop purple"></i> User List</h3>
	<!-- Bread crumbs -->
	<div class="breads pull-right">
		<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
	</div>
	<div class="clearfix"></div>
</div>


	<user-list-table v-bind:users="{{ $users }}"></user-list-table>



@endsection

@section('footer')

@endsection
