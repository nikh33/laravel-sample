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
	<div class="rows">
    	<div class="col-xs-12 boards">Welcome To ThaiFestive Dashboard</div>
    </div>
 			<!-- /.box-header -->
	{{ $user = Auth::user()->name; }}
	<div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>
              <p>Registered Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      </div>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Recent Added Users</h3>

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
							@foreach($joinusers as $joinuser)
								<tbody>
								    <tr>
										<th>{{ $a }}</th>
										<th>{{ $joinuser -> name }}</th>
										<th>{{ $joinuser -> nickname }}</th>
										<th>{{ $joinuser -> mobile }}</th>
										<th>{{ $joinuser -> email }}</th>
										<th>{{ $joinuser -> expertise }}</th>
										<th>{{ $joinuser -> availablity }}</th>
										<th>{{ $joinuser -> created_at }} </th>
									</tr>
							    </tbody>
					    	@endforeach
					</table>
	            </div>
	          <!-- /.row -->
	        </div>
		</div>
    </div>
@endsection
