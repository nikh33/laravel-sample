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

@if(isset($video))
@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<h2 style="width:85%;float:left;">Edit Video Details</h2>
			<a href="{{ url('video') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> "video/updatevideo", 'class'=> 'form-horizontal' ))!!}
					<div class="form-group">
					  <label class="control-label col-sm-2" for="videoname">Video Name:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="videoname" placeholder="Enter Video Name" value="{{ $video -> video_name }}">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="videoname">Video Name:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="videoname" placeholder="Enter Video Name" value="{{ $video -> video_name }}">
					  </div>
					</div>
					<input type="hidden" name="id" value="{{ $video -> id }}"/>
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
			<h2 style="width:85%;float:left;">Add video Details</h2>
			<a href="{{ url('dashboard/video') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> 'dashboard/video/savevideo', 'class'=> 'form-horizontal' ))!!}
				<div class="form-group">
					  <label class="control-label col-sm-2" for="videoname">Video Name:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="videoname" placeholder="Enter Video Name">
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
