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
			
			@if (Request::path() == 'Welcome')
			<h2 style="float:left;width:45%;">Welcome Details</h2>
			@endif
			
		
			
			<a href="{{ url('dashboard/welcome/form') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0 10px 10px">Add New</button></a>
			
			<div style="clear:both;"></div>
			<div class="box box-primary"  style="padding: 10px;">
			<table class="table " id="myWelcome">
				<thead>
					  <tr>
						<th>S.No.</th>
						<th>Title</th>
						<th>Description</th>
						<th>image</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
				</thead>
				<tbody><?php $i = 1;  $path = '../images/main/'; ?> 
				@foreach($welcome as $welcomes)
					  <tr>
						<td>{{ $i }}</td>
						<td>{{ $welcomes -> wel_content_title }}</td>
						<td>{{ $welcomes -> wel_content_description }}</td>
						<td><img src ="<?php echo $path ?>{{ $welcomes -> img_path }}" width="100"/></td>
						<td><a href="{{ url('dashboard/welcome/'.$welcomes -> welcome_id.'/form')}}"><i style="font-size:24px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
						<td><a href="{{ url('dashboard/welcome/deletewelcome/'.$welcomes -> welcome_id)}}"><i style="font-size:24px;" class="fa fa-times" aria-hidden="true"></i></a></td>
					  </tr>
					<?php $i++; ?>
				@endforeach
				</tbody>
			</table>
			</div>	
			{!!Form::close()!!}
			</div>	
		</div>
	</div>		
@endsection
@section('extra-scripts')
  <!-- DataTables -->
	<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
	  $(function () {
		$('#myWelcome').DataTable({
		  "paging": true,
		  "pagingType": "simple",
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": false,
		  "autoWidth": true,
		  //"scrollY": "600px",
		  //"scrollCollapse": true,
		  "order": [[ 0, "desc" ]],
		});
		
	  });
	</script>
@endsection

