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

@if(isset($welcome))
@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<h2 style="width:85%;float:left;">Edit Welcome Details</h2>
			<a href="{{ url('dashboard/welcome') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> "dashboard/welcome/updatewelcome", 'class'=> 'form-horizontal' ,'method' => 'post', 'files' => true))!!}	  
					<div class="form-group">
					  <label class="control-label col-sm-2" for="wtitlename">Title:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="wtitlename" placeholder="Enter Title " value="{{ $welcome -> wel_content_title }}">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="wdescname">Description:</label>
					  <div class="col-sm-10">
					  <textarea name="wdescname" placeholder="Enter Description"  id="bodyField">{{ $welcome -> wel_content_description }}</textarea>
                            @ckeditor('bodyField')
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="wimage">Image :</label>
					  <div class="col-sm-10">
						<input type="file" class="form-control" name="wimage" >
						<input type="hidden" name="wimageold" value="{{ $welcome -> img_path }}"/>

					  </div>
					</div>
					<input type="hidden" name="wid" value="{{ $welcome -> welcome_id }}"/>
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
			<h2 style="width:85%;float:left;">Add Welcome Blog Details</h2>
			<a href="{{ url('dashboard/welcome') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> 'dashboard/welcome/savewelcome', 'class'=> 'form-horizontal' ,'method' => 'post', 'files' => true ))!!}
					<div class="form-group">
					  <label class="control-label col-sm-2" for="wtitlename">Title:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="wtitlename" placeholder="Enter Title ">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="wdescname">Description:</label>
					  <div class="col-sm-10">
					  <textarea name="wdescname" placeholder="Enter Description"  id="bodyField"></textarea>
                            @ckeditor('bodyField')
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="wimage">Image :</label>
					  <div class="col-sm-10">
						<input type="file" class="form-control" name="wimage" required />
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
	
