@extends('layouts.app')

@section('htmlheader_title')
	{{$title}}
@endsection

@section('extra-header')
<link href="{{ asset('/css/flots.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('contentheader_title')
	{{$title}}
@endsection

@section('contentheader_description')
	
@endsection

@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			
			@if (Request::path() == 'Video')
			<h2 style="float:left;width:45%;">Video Details</h2>
			@endif
			
		
			
			<a href="{{ url('dashboard/video/form') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0 10px 10px">Add New</button></a>
			
			<div style="clear:both;"></div>
			<div class="box box-primary">
			<table class="table table-striped">
				<thead>
					  <tr>
						<th>S.No.</th>
						<th>Video Name</th>
					  </tr>
				</thead>
				<tbody>
				@foreach($video as $videos)
					  <tr>
						<td>{{ $videos -> id }}</td>
						<td>{{ $videos -> video_name }}</td>
						<td><a href="{{ url('videos/'.$videos -> id.'/form')}}"><i style="font-size:24px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
						<td><a href="{{ url('videos/deletecash/'.$videos -> id)}}"><i style="font-size:24px;" class="fa fa-times" aria-hidden="true"></i></a></td>
					  </tr>
				@endforeach
				</tbody>
			</table>
			</div>	
			{!!Form::close()!!}
			</div>	
		</div>
	</div>		
@endsection

