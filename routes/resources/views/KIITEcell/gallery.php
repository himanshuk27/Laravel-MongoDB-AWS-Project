<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
$pageid = "About";
$title = 'Gallery - Ecell | KIIT University';
$dropdown = ' class="dropdown" ';

/* 
		choose one
 	$active = ' class="active"';
		$dropdown_active = ' class="dropdown active"';   */

		$dropdown_active = ' class="dropdown active"';
include('php/intialize.php');
include 'header.php';
?>

		<div role="main" class="main">
				
				<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Gallery</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Gallery</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">

								<ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options='{"delegate": "a.lightbox-portfolio", "type": "image", "gallery": {"enabled": true}}'>
									
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item logos">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery1.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery1.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery2.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery2.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery3.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery3.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery4.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery4.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery5.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery5.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery6.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery6.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery7.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery7.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
										<div class="image-gallery-item">
											<a href="assets/gallery/gallery8.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="assets/gallery/gallery8.jpg" class="img-responsive" alt="">
														
													</span>
												</span>
											</a>
										</div>
									</li>
								</ul>
							</div>


			</div>

		

				<?php include ("footer.php"); ?>	

					