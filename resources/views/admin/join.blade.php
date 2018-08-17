@extends('layouts.app')

@section('htmlheader_title')
	{{$title}}
@endsection

@section('extra-header')
<link href="{{ asset('/css/flots.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('contentheader_title')
	{{$title}}
@endsection

@section('contentheader_description')
	
@endsection

@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			
			<h2 style="float:left;width:40%;">Join User Details</h2>

			
			
		
			<a href="{{ url('dashboard/home') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			
			
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding: 10px;">
			<table   class="table" id="myTable" >
				<thead>
					  <tr>
						<th>S No.</th>
						<th>Name</th>
						<th>Nickname</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Expertise</th>
						<th>Availablity</th>
						<th>Created at</th>
					  </tr>
				</thead>
				<tbody>	<?php	$a=1; ?>
				@foreach($joinusers as $joinuser)
					  <tr>
            <th>{{ $a }}</th>
			<th>{{ $joinuser -> name }}</th>
			<th>{{ $joinuser -> nickname }}</th>
			<th>{{ $joinuser -> mobile }}</th>
			<th>{{ $joinuser -> email }}</th>
			<th>{{ $joinuser -> expertise }}</th>
			<th>{{ $joinuser -> availablity }}</th>
		    <th>{{ $joinuser -> created_at }} </th>
			  <?php $a=$a+1	;	?>
					  </tr>
				@endforeach
				</tbody>
			</table>
			
			</div>	
		
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
		$('#myTable').DataTable({
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
