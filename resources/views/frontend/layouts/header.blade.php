<section class="header">

	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center">

			<h1 class="logo me-auto"><a href="{{route('index')}}">weber360.com</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			 <a href="index.html" class="logo me-auto"><img src="{{url('public/upload/logo_images/'.$logo->image)}}" alt="" class="img-fluid"></a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
					<li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="{{route('iawnp')}}">Industrial Automation with NI Platform</a></li>
							<li><a href="{{route('efd')}}">Embedded Firmware Development </a></li>
							<li><a href="{{route('pdb')}}">PCB Design & Development </a></li>
							<li><a href="{{route('ipsd')}}">IoT Product & Software development</a></li>
							<li><a href="{{route('ats')}}">Automated Test systems</a></li>
							<li><a href="{{route('hlts')}}">Hardware in Loop Test Systems</a></li>
							<li><a href="{{route('pts')}}">Portable Test stations</a></li>
							<li><a href="{{route('threeds')}}">3D Design & Development</a></li>
							<li><a href="{{route('irs')}}">Industrial Robotic Solutions</a></li>
							<li><a href="{{route('atsd')}}">Automotive Test systems Development</a></li>
							<li><a href="{{route('mvts')}}">Machine Vision Test Systems</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Technology Expertise</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="{{route('lv')}}">LabVIEW</a></li>
							<li><a href="{{route('t')}}">Teststand </a></li>
							<li><a href="{{route('three_d')}}">3D Design </a></li>
							<li><a href="{{route('pcc')}}">PXI/cRIO/cDAQ</a></li>
							<li><a href="{{route('py')}}">Python</a></li>

						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Manufacturing Capabilities</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="{{route('im')}}">Injection Molding</a></li>
							<li><a href="{{route('aps')}}">Aluminium Profiles Stucture </a></li>
							<li><a href="{{route('osri')}}">19 inch Server Rack Integration </a></li>
							<li><a href="{{route('pcf')}}">Portable CybeDeck Flightcase</a></li>
							<li><a href="{{route('vids')}}">Vision Inspection Darkroom Setup</a></li>

						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="{{route('brochure')}}">Product Services Brochure</a></li>

						</ul>
					</li>
					<li><a class="nav-link scrollto" href="{{route('aboutus')}}">About US</a></li>
					<li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>

					{{--<li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>--}}
					{{-- <li><a class="nav-link scrollto" href="#team">Team</a></li>--}}
					{{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                         <ul>
                             <li><a href="#">Drop Down 1</a></li>
                             <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                 <ul>
                                     <li><a href="#">Deep Drop Down 1</a></li>
                                     <li><a href="#">Deep Drop Down 2</a></li>
                                     <li><a href="#">Deep Drop Down 3</a></li>
                                     <li><a href="#">Deep Drop Down 4</a></li>
                                     <li><a href="#">Deep Drop Down 5</a></li>
                                 </ul>
                             </li>
                             <li><a href="#">Drop Down 2</a></li>
                             <li><a href="#">Drop Down 3</a></li>
                             <li><a href="#">Drop Down 4</a></li>
                         </ul>
                     </li>--}}
					{{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                     <li><a class="getstarted scrollto" href="#about">Get Started</a></li>--}}
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>



</section>