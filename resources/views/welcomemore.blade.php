@include('header')

@yield('content')
	<div class="w3ls-heading">
		<h2> WELCOME TO VICTORIA'S THAI CULTURE AND FOOD FESTIVAL</h2>
	</div>


	<!---728x90--->
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
					<div class="col-md-12 gallery-grid" style=" margin-bottom: 8px;">
						<div class="grid">
									<img src="{{ url('images/g1.jpg') }}" style="height: 300px;width: 600px;" alt="">
						<h4>Thai Village @ Federation Square</h4>
							<p style="text-align: justify;">THAI VILLAGE: with lots and lots of demonstrations and free workshop.
                                   with lots and lots of demonstrations and free workshop.with lots and lots of demonstrations and free workshop.
                                   with lots and lots of demonstrations and free workshop.with lots and lots of demonstrations and free workshop.
                                   with lots and lots of demonstrations and free workshop.</p>
							<a href="#" class="btn btn-info" role="button">Comming Soon</a>
						</div>
					</div>


					<div class="clearfix"> </div>
					<script src="{{ url('js/lightbox-plus-jquery.min.js') }}"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->
@include('footer')
