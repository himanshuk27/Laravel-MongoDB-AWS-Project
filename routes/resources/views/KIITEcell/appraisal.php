<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/connect.php');

if (isset($_POST['submit']) && $_POST['submit']=="true"){

	try { 
     
      $sql = "INSERT appraisal_may_17 SET name = :name,                
      email = :email,
      mobno = :mobno,
      team = :team,
      position = :position,

      goal1 = :goal1,
      action1 = :action1,
      completed1 = :completed1,
      rating1 = :rating1,
      comment1 = :comment1,

      goal2 = :goal2,
      action2 = :action2,
      completed2 = :completed2,
      rating2 = :rating2,
      comment2 = :comment2,

      goal3 = :goal3,
      action3 = :action3,
      completed3 = :completed3,
      rating3 = :rating3,
      comment3 = :comment3,

      goal4 = :goal4,
      action4 = :action4,
      completed4 = :completed4,
      rating4 = :rating4,
      comment4 = :comment4,

      changeteam = :changeteam";
      $stmt = $con->prepare($sql);                                  
      $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);   
      $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
      $stmt->bindParam(':mobno', $_POST['mobno'], PDO::PARAM_STR); 
      $stmt->bindParam(':team', $_POST['team'], PDO::PARAM_STR);  
      $stmt->bindParam(':position', $_POST['position'], PDO::PARAM_STR);   

      $stmt->bindParam(':goal1', $_POST['goal1'], PDO::PARAM_STR);
      $stmt->bindParam(':action1', $_POST['action1'], PDO::PARAM_STR); 
      $stmt->bindParam(':completed1', $_POST['completed1'], PDO::PARAM_STR); 
      $stmt->bindParam(':rating1', $_POST['rating1'], PDO::PARAM_STR);   
      $stmt->bindParam(':comment1', $_POST['comment1'], PDO::PARAM_STR);

      $stmt->bindParam(':goal2', $_POST['goal2'], PDO::PARAM_STR); 
      $stmt->bindParam(':action2', $_POST['action2'], PDO::PARAM_STR); 
      $stmt->bindParam(':completed2', $_POST['completed2'], PDO::PARAM_STR);   
      $stmt->bindParam(':rating2', $_POST['rating2'], PDO::PARAM_STR);
      $stmt->bindParam(':comment2', $_POST['comment2'], PDO::PARAM_STR);

      $stmt->bindParam(':goal3', $_POST['goal3'], PDO::PARAM_STR); 
      $stmt->bindParam(':action3', $_POST['action3'], PDO::PARAM_STR);   
      $stmt->bindParam(':completed3', $_POST['completed3'], PDO::PARAM_STR);
      $stmt->bindParam(':rating3', $_POST['rating3'], PDO::PARAM_STR); 
      $stmt->bindParam(':comment3', $_POST['comment3'], PDO::PARAM_STR); 

      $stmt->bindParam(':goal4', $_POST['goal4'], PDO::PARAM_STR); 
      $stmt->bindParam(':action4', $_POST['action4'], PDO::PARAM_STR);   
      $stmt->bindParam(':completed4', $_POST['completed4'], PDO::PARAM_STR);
      $stmt->bindParam(':rating4', $_POST['rating4'], PDO::PARAM_STR); 
      $stmt->bindParam(':comment4', $_POST['comment4'], PDO::PARAM_STR);

      $stmt->bindParam(':changeteam', $_POST['changeteam'], PDO::PARAM_STR);
      $stmt->execute();

      echo "Form Submitted Succefully!";
      die();
    }
    
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
      die();
    }

}

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Original Title- Hail Hydra!-->
	<title>Appraisal Form- Ecell Members</title>

	<link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-animate.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/default.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.js"></script>
	<script type="text/css">
	
	#progress-wrp {
    border: 1px solid #0099CC;
    padding: 1px;
    position: relative;
    border-radius: 3px;
    margin: 10px;
    text-align: left;
    background: #fff;
    box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
	}
	#progress-wrp .progress-bar{
    height: 20px;
    border-radius: 3px;
    background-color: #f39ac7;
    width: 0;
    box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
	}
	#progress-wrp .status{
    top:3px;
    left:50%;
    position:absolute;
    display:inline-block;
    color: #000000;
	}
	</script>
	<?php include_once("php/ga.php") ?>


