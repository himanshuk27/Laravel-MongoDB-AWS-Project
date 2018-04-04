<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
$pageid = "Initiatives";
$title = 'E-School - Ecell | KIIT University';
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
								<li><a href="initiatives">Initiatives</a></li>
								<li class="active">E-School</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>E-School</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="col-md-8">
                            <h3 class="heading-primary">What is <strong>E-School</strong>?</h3>
                            <p class="mt-xlg">E School is a interactive curriculum on Entrepreneurship and Business Development. Its a 34-36 hours certified course. FREE OF COST ! It aims at inculcating the knowledge of opening and establishing your own startup and real time difficulties related to it currently being faced in India. The objective of this stream is to provide comprehensive knowledge and develop competencies to start an independent business.</p>
                            <ul class="portfolio-details">
                                <li>
                                    <h4><p><strong>Some key points covered in the curriculum:</strong></p></h4>
                                    <div class="col-md-6">

                                    <h6><ol class="list list-ordened">
                                        <li>How to get investments?</li>
                                        <li>The right marketing for your business</li>
                                        <li>Major legal and documentation work.</li>
                                        <li>Operations, Business Development and Expansions</li>
                                    </ol></h6>
                                </div>
                                </li>
                            </ul>
                        </div>
                        <a href="https://docs.google.com/forms/d/1hGfVLm4oMbec8LHneGf2MJR2z3p4apYQzcV7BGZrAyc/viewform?c=0&w=1&usp=mail_form_link" target="_blank" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Register here</a>
                        <a href="contact-us" class="btn btn-primary btn-icon"><i class="fa fa-phone-square"></i>Contact us</a>

                    </div>
                </div>


			</div>

		

				<?php include ("footer.php"); ?>	

					