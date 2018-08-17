@extends('layouts.app')

@section('htmlheader_title')
	{{$title}}
@endsection

@section('contentheader_title')
	{{$title}}
@endsection

@section('contentheader_description')

@endsection

@section('main-content')

 			<!-- /.box-header -->
	{{$user = Auth::user()->name;}}

<div class="row">
	<div class="col-md-12">
			<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"> Added Users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding" style="display: block;">
              <div class="row">

                <!-- /.col -->
                <div class="col-md-12 col-sm-8">
                  <table style="color:#000000" class="table table-bordered">
					<thead>
					    <th>S No.</th>
						<th>Name</th>
						<th>Nickname</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Expertise</th>
						<th>Availablity</th>
					    <th>Created at</th>
					</thead>
					<?php	$a=1; ?>
					@foreach($joinusers as $joinuser)
					     <th>{{ $a++ }}</th>
						<th>{{ $joinuser -> name }}</th>
						<th>{{ $joinuser -> nickname }}</th>
						<th>{{ $joinuser -> mobile }}</th>
						<th>{{ $joinuser -> email }}</th>
						<th>{{ $joinuser -> expertise }}</th>
						<th>{{ $joinuser -> availablity }}</th>
					    <th>{{ $joinuser -> created_at }} </th>
					@endforeach
					</table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
	</div>
</div>
@endsection
