@include('header')
@yield('content')
		<div class="w3ls-heading">
			<h2>Albums</h2>
		</div>

        <div class="gallery">
        <div id="main" class="container">
          <div id="gallery" class="row">
            <div class="col-xs-4 gallery-item">
              <div class="album" >
                <img src="images/g5.jpg" alt="" />
                <img src="images/g3.jpg" alt="" />
                <img src="images/g4.jpg" alt="" />
                <img src="images/g6.jpg" alt="" />
                <img src="images/g7.jpg" alt="" />
                <img src="images/g8.jpg" alt="" />
              </div>
            <p><a href = "gallery-thai-festive">Thai Food Festival 2017</a></p>
            </div>
          </div>
        </div>
</div>

@include('footer')
