@extends('admin.layouts.app')

@section('title')
Base page
@endsection

@section('styles')

@endsection

@section('page-title')
 Base Page
@endsection

@section('content')
<!-- Heading -->
<div class="single-head">
	<!-- Heading -->
	<h3 class="pull-left"><i class="fa fa-desktop purple"></i> Your Page</h3>
	<!-- Bread crumbs -->
	<div class="breads pull-right">
		<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
	</div>
	<div class="clearfix"></div>
</div>

<!-- Address -->
<div class="row">

  <div class="col-md-4 col-sm-4">
	<h5>Metro King</h5>
	<p>
	  19/133, New New York Street<br>
	  Near Bus Stop, Right side <br>
	  Mexico, NY - 63442<br>
	  USA
	</p>
  </div>

  <div class="col-md-4 col-sm-4">
	<h5>MacMedia</h5>
	<p>
	  24/133, Mexico Street<br>
	  Near Airport, Right side <br>
	  Mexico, CA - 53432<br>
	  Mexico
	</p>                        
  </div>

  <div class="col-md-4 col-sm-4">
	<h5>Invoice</h5>
	<p>
	  Invoice No : 52322<br>
	  Date : 12/34/2012<br>
	  Account No : 4290293203
	</p>
  </div>

</div>
@endsection

@section('footer')

@endsection
