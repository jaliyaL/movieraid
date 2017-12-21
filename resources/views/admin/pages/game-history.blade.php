@extends('admin.layouts.app')

@section('title')
History
@endsection

@section('styles')

@endsection

@section('page-title')

@endsection

@section('content')
<!-- Heading -->
<div class="single-head">
	<!-- Heading -->
	<h3 class="pull-left"><i class="fa fa-desktop purple"></i>Game History</h3>
	<!-- Bread crumbs -->
	<div class="breads pull-right">
		<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
	</div>
	<div class="clearfix"></div>
</div>


	<div class="table-responsive">
    <table class="table table-hover table-bordered ">
      <thead>
        <tr>
          <th>#</th>
          <th>User</th>
          <th>Winner</th>
          <th>Loser</th>
          <th>Date/Time</th>
          <th>Controls</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($games as $game)
       <tr>
        <td>{{ $game->id }}</td>
        <td>{{ $game->userName->name }}</td>
        <td>{{ $game->winnerTitle->title  }}</td>
        <td>{{ $game->loserTitle->title  }}</td>
        <td>{{ $game->created_at  }}</td>
        <td>
          <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
          <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
          <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
        </td>
    </tr> 
    @endforeach
      </tbody>
    </table>
  </div>
  <span class="pull-right">{{ $games->links() }}</span>
<!--   <ul class="pagination pagination-sm pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
</ul> -->

<div class="clearfix"></div>

</div>

@endsection

@section('footer')

@endsection
