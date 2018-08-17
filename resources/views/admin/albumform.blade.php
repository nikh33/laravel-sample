@extends('layouts.app')

@section('htmlheader_title')
	{{$title}}
@endsection

@section('extra-header')
<link href="{{ asset('/css/flots.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" /> 
<style type="text/css">
form{
background-color:#fff
}
#maindiv{
width:960px;
margin:10px auto;
padding:10px;
font-family:'Droid Sans',sans-serif
}
#formdiv{
width:500px;
float:left;
text-align:center
}
form{
padding:40px 20px;
box-shadow:0 0 10px;
border-radius:2px
}
h2{
margin-left:30px
}
.upload{
background-color:red;
border:1px solid red;
color:#fff;
border-radius:5px;
padding:10px;
text-shadow:1px 1px 0 green;
box-shadow:2px 2px 15px rgba(0,0,0,.75)
}
.upload:hover{
cursor:pointer;
background:#c20b0b;
border:1px solid #c20b0b;
box-shadow:0 0 5px rgba(0,0,0,.75)
}
#file{
color:green;
padding:5px;
border:1px dashed #123456;
background-color:#f9ffe5
}
#upload{
margin-left:45px
}
#noerror{
color:green;
text-align:left
}
#error{
color:red;
text-align:left
}
#img{
width:17px;
border:none;
height:17px;
margin-left:-20px;
margin-bottom:91px
}
.abcd{
text-align:center
}
.abcd img{
height:100px;
width:100px;
padding:5px;
border:1px solid #e8debd
}
b{
color:red
}

</style>
@endsection

@section('contentheader_title')
	{{$title}}
@endsection

@section('contentheader_description')
	
@endsection

@if(isset($album))
@section('main-content')
	<div class="row">
		<div class="column col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<h2 style="width:85%;float:left;">Edit Album Details</h2>
			<a href="{{ url('album') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> "album/updatealbum", 'class'=> 'form-horizontal' ))!!}	  
					<div class="form-group">
					  <label class="control-label col-sm-2" for="albumname">Album Name:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="albumname" placeholder="Enter Album Name" value="{{ $album -> album_name }}">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="albumname">Album Name:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="albumname" placeholder="Enter Album Name" value="{{ $album -> album_name }}">
					  </div>
					</div>
					<input type="hidden" name="id" value="{{ $album -> id }}"/>
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
			<h2 style="width:85%;float:left;">Add Album Details</h2>
			<a href="{{ url('album') }}"><button type="button" class="btn btn-primary" style="float:right;margin:20px 0px 10px 0">Back</button></a>
			<div style="clear:both;"></div>
			<div class="box box-primary" style="padding:30px;">
				{!!Form::open(array('url'=> 'album/savealbum', 'class'=> 'form-horizontal' ))!!}
				<div class="form-group">
					  <label class="control-label col-sm-2" for="albumname">Album Name:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" name="albumname" placeholder="Enter Album Name">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="albumname">Album Images:</label>
					  <div class="col-sm-10" id="filediv">
						<input required type="file" class="form-control" id="file" name="images[]" placeholder="Album" multiple>
						<input type="button" id="add_more" class="upload" value="Add More Files"/>

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
@section('extra-scripts')
	<script type="text/javascript">
		var abc = 0;      // Declaring and defining global increment variable.
		$(document).ready(function() {
		//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
		$('#add_more').click(function() {
		$(this).before($("<div/>", {
		id: 'filediv'
		}).fadeIn('slow').append($("<input/>", {
		name: 'file[]',
		type: 'file',
		id: 'file'
		}), $("<br/><br/>")));
		});
		// Following function will executes on change event of file input to select different file.
		$('body').on('change', '#file', function() {
		if (this.files && this.files[0]) {
		abc += 1; // Incrementing global variable by 1.
		var z = abc - 1;
		var x = $(this).parent().find('#previewimg' + z).remove();
		$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
		var reader = new FileReader();
		reader.onload = imageIsLoaded;
		reader.readAsDataURL(this.files[0]);
		$(this).hide();
		$("#abcd" + abc).append($("<img/>", {
		id: 'img',
		src: '/thaifes/public/x.png',
		alt: 'delete'
		}).click(function() {
		$(this).parent().parent().remove();
		}));
		}
		});
		// To Preview Image
		function imageIsLoaded(e) {
		$('#previewimg' + abc).attr('src', e.target.result);
		};
		$('#upload').click(function(e) {
		var name = $(":file").val();
		if (!name) {
		alert("First Image Must Be Selected");
		e.preventDefault();
		}
		});
		});
	</script>
@endsection
