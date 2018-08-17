@include('header')
@yield('content')
	<!---728x90--->
	<!-- welcome -->

<div id="sliding-help-block" style="top: 160px">
	<div class="holder">
		<div id="button-help-sld" class="need_help" style="cursor: pointer;">
		</div>
		<div id="option-holder" style="text-align: left; display: none;" class="clearfix">
			<a class="option-holder-close-btn" href="javascript:;" style="float:right; margin:8px 8px 0px 0px; color:#fff" title="Close">X</a>
				<ul class="help-list" id="frm">
					<li>
						<div>
							<input type="text" class="form-control" placeholder="Name" id="name" name="name"/>
						</div>
					</li>

					<li>
						<div>
							<input type="text" class="form-control" placeholder="Nick Name" id="nick" name="nick"/>
						</div>
					</li>
					<li>
						<div>
							<input type="number" class="form-control" maxlength="10" placeholder="Mobile" id="mobile" name="mobile"/>
						</div>
					</li>
					<li>
						<div>
							<input type="email" class="form-control" placeholder="Email" id="email" name="email"/>
						</div>
					</li>
					<li>
						<div>
							<select class="form-control" onchange='CheckExpertise(this.value);' placeholder="Field of Expertise" id="expetise" name="expetise">
							    <option value="">Field of Expertise</option>
							    <option value="Marketing">Marketing</option>
							    <option value="IT">IT</option>
							    <option value="Legal">Legal</option>
							    <option value="Admin">Admin</option>
							    <option value="Information Officer">Information Officer</option>
							    <option value="Sales">Sales</option>
							    <option value="Handyman/Labourer">Handyman/Labourer</option>
							    <option value="General Duties">General Duties</option>
							    <option value="Other" >Other</option>
							</select>
						</div>
					</li>
					<li id="otherexpertise" style="display:none">
						<div>
							<input type="text" class="form-control"  id="others" placeholder="Other Expertise" name="otherexpertise"/>
						</div>
					</li>
					<li>
						<div>
							<select class="form-control" placeholder="Availability" id="availablity" name="availablity">
							    <option value="">Availability</option>
							    <option value="Event Days Only">Event Days Only</option>
							    <option value="Short Term">Short Term</option>
							    <option value="Continuous">Continuous</option>
							</select>
						</div>
					</li>
					<li>
						<div style=" text-align:  center;">
							<button class="btn btn-success " id="subscribe" title="Subscribe" type="button">Join</button>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 padd">
		<img src="images/1.jpg" class=" logoimg img-responsive " alt="Overview" style="width:100%">
	</div>
	<div class="welcome col-xs-12">
		<div class="container">
			<div class="w3l-heading">
				<h3>Welcome to Victoria&#039;s Thai Culture and Food Festival</h3>
			</div>
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>THAI GASTRONOMY</h5>
					<p>We are thrilled to welcome Chef Tam, winner of “Top Chef Thailand” as its special guest chef during
						Thai Culture and Food Festival 2018 and Melbourne Food & Wine Festival. The Concept will play with a
						multitude of sensors. Sight (vision), hearing (audition), taste (gustation), smell (olfaction), and
						touch (somatosensation) are the five traditionally recognized senses, while combining the culinary
						DNA of Chef Tam and Australian Chef, each outstanding dish will be the perfect blend of Thai
						touch and Australian cooking techniques.</p>
					<div class="w3l-button">
						<a href="{{ url('welcome-read/1') }}">More</a>
					</div>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/main/6.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/main/3.png" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>JIM THOMPSON SOUND DESIGN LAB</h5>
					<p>Integrate an essence of each region in Thailand and compose the music with traditional instruments & electronic instrument, aligned with the certain region style. All the sound design from Jim Thompson has a deep history of each region of Thailand behind it which we delicately curated them with contemporary style.
					</p>
					<div class="w3l-button">
						<a href="{{ url('welcome-read/1') }}">More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>JOE LOUIS PUPPET SHOW</h5>
					<p>Joe Louis Puppet, the last of the kingdom’s traditional Thai small puppets troupe, is the only troupe of
						Thai theatrical puppeteers in existence. The performance is a showcase for Thailand’s cultural heritage
						and reflects the unstinting efforts of the troupe to preserve this exotic art form</p>
					<div class="w3l-button">
						<a href="{{ url('welcome-read/1') }}">More</a>
					</div>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/main/new1.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/main/1.png" alt="" />
					<img src="images/main/11.png" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>Thai Fit</h5>
					<p>Thai Fit is a revolutionary dancercise which blends a cardio of step aerobics with Thai classical dance.opportunity to re-connect with traditional Thai culture and promote a more healthy, active lifestyle. and Thai martial arts. Thai Fit was launched this year by Assajan Collective to give people the ~Promoted by BBC, CH3, CH7, Thai PBS, PPTV, VOICE TV and media across Thailand.</p>
					<div class="w3l-button">
						<a href="{{ url('welcome-read/1') }}">More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- services -->
	<div class="services col-xs-12" >
		<div class="container">
			<div class="w3l-heading">
				<h3>About Thai Festival</h3>
			</div>
			<div class="agileits-services">
				<div class="services-right-grids">
						<img src="images/stats.png" alt="" width="100%" />
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<div class="agileits-about-top col-xs-12">
		<div class="container">
			<div class="agileits-about-top-heading">
				<h3>OUR SPONSORS & PARTNERS</h3>
				<hr>
			</div>
			<div class="agileinfo-top-grids" style="margin:  0;">
				<div class="col-sm-3 wthree-top-grid">
					<img src="images/1sponser.png"    alt="" />

				</div>
				<div class="col-sm-3 wthree-top-grid">
					<img src="images/2sponser.png"    alt="" />

				</div>
				<div class="col-sm-3 wthree-top-grid">
					<img src="images/3sponser.png"    alt="" />

				</div>
				<div class="col-sm-3 wthree-top-grid">
					<img src="images/4sponser.png"    alt="" />

				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---728x90--->

@include('footer')
