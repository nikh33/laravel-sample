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

@if(isset($event))
@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<h2 style="width:85%;float:left;">Edit Event Details</h2>
			<a href="{{ url('dashboard/event') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> "dashboard/event/updateevent", 'class'=> 'form-horizontal' ,'method' => 'post', 'files' => true))!!}	  
					<div class="form-group">
					  <label class="control-label col-sm-2" for="etitle">Title:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="etitle" placeholder="Enter Title " value="{{ $event -> up_event_name }}" required>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="edescription">Description:</label>
					  <div class="col-sm-10">
					  <textarea name="edescription" placeholder="Enter Description"  id="bodyField" required>{{ $event -> up_event_description }}</textarea>
                            @ckeditor('bodyField')
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="eimage">Image :</label>
					  <div class="col-sm-10">
						<input type="file" class="form-control" name="eimage" >
						<input type="hidden" name="eimageold" value="{{ $event -> up_event_imgpath }}" required />
                      </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="edate">Event Date :</label>
					  <div class="col-sm-10">
						<input type="date" class="form-control" name="edate" min="<?php echo date("Y-m-d") ; ?>"  value="{{ $event -> up_event_date }}" required />
                      </div>
					</div>
					<input type="hidden" name="eid" value="{{ $event -> event_id }}"/>
					<div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						{!!Form::submit('Update', ['class' => 'btn btn-default'])!!}
					  </div>
					</div>
				{!!Form::close()!!}
			</div>	
		</div>
	</div>		
@endsection
@endif
@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<h2 style="width:85%;float:left;">Add Event Details</h2>
			<a href="{{ url('dashboard/event') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> 'dashboard/event/saveevent', 'class'=> 'form-horizontal' ,'method' => 'post', 'files' => true ))!!}
					<div class="form-group">
					  <label class="control-label col-sm-2" for="etitle">Title:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="etitle" placeholder="Enter Title " required>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="edescription">Description:</label>
					  <div class="col-sm-10">
					  <textarea name="edescription" placeholder="Enter Description"  id="bodyField" required ></textarea>
                            @ckeditor('bodyField')
					  </div>
					</div>
				<div class="form-group">
					  <label class="control-label col-sm-2" for="eimage">Image :</label>
					  <div class="col-sm-10">
						<input type="file" class="form-control" name="eimage" required />
                      </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="edate">Event Date :</label>
					  <div class="col-sm-10">
						<input type="date" class="form-control" min="<?php echo date("Y-m-d") ; ?>"  name="edate" required />
                      </div>
					</div>
					<div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						{!!Form::submit('Save', ['class' => 'btn btn-default'])!!}
					  </div>
				   </div>
				{!!Form::close()!!}
			</div>	
		</div>
	</div>		
@endsection
	
