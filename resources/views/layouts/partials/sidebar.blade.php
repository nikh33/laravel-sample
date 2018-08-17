<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (!Auth::guest())
            <div class="user-panel" style="height:50px;">
                <div class="pull-left image" style="display:none;">
				<?php $path = "img/".Auth::user()->username.".jpeg";?>
				@if (file_exists($path))
					<!--<img src="{{asset($path)}}" class="img-circle" alt="User Image"/>-->
					<img src="{{asset('/img/logo.png')}}" class="img-circle" alt="User Image"/>
				@else
					<img src="{{asset('/img/logo.png')}}" class="img-circle" alt="User Image"/>
				@endif
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->username }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- /.search form -->
		<?php //echo $pageName; ?>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            @if ($pageName == "SITE")
				<li class="active"><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file" ></i> <span>About Us</span></a></li>
					<li><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif
			@elseif ($pageName == "JOIN")
				<li><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li  class="active"><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file" ></i> <span>About Us</span></a></li>
					<li><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif
			@elseif ($pageName == "ALBUM")
				<li ><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li class="active"><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file" ></i> <span>About Us</span></a></li>
					<li><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif	
	       @elseif ($pageName == "VIDEO")
				<li><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li class="active"><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file" ></i> <span>About Us</span></a></li>
					<li><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif	
		 @elseif ($pageName == "EventForm" || $pageName == "EVENT")
				<li><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li class="active"><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file" ></i> <span>About Us</span></a></li>
					<li><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif			
			@elseif ($pageName == "STATICPAGES" )
				<li><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file"></i> <span>About Us</span></a></li>
				<li><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif			
	 	
		    @elseif ($pageName == "WELCOME" || $pageName == "WelcomeForm" )
				<li><a href="{{ url('dashboard/home') }}"><i class='fa fa-map'></i> <span>Dashboard</span></a></li>
				@if (Auth::user()->name =='SuperAdmin')
					<li><a href="{{ url('dashboard/join') }}"><i class='fa fa-map'></i> <span>Join User</span></a></li>
					<li><a href="{{ url('dashboard/album') }}"><i class='fa fa-laptop'></i> <span>Album</span></a></li>
					<li><a href="{{ url('dashboard/video') }}"><i class='fa fa-search'></i> <span>Video</span></a></li>
					<li><a href="{{ url('dashboard/event') }}"><i class='fa fa-bullhorn'></i> <span>Event</span></a></li>
					<li><a href="{{ url('dashboard/aboutus/form') }}"><i class="fa fa-file"></i> <span>About Us</span></a></li>
				<li  class="active"><a href="{{ url('dashboard/welcome') }}"><i class='fa fa-bullhorn'></i> <span>Welcome Blog</span></a></li>
				@endif			
	 
			@endif	

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
