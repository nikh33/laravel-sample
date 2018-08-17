
	<!-- //footer -->
	<!-- copyright -->
	<div class="agileits-w3layouts-copyright">
		<div class="container">

			<p>© 2017 Thai Culture and Food Festival. All rights reserved </p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="{{ url('js/responsiveslides.min.js') }}"></script>
	<script src="{{ url('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/easing.js') }}"></script>
	<!-- DataTables -->
	<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset(js/jquery.fancybox.min.js) }}" type="text/javascript"></script>
	<script src="{{ asset(js/global.min.js) }}" type="text/javascript"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};

			$().UItoTop({ easingType: 'easeOutQuart' });
		});

		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})

		var sliding_help_block_visibility = false;

		jQuery(document).ready(function() {
			// ---------  FOR RIGHT SLIDER ---------------
			jQuery("#sliding-help-block").scroll({
				speed: 1000,
				offset: 60
			});

			jQuery("#button-help-sld" ).click(function(){
				if  (sliding_help_block_visibility) {
					jQuery("#option-holder").fadeOut("slow");
				} else {
					jQuery("#option-holder").fadeIn("slow");
				}
				sliding_help_block_visibility = !sliding_help_block_visibility;
			});

			jQuery( ".option-holder-close-btn" ).click(function(){
				jQuery("#option-holder").fadeOut("slow");
				sliding_help_block_visibility = false;
			});
		});
	    jQuery(window).load(function(){
	        jQuery(".hameid-loader-overlay").fadeOut(300);

	    });
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});

		var path ;
	    function showmodel(path){
           $(".modal-body").html("<img src='"+path+"' style=' width: 100%' class='modal-img'>");
           $("#myModal").modal();
	    }

		jQuery(window).load(function(){
			jQuery(".hameid-loader-overlay").fadeOut(500);
		});

		function CheckExpertise(val){
		 var element=document.getElementById('otherexpertise');
		 if(val=='Other')
		   element.style.display='block';
		 else
		   element.style.display='none';
		}

	</script>
	<!-- //here ends scrolling icon -->
	<script src="{{ url('js/jarallax.js') }}"></script>
</body>

<!-- Mirrored from p.w3layouts.com/demos_new/03-02-2017/njoy_travels-demo_Free/281019381/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2017 10:51:19 GMT -->
</html>
