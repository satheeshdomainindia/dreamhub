<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Dream Host - @yield('title','Web Hosting in india')</title>
		<meta name="description" content="@yield('description')">		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Icons -->
		<link rel="apple-touch-icon-precomposed" href="{{ url('img/icons/apple-touch-icon.png') }}">
		<link rel="icon" href="{{ url('img/icons/favicon.ico') }}">
		<!-- Stylesheets -->
		<link rel="stylesheet" href="{{ url('css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ url('css/main.min.css') }}">
		@stack('style')
	</head>
	<body class="footer-dark">
		<!-- Header -->
		<header id="header" class="header-dynamic header-shadow-scroll">
			<div class="container">
				<a class="logo" href="{{ url('') }}">
					<img src="https://dreamhost.in/img/logos/header-light.png" alt="vps and cloud hosting companies">
				</a>
				<nav>
					<ul class="nav-primary">
						<li>
							<a href="home.html">Products</a>
							<ul>
								<li>
									<a href="products-cloud-hosting.html">Cloud Hosting</a>
								</li>
								<li>
									<a href="products-cloud-servers.html">Cloud Servers</a>	
								</li>
								<li>
									<a href="products-dedicated-cloud.html">Dedicated Cloud</a>
								</li>
								<li>
									<a href="products-block-storage.html">Block Storage</a>
								</li>
								<li>
									<a href="products-anycast-dns.html">Anycast DNS</a>
								</li>
								<li>
									<a href="products-ssl-certificates.html">SSL Certificates</a>
								</li>
								<li>
									<a href="products-domain-names.html">Domain Names</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="features.html">Features</a>
							<ul>
								<li>
									<a href="index.html">Demos</a>
									<ul>
										<li>
											<a href="home.html">Default</a>
										</li>
										<li>
											<a href="home-large-slider.html">Large Slider</a>
										</li>
										<li>
											<a href="home-light-header.html">Light Header</a>
										</li>
										<li>
											<a href="home-single-page.html">Single Page</a>
										</li>
										<li>
											<a href="home-light-slider.html">Light Slider</a>
										</li>
										<li>
											<a href="home-product-slider.html">Product Slider</a>
										</li>
										<li>
											<a href="home-user-onboarding.html">User Onboarding</a>
										</li>
										<li>
											<a href="home-domain-search.html">Domain Search</a>
										</li>
										<li>
											<a href="home-custom-color.html">Custom Color</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="elements-other.html">Elements</a>
									<ul>
										<li>
											<a href="blog-sidebar.html">Blog Sidebar</a>
										</li>
										<li>
											<a href="elements-columns.html">Column Rows</a>
										</li>
										<li>
											<a href="elements-sliders.html">Content Sliders</a>
										</li>
										<li>
											<a href="elements-pricing.html">Pricing Options</a>
										</li>
										<li>
											<a href="elements-masonry.html">Masonry Grid</a>
										</li>
										<li>
											<a href="elements-forms.html">Form Inputs</a>
										</li>
										<li>
											<a href="elements-tabs.html">Tab Groups</a>
										</li>
										<li>
											<a href="elements-galleries.html">Galleries</a>
										</li>
										<li>
											<a href="elements-other.html">Other</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="network.html">Network</a>
						</li>
						<li>
							<a href="about.html">Company</a>
							<ul>
								<li>
									<a href="https://blog.dreamhost.in/">Blog</a>
								</li>
								<li>
									<a href="contact.html">Contact</a>
								</li>
							</ul>
						</li>
						<li>
						<a class="button button-secondary" href="{{ cpurl('login') }}">
								<i class="fas fa-lock icon-left"></i>Client Login
							</a>
						</li>
					</ul>
					<ul class="nav-secondary">
						<li>
							<a href="{{ cpurl('contact.php') }}"><i class="fas fa-phone icon-left"></i>+91 6379108040</a>
						</li>
						<li>
						<a href="{{ cpurl('submitticket.php?step=2&deptid=1') }}"><i class="fas fa-comment icon-left"></i>Open Ticket</a>
						</li>
						<li>
						<a href="{{ cpurl('index.php?rp=/knowledgebase') }}"><i class="fas fa-question-circle icon-left"></i>Knowledgebase</a>
						</li>
						<li>
							<a href="{{ cpurl('login')}}"><i class="fas fa-user-plus icon-left"></i>Network Status</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		@stack('notification')
		<!-- Content -->
		@yield('content')
		<!-- Footer -->
		<footer id="footer">
			<section class="footer-primary">
				<div class="container">
					<div class="column-row">
						<div class="column-33">
							<h5>
								About DreamHost
							</h5>
							<p>
								We provide cloud based enterprise hosting, server and storage solutions of unmatched quality. Feel free to visit or contact us for a custom quote.<br><br>
								1/163, SMG Pudur, P.K.Palayam (PO) Tirupur<br>
								Coimbatore TN 641665 ph:6379108040
							</p>
						</div>
						<div class="column-66">
							<div class="column-row align-right-top">
								<div class="column-25">
									<h5>
										Connect
									</h5>
									<ul class="list-style-icon">
										<li>
											<a href="#facebook"><i class="fab fa-facebook"></i>Facebook</a>
										</li>
										<li>
											<a href="#twitter"><i class="fab fa-twitter"></i>Twitter</a>
										</li>
										<li>
											<a href="#github"><i class="fab fa-github"></i>Github</a>
										</li>
										<li>
											<a href="#xing"><i class="fab fa-youtube"></i>YouTube</a>
										</li>
									</ul>
								</div>
								<div class="column-25">
									<h5>
										Products
									</h5>
									<ul>
										<li>
											<a href="products-cloud-hosting.html">Cloud Hosting</a>
										</li>
										<li>
											<a href="products-cloud-servers.html">Cloud Servers</a>
										</li>
										<li>
											<a href="products-dedicated-cloud.html">Dedicated Cloud</a>
										</li>
										<li>
											<a href="products-block-storage.html">Block Storage</a>
										</li>
										<li>
											<a href="products-anycast-dns.html">Anycast DNS</a>
										</li>
									</ul>
								</div>
								<div class="column-25">
									<h5>
										Resources
									</h5>
									<ul>
										<li>
											<a href="features.html">Features</a>
										</li>
										<li>
											<a href="network.html">Network</a>
										</li>
										<li>
											<a href="terms-of-service.html#privacy-policy">Privacy Policy</a>
										</li>
										<li>
											<a href="terms-of-service.html">Terms of Service</a>
										</li>
									</ul>
								</div>
								<div class="column-flex">
									<h5>
										Company
									</h5>
									<ul>
										<li>
											<a href="https://blog.dreamhost.in/">Blog</a>
										</li>
										<li>
											<a href="about.html">About</a>
										</li>
										<li>
											<a href="{{ cpurl('contact.php') }}">Contact</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="footer-secondary">
				<div class="container">
					<p>
						Copyright 2020 &copy; <a href="https://dreamhost.in/"> DreamHost Web Hosting Services</a>. All rights reserved.<br>
					</p>
				</div>
			</section>
		</footer>
		
		<!-- Scripts -->
		<!-- Scripts -->
		<script src="{{ url('') }}/js/jquery.min.js"></script>
		<script src="{{ url('') }}/js/headroom.min.js"></script>
		<script src="{{ url('') }}/js/js.cookie.min.js"></script>
		<script src="{{ url('') }}/js/imagesloaded.min.js"></script>
		<script src="{{ url('') }}/js/bricks.min.js"></script>
		<script src="{{ url('') }}/js/main.min.js"></script>


		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5ddc73a0d96992700fc935fd/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
	<!--End of Tawk.to Script-->

		<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33226344-2"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-33226344-2');
	</script>

	</body>
</html>