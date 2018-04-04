<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
//header("Cache-Control: max-age=86400");
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="Ecell, KIIT, Ecell KIIT, Entrepreneurship, KIIT Jobs" />
	<meta name="description" content="E-cell is a platform which explores
	the corporate behaviour within you. It doesn't only make you imagine innovation but also makes you
	a good crisis manager and a good show maker.">
	<meta name="author" content="ecell.org.in">
	<link rel="shortcut icon" href="KIITEcell/assets/icons/favicon.ico" type="image/x-icon" />

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="KIITEcell/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/animate/animate.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="KIITEcell/libs/magnific-popup/magnific-popup.min.css">

	<link rel="stylesheet" href="KIITEcell/css/theme.css">
	<link rel="stylesheet" href="KIITEcell/css/theme-elements.css">
	<link rel="stylesheet" href="KIITEcell/css/theme-blog.css">
	<link rel="stylesheet" href="KIITEcell/libs/circle-flip-slideshow/css/component.css">

	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="KIITEcell/libs/rs-plugin/css/navigation.css">


	

	<!-- Skin CSS -->
	<link rel="stylesheet" href="KIITEcell/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="KIITEcell/css/custom.css">

	<!-- Head Libs -->

	<script src="KIITEcell/js/jquery-3.3.0.min.js"></script>
	<script src="KIITEcell/libs/modernizr/modernizr.min.js"></script>
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
									<img alt="KIIT Ecell" class="logo-sticky" width="200" height="100" data-sticky-width="100" data-sticky-height="45" data-sticky-top="20" src="KIITEcell/assets/images/logosmall.png">
									<img alt="KIIT Ecell" class="logo-normal" width="200" height="100" src="KIITEcell/assets/images/logotest.png">
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
												<li <?php if($pageid=="Home") echo $active; ?> >
													<a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
												</li>
												<li <?php if($pageid=="Notice") echo $active; ?> >
													<a href="noticeboard">NoticeBoard</a>
												</li>
												<li <?php if($pageid=="Register") echo $dropdown_active; else echo $dropdown; ?>>
													<a data-hash class="dropdown-toggle" href="#home">
														Register
													</a>
													<ul class="dropdown-menu">
														<li><a href="joinEcell">As an Individual</a></li>
														<li><a href="register_startup">As a Startup</a></li>
													</ul>
												</li>	
												<li <?php if($pageid=="Startups") echo $active; ?> >
													<a href="startups">Startups</a>
												</li>
												<li <?php if($pageid=="About") echo $dropdown_active; else echo $dropdown; ?>>
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
												<li <?php if($pageid=="Initiatives") echo $dropdown_active; else echo $dropdown; ?>>
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
												<li <?php if($pageid=="Blog") echo $active; ?>>
													<a href="http://blog.<?php echo $_SERVER['SERVER_NAME']; ?>">Blog</a>
												</li>
												<li <?php if($pageid=="Contact") echo $active; ?>>
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