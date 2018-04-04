<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="keywords" content="@yield('keywords')" />
	<meta name="description" content="@yield('description')">
	<meta name="author" content="ecell.org.in">
	<link rel="shortcut icon" href="/KIITEcell/assets/icons/favicon.ico" type="image/x-icon" />

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="/KIITEcell/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/KIITEcell/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/KIITEcell/libs/animate/animate.min.css">
	<link rel="stylesheet" href="/KIITEcell/libs/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="/KIITEcell/libs/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/KIITEcell/libs/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/KIITEcell/libs/magnific-popup/magnific-popup.min.css">

	<link rel="stylesheet" href="/KIITEcell/css/theme.css">
	<link rel="stylesheet" href="/KIITEcell/css/theme-elements.css">
	<link rel="stylesheet" href="/KIITEcell/css/theme-blog.css">
	<link rel="stylesheet" href="/KIITEcell/libs/circle-flip-slideshow/css/component.css">

	<link rel="stylesheet" href="/KIITEcell/libs/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="/KIITEcell/libs/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="/KIITEcell/libs/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="/KIITEcell/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/KIITEcell/css/custom.css">
	@yield('css')

	<!-- Head Libs -->

	<script src="/KIITEcell/js/jquery-3.3.0.min.js"></script>
	<script src="/KIITEcell/libs/modernizr/modernizr.min.js"></script>
	<script type="text/javascript"> //<![CDATA[ 
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>

</head>
<body>

	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true, 'stickyChangeLogo': true}" style="min-height: 125px;">
			<div class="header-body">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-logo">
								<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">
									<img alt="KIIT Ecell" class="logo-sticky" width="200" height="100" data-sticky-width="100" data-sticky-height="45" data-sticky-top="20" src="/KIITEcell/assets/images/logosmall.png">
									<img alt="KIIT Ecell" class="logo-normal" width="200" height="100" src="/KIITEcell/assets/images/logotest.png">
								</a>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-search hidden-xs">
									<form id="searchForm" action="page-search-results.html" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
								<nav class="header-nav-top">
									<ul class="nav nav-pills">
										<li>
											<a href="mailto:pcr@ecell.org.in"> <span class="ws-nowrap"><i class="fa fa-envelope"></i> pcr@ecell.org.in</span></a>
										</li>
										<li>
											<span class="ws-nowrap"><i class="fa fa-phone"></i> +91-9583785500</span>
										</li>
									</ul>
								</nav>
							</div>
							<div class="header-row">
								<div class="header-nav header-nav-top-line">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
										<i class="fa fa-bars"></i>
									</button>
									<ul class="header-social-icons social-icons hidden-xs">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/13346906/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										<li class="social-icons-instagram"><a href="https://www.instagram.com/ecell_kiit/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="{{ Request::is('/') ? 'active' : '' }}">
													<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
												</li>
												<li class="{{ Request::is('noticeboard') ? 'active' : '' }}">
													<a href="noticeboard">NoticeBoard</a>
												</li>
												<li class="{{ Request::is('register') ? 'dropdown_active' : 'dropdown' }}">
													<a data-hash class="dropdown-toggle" href="#home">
														Register
													</a>
													<ul class="dropdown-menu">
														<li><a href="register/student">As an Individual</a></li>
														<li><a href="register_startup">As a Startup</a></li>
													</ul>
												</li>	
												<li class="{{ Request::is('startups') ? 'active' : '' }}">
													<a href="startups">Startups</a>
												</li>
												<li class="{{ Request::is('about') ? 'dropdown_active' : 'dropdown' }}">
													<a data-hash class="dropdown-toggle" href="#home">
														About Us
													</a>
													<ul class="dropdown-menu">
														<li><a href="about-us#whoweare">Who We Are?</a></li>
														<li><a href="about-us#mentors">Our Mentors</a></li>
														<li><a href="team#bod">The Ecell Team</a></li>
														<li><a href="gallery">Gallery</a></li>
														<li><a href="partners">Partners</a></li>
													</ul>
												</li>
												<li class="{{ Request::is('initiatives') ? 'dropdown_active' : 'dropdown' }}">
													<a data-hash class="dropdown-toggle" href="initiatives">
														Initiatives
													</a>
													<ul class="dropdown-menu">
														<li><a href="initiatives#ml">Makers Lab</a></li>
														<li><a href="initiatives#eac">EAC</a></li>
														<li><a href="initiatives#internship_camp">Internship Camp</a></li>
														<li><a href="initiatives#cl">Community Learning</a></li>
														<li><a href="initiatives#wow">Women on Web (WoW)</a></li>
														<li><a href="initiatives#campuspreneur">Campuspreneur</a></li>														
														<li><a href="tbi-initiatives">TBI Initiatives</a></li>
													</ul>
												</li>																											
												<li>
													<a href="http://blog.<?php echo $_SERVER['SERVER_NAME']; ?>">Blog</a>
												</li>
												<li class="{{ Request::is('contact') ? 'active' : '' }}">
													<a href="contact-us">Contact Us</a>
												</li>
											</ul>
										</nav>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		@yield('content')

		<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="smallModalLabel">Small Modal Title</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Get in Touch</span>
			</div>
			<div class="col-md-3">
				<div class="newsletter">
					<h4>Newsletter</h4>
					<p>Keep up on our always evolving startup culture. Enter your e-mail and subscribe to our newsletter.</p>

					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="javascript:" method="POST">
						<div class="input-group">
							<input class="form-control" placeholder="Email Address" name="email" id="email" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Go!</button>
								<!--img class="spinner" src="/KIITEcell/assets/images/spinner_white.gif"-->
							</span>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}" >
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<h4>Latest Tweets</h4>
				<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "kiit_ecell", "count": 2}'">
					<p>Please wait...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4>Contact Us</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 7B,Second Floor, TBI Biotech Campus,KIIT University, Bhubaneshwar.</p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91-9583785500, +91-9861658537</p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:pcr@ecell.org.in">pcr@ecell.org.in</a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/13346906/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li class="social-icons-instagram"><a href="https://www.instagram.com/ecell_kiit/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
				</ul>
				<a href="https://play.google.com/store/apps/details?id=com.kodexlabs.sparrow">
					<h5>Get Sparrow <img src="/KIITEcell/assets/images/sparrow_logo.png" width="50px" height="auto"><br /> Official E-Cell App</h5>
					<img src="/KIITEcell/assets/images/playstore.png" width="170px" height="auto"></a>
					<br /><br />
					<script async language="JavaScript" type="text/javascript">
						TrustLogo("/KIITEcell/comodo_secure_seal_113x59_transp.png", "CL1", "none");
					</script>
					<a  href="https://ssl.comodo.com" id="comodoTL">SSL Certificates</a>										
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<a href="/" class="logo">
							<img alt="KIIT Ecell" class="img-responsive" style="width:30px; height:30px;" src="/KIITEcell/assets/images/logo_alt.png">
						</a>
					</div>
					<div class="col-md-7">
						<p>© Copyright 2017. All Rights Reserved. KIIT E-Cell, KIIT University</p> 
					</div>
					<div class="col-md-4">
						<nav id="sub-menu">
							<ul>
								<li><a href="faq">FAQ's</a></li>
								<li><a href="sitemap.xml">Sitemap</a></li>
								<li><a href="contact-us">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Third party Libs -->
<script src="/KIITEcell/js/theme.js"></script>
<script src="/KIITEcell/js/theme.init.js"></script>
<script async src="/KIITEcell/js/views/view.home.js"></script>
<script async src="/KIITEcell/libs/jquery.appear/jquery.appear.min.js"></script>
<script async src="/KIITEcell/libs/jquery.easing/jquery.easing.min.js"></script>
<script async src="/KIITEcell/libs/jquery-cookie/jquery-cookie.min.js"></script>
<script src="/KIITEcell/libs/bootstrap/js/bootstrap.min.js"></script>
<script async src="/KIITEcell/libs/common/common.min.js"></script>
<script async src="/KIITEcell/libs/jquery.validate/jquery.validate.min.js"></script>
<script async src="/KIITEcell/libs/isotope/jquery.isotope.min.js"></script>
<script src="/KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="/KIITEcell/js/sweetalert2.all.js"></script>
<script src="/KIITEcell/libs/jquery.gmap/jquery.gmap.js"></script>
<script async src="/KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script async src="/KIITEcell/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme Base, Components and Settings -->

<script async src="/KIITEcell/js/add_newsletter.js"></script>

<!-- Current Page Vendor and Views -->
<?php if(Request::is('/')){ ?>
<script src="/KIITEcell/libs/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/KIITEcell/libs/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/KIITEcell/libs/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<?php } ?>

 <!-- Theme Custom -->
<script src="/KIITEcell/js/custom.js"></script> 

@yield('scripts')
       



</body>
</html>