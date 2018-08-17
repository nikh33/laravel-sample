
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
	<div class="row">


		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<div class="box box-danger">
			<div class="box-header">
				  <i class="fa fa-credit-card"></i></a>&nbsp&nbsp<h3 class="box-title">Add New User</h3>
			</div>
			<!-- /.box-header -->
			 {!!Form::open(array('url'=> 'user/add', 'class'=> 'form-horizontal' ))!!}
			 <div class="box-body">
				<!-- form start -->
					<div class="form-group">
					  <label class="control-label col-sm-2" for="badgeId">New User ID:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="badgeId" placeholder="UserId">
					  </div>
					</div>

					<div class="form-group">
					  <label class="control-label col-sm-2" for="password">Password:</label>
					  <div class="col-sm-10">
						<input type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="cpassword">Confirm Password:</label>
					  <div class="col-sm-10">
						<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="user_type">Type:</label>
					  <div class="col-sm-10">
						  <select class="form-control" onchange="check(this.value)"  name="user_type">
							<option>Select Type</option>
							@if(isset($userlog))
                          	@if($userlog == 'SuperAdmin')
                            <option value="SuperAdmin">SuperAdmin</option>
							<option value="Administrator">Administrator</option>
							<option value="User">User</option> @endif
                            @if($userlog =='Administrator')
							<option value="User">User</option> @endif
							@endif
						  </select>
					  </div>
					</div>

					<div class="form-group" id="see1" style="display:none">
					  <label class="control-label col-sm-2" for="company_id">Company:</label>
					  <div class="col-sm-10">
						  <select class="form-control" name="company_id">
							@if(isset($companies))
							@foreach($companies as $company)
							<option value="{{ $company -> id }}">{{ $company -> company_name }}</option>
							@endforeach
							@endif
						  </select>
					  </div>
					</div>
			  </div>
			  <!-- /.box-body -->
			<div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						<div class="box-footer">
				{!!Form::submit('Add User', ['class' => 'btn btn-warning'])!!}
					  </div>
					</div>
			  </div>
			  {!!Form::close()!!}
		</div>
	</div>

		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
				  <i class="fa fa-user"></i></a>&nbsp&nbsp<h3 class="box-title">User List</h3>
				 </div>
			<!-- /.box-header -->
				<div class="box-body">
				  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-12">
							<table id="users" class="table table-bordered dataTable table-hover display compact" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">ID</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">User ID</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Roles</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Company Name</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Created At</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Updated At</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Last Access At</th>
									<th class="sorting desc" tabindex="0" aria-controls="users" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Tools</th>
								</tr>
							</thead>
							<tbody>
							 	<?php $i=1;?>
							@foreach ($users as $user)
								<tr role="row" class="odd">
								  <td><?php echo $i++;?></td>
								  <td>{{ $user->username }} </td>
								  <td>{{ $user->name }} </td>
								  <td>{{ $user->company_name }} </td>
								  <td>{{ $user->created_at }} </td>
								  <td>{{ $user->updated_at }} </td>
								  <td>{{ $user->accessed_at }} </td>
								  <td>
								  @if ($user->name =='SuperAdmin')
									<a href="{{ url('/user/reset', $user->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-registered"></i></a>&nbsp&nbsp
								  @else
									<a href="{{ url('/user/remove', $user->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>&nbsp&nbsp
									<a href="{{ url('/user/reset', $user->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-registered"></i></a>&nbsp&nbsp
									@if($user->active == 1)
									<a href="{{ url('/user/active', $user->id)}}" class="btn btn-warning btn-xs" style="background-color:#FFF;"><i class="fa fa-toggle-on" aria-hidden="true" style="color:green;"></i></a>&nbsp&nbsp
									@else
										<a href="{{ url('/user/active', $user->id)}}" class="btn btn-warning btn-xs" style="background-color:#FFF;"><i class="fa fa-toggle-on" aria-hidden="true" style="color:red;"></i></a>&nbsp&nbsp
								  @endif
								  @endif
								  </td></tr>
                            @endforeach

							</tbody>
						  </table></div></div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>



	</div>
@endsection


@section('extra-scripts')
   <script type="text/javascript">
		$(function () {
			$('#users').DataTable({
			  "paging": false,
			  "pagingType": "simple",
			  "lengthChange": false,
			  "searching": false,
			  "ordering": true,
			  "info": true,
			  "autoWidth": true,
			  //"scrollY": "600px",
			  //"scrollCollapse": true,
			  "order": [[ 0, "asc" ]],
			  "lengthMenu": [[20, 35, 50, -1], [20, 35, 50, "All"]],
			});

		});

		function check(s) {
			if( s == 'Administrator' || s == 'User') {
				jQuery('#see1').show();
			}
			else {
				jQuery('#see1').hide();
			}
		}
	</script>

@endsection