</head>
<body>
	<div class="body">
		<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
			<div class="header-body">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-logo">
								<a href="/">
									<img alt="Ecell" width="100" height="100" data-sticky-width="50" data-sticky-height="50" data-sticky-top="50" src="assets/images/logo.png">
								</a>
							</div>
						</div>
						<div class="header-column">

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
									<li class="hidden-xs">
										<a href="#"><i class="fa fa-angle-right"></i>Appraisal</a>
									</li>
									<li class="hidden-xs">
										<a href="/"><i class="fa fa-angle-right"></i>Home</a>
									</li>
									<li>
										<span class="ws-nowrap"><i class="fa fa-phone"></i>+91-7749995976</span>
									</li>
								</ul>
							</nav>

							<div class="header-row">
								<div class="header-nav header-nav-top-line">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
										<i class="fa fa-bars"></i>
									</button>
									<ul class="header-social-icons social-icons hidden-xs">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.youtube.com/channel/UCvfLONcdrYLvzXndMlOIRYw/" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li>
													<a href="/">Home</a>
												</li>
												<li>
													<a href="joinEcell">Join Ecell</a>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														About Us
													</a>
													<ul class="dropdown-menu">
														<li><a href="about-us#whoweare">Who We Are?</a></li>
														<li><a href="about-us#mentors">Our Mentors</a></li>
													</ul>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														Initiatives
													</a>
													<ul class="dropdown-menu">
														<li><a href="https://interncamp.ecell.org.in">Internship Camp</a></li>
														<li><a href="eschool">E-School</a></li>
														<li><a href="initiatives#wow">Women on Web (WoW)</a></li>
														<li><a href="initiatives#campuspreneur">Campuspreneur</a></li>
														<li><a href="initiatives#campuspreneur">Makers Lab</a></li>
														<li><a href="tbi-initiatives">TBI Initiatives</a></li>
													</ul>
												</li>
												<li class="dropdown">
													<a data-hash class="dropdown-toggle" href="#home">
														Partners
													</a>
													<ul class="dropdown-menu">
														<li><a href="partners#assoc">Associates</a></li>
														<li><a href="partners#spons">Sponsors</a></li>
													</ul>
												</li>
												<li>
													<a href="gallery">Gallery</a>
												</li>
												
												<li>
													<a href="http://blog.<?php echo $parent_url; ?>">Blog</a>
												</li>
												<li>
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

		<div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="#">Human Resources</a></li>
								<li class="active">2017</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Appraisal Form (01' May to 31' May)</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">	

									<blockquote class="blockquote-reverse">
										<p>Without continual growth and progress, such words as improvement, achievement, and success have no meaning.</p>
										<footer>Benjamin Franklin</footer>
									</blockquote>

									<hr>





			<form id="appraisal" action="javascript:return false" method="post">
								<div class="row">								
									<div class="form-group">
									<h5>Ecell Member Details</h5>
										<div class="col-md-4">
											<label>Name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-4">
											<label>Email Id *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
										<div class="col-md-4">
										<label>Contact No *</label>
										<input type="number" value="" data-msg-required="Please enter your Contact no." maxlength="100" class="form-control" name="mobno" id="mobno" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<label>Team *</label>
											<select class="form-control" name="team" id="team" required>
												<option value="Tech & Design">Tech & Design</option>
												<option value="Community Learning">Community Learning</option>
												<option value="Research & Development">Research & Development</option>
												<option value="Public & Corporate Relations">Public & Corporate Relations</option>
											</select>	
										</div>
										<div class="col-md-4">
											<label>Position *</label>
											<select class="form-control" name="position" id="position" required>
												<option value="Executive">Executive</option>
												<option value="POC">POC</option>
											</select>
										</div>	
									</div>
								</div>
								<h5>Progress Towards Goals</h5>
								<div class="row">
									<div class="form-group">
										<div class="col-md-3">
											<label>Goal 1 *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="goal1" id="goal1" required></textarea>
										</div>
										<div class="col-md-3">
											<label>Action Taken *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="action1" id="action1" required></textarea>
										</div>
										<div class="col-md-2">
										<label>Completed *</label>
											<div class="radio-group" data-msg-required="Please select one option.">
														<label class="radio-inline">
															<input type="radio" name="completed1" id="completed1" value="Yes" required> Yes
														</label>
														<label class="radio-inline">
															<input type="radio" name="completed1" id="completed1" value="No"> No
														</label>														
													</div>
										</div>
										<div class="col-md-1">
											<label>Rate your work *</label>
											<select class="form-control" name="rating1" id="rating1" required>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
										<div class="col-md-3">
											<label>Comments *</label>
											<textarea value="" data-msg-required="Please enter your comment." class="form-control" name="comment1" id="comment1" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-3">
											<label>Goal 2 *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="goal2" id="goal2"></textarea>
										</div>
										<div class="col-md-3">
											<label>Action Taken *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="action2" id="action2"></textarea>
										</div>
										<div class="col-md-2">
										<label>Completed *</label>
											<div class="radio-group" data-msg-required="Please select one option.">
														<label class="radio-inline">
															<input type="radio" name="completed2" id="completed2" value="Yes"> Yes
														</label>
														<label class="radio-inline">
															<input type="radio" name="completed2" id="completed2" value="No"> No
														</label>														
													</div>
										</div>
										<div class="col-md-1">
											<label>Rate your work *</label>
											<select class="form-control" name="rating2" id="rating2" required>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
										<div class="col-md-3">
											<label>Comments *</label>
											<textarea value="" data-msg-required="Please enter your comment." class="form-control" name="comment2" id="comment2"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-3">
											<label>Goal 3 *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="goal3" id="goal3"></textarea>
										</div>
										<div class="col-md-3">
											<label>Action Taken *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="action3" id="action3"></textarea>
										</div>
										<div class="col-md-2">
										<label>Completed *</label>
											<div class="radio-group" data-msg-required="Please select one option.">
														<label class="radio-inline">
															<input type="radio" name="completed3" id="completed3" value="Yes"> Yes
														</label>
														<label class="radio-inline">
															<input type="radio" name="completed3" id="completed3" value="No"> No
														</label>														
													</div>
										</div>
										<div class="col-md-1">
											<label>Rate your work *</label>
											<select class="form-control" name="rating3" id="rating3" required>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
										<div class="col-md-3">
											<label>Comments *</label>
											<textarea value="" data-msg-required="Please enter your comment." class="form-control" name="comment3" id="comment3"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-3">
											<label>Goal 4 *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="goal4" id="goal4"></textarea>
										</div>
										<div class="col-md-3">
											<label>Action Taken *</label>
											<textarea value="" data-msg-required="Please enter your name." class="form-control" name="action4" id="action4"></textarea>
										</div>
										<div class="col-md-2">
										<label>Completed *</label>
											<div class="radio-group" data-msg-required="Please select one option.">
														<label class="radio-inline">
															<input type="radio" name="completed4" id="completed4" value="Yes"> Yes
														</label>
														<label class="radio-inline">
															<input type="radio" name="completed4" id="completed4" value="No"> No
														</label>														
													</div>
										</div>
										<div class="col-md-1">
											<label>Rate your work *</label>
											<select class="form-control" name="rating4" id="rating4">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
										<div class="col-md-3">
											<label>Comments *</label>
											<textarea value="" data-msg-required="Please enter your comment." class="form-control" name="comment4" id="comment4"></textarea>
										</div>
									</div>
								</div>
										<br>
										<div class="col-md-12">
											<label>Do you want to change your team *</label>
											<div class="radio-group" data-msg-required="Please select one option.">
														<label class="radio-inline">
															<input type="radio" name="changeteam" id="changeteam" value="Yes" required> Yes
														</label>
														<label class="radio-inline">
															<input type="radio" name="changeteam" id="changeteam" value="No"> No
														</label>														
													</div>
										</div>
										&nbsp;
									<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Submit" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>									

								<input type="hidden" name="submit" value="true">
							</form>



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
						<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

						<div class="alert alert-success hidden" id="newsletterSuccess">
							<strong>Success!</strong> You've been added to our email list.
						</div>

						
						<form id="newsletterForm" action="javascript:return false" method="POST">
							<div class="input-group">
								<input class="form-control" placeholder="Email Address" name="Email" id="Email" type="text">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-3">
					<h4>Latest Tweets</h4>
					<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "kiit_ecell", "count": 2}'>
						<p>Please wait...</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-details">
						<h4>Contact Us</h4>
						<ul class="contact">
							<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 7B,Second Floor, TBI Biotech Campus,KIIT University, Bhubaneshwar.</p></li>
							<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91-9583785500, +91-9861658537</p></li>
							<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:kodexlabs@gmail.com">kodexlabs@gmail.com</a></p></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<h4>Follow Us</h4>
					<ul class="social-icons">
						<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li class="social-icons-linkedin"><a href="https://www.youtube.com/channel/UCvfLONcdrYLvzXndMlOIRYw/" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<a href="https://play.google.com/store/apps/details?id=com.kodexlabs.sparrow">
						<h5>Get Sparrow <img src="assets/images/sparrow_logo.png" width="50px" height="auto"><br /> Official E-Cell App</h5>
						<img src="assets/images/playstore.png" width="170px" height="auto"></a>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							<a href="/" class="logo">
								<img alt="KIIT Ecell" class="img-responsive" style="-webkit-filter:grayscale(100%); filter:grayscale(100%);width:30px; height:30px;" src="assets/images/logo_alt.jpg">
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

	<!-- Vendor -->	
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="vendor/common/common.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
	<script src="vendor/isotope/jquery.isotope.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.js"></script>
	<script src="js/jquery.form.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>
	<script src="js/add_newsletter.js"></script>

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>
	<script> 
        // wait for the DOM to be loaded 
        $('#appraisal').submit(function() {
    	var data = $('#appraisal').formSerialize();  
		// the data could now be submitted using $.get, $.post, $.ajax, etc 
		$.ajax({
		type: "POST",
		url: "appraisal.php",
		data: data,
		cache: false,
		success: function(result){
		alert(result);
		}
		});
        }); 
        
    </script>
</body>
</html>