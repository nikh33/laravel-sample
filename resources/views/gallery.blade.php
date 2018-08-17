@include('header')

@yield('content')

		<div class="w3ls-heading">
			<h2>Gallery</h2>
		</div>


	<!---728x90--->
	<!-- gallery -->
	<div class="gallery">
		<div class="container" >
		    <div class="gallery-grids">
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g1.jpg')">
							<figure class="effect-apollo">

									<img src="images/g1.jpg" alt=""  id="myImg" />

                              	<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g2.jpg')">
							<figure class="effect-apollo">

									<img src="images/g2.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g3.jpg')">
							<figure class="effect-apollo">

									<img src="images/g3.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<!---728x90--->
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g4.jpg')">
							<figure class="effect-apollo">

									<img src="images/g4.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g5.jpg')">
							<figure class="effect-apollo">

									<img src="images/g5.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g6.jpg')">
							<figure class="effect-apollo">

									<img src="images/g6.jpg" alt="" />
									<figcaption>
									</figcaption>

						</div>
					</div>
					<!---728x90--->
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g7.jpg')">
							<figure class="effect-apollo">

									<img src="images/g7.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g8.jpg')">
							<figure class="effect-apollo">

									<img src="images/g8.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="grid" onclick="showmodel('images/g9.jpg')">
							<figure class="effect-apollo">

									<img src="images/g9.jpg" alt="" />
									<figcaption>
									</figcaption>

							</figure>
						</div>
					</div>
					<div class="clearfix"> </div>

			</div>

		<div id="myModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		  <div class="modal-dialog modal-lg">
    		<!-- Modal content-->
		    <div class="modal-content">
		          <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Thai Food Festival 2017</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal.</p>
		      </div>
		    </div>
		  </div>
		</div>
	  </div>
    </div>
	<!-- //gallery -->
@include('footer')
