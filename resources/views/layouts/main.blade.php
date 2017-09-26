<!DOCTYPE HTML>
<html>
<head>
<title>SERGEN Per&uacute;</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Styles -->
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body class="landing">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1>
				<a href="index.html">Alpha</a> by HTML5 UP
			</h1>
			<nav id="nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#" class="icon fa-angle-down">Layouts</a>
						<ul>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="elements.html">Elements</a></li>
							<li><a href="#">Submenu</a>
								<ul>
									<li><a href="#">Option One</a></li>
									<li><a href="#">Option Two</a></li>
									<li><a href="#">Option Three</a></li>
									<li><a href="#">Option Four</a></li>
								</ul></li>
						</ul></li>
					<li><a href="#" class="button">Sign Up</a></li>
				</ul>
			</nav>
		</header>

		@yield('content')

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; Untitled. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollgress.min.js') }}"></script>
	<script src="{{ asset('js/skel.min.js') }}"></script>
	<script src="{{ asset('js/util.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	
</body>
</html>