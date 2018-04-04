<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
$pageid = "About";
$title = 'Details Update';
$dropdown = ' class="dropdown" ';

/* 
	choose one
 	$active = ' class="active"';
 	$dropdown_active = ' class="dropdown active"';   */

 	$dropdown_active = ' class="dropdown active"';

 	
 	include 'header.php';
 	?>

 	<div role="main" class="main">

 		<section class="page-header">
 			<div class="container">
 				<div class="row">
 					<div class="col-md-12">
 						<ul class="breadcrumb">
 							<li><a href="/">Home</a></li>
 							<li class="active">Update Details</li>
 						</ul>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-md-12">
 						<h1>The Ecell Team</h1>
 					</div>
 				</div>
 			</div>
 		</section>


 		<div class="container">
					<div class="row">
						<div class="col-lg-12">
		<h2>Enter Details</h2>
		<form id="team" action="javascript:" method="post">
 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Name :</label>
 			<div class="col-md-6">
 				<input type="text" class="form-control" id="name" name="name" required>
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Official Email :</label>
 			<div class="col-md-6">
 				<input type="text" class="form-control" id="email" name="email" required>
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Year :</label>
 			<div class="col-md-6">
 				<select class="form-control mb-md" id="yeart" name="year" required>
													<option>First</option>
													<option>Second</option>
													<option>Third</option>
													<option>Fourth</option>
												</select>
 			</div>
 		</div>


 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Department :</label>
 			<div class="col-md-6">
 				<select class="form-control mb-md" id="dept" name="dept" required>
													<option>Tech</option>
													<option>Design</option>
													<option>R&D</option>
													<option>PCR</option>
													<option>Content</option>
												</select>
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Facebook Link :</label>
 			<div class="col-md-6">
 				<input type="text" class="form-control" id="fb_link" name="fb_link">
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Linkedin Link :</label>
 			<div class="col-md-6">
 				<input type="text" class="form-control" id="linkedin" name="linkedin">
 			</div>
 		</div>


 		<div class="form-group">
 			<label class="col-md-3 control-label" for="inputDefault">Twitter Link :</label>
 			<div class="col-md-6">
 				<input type="text" class="form-control" id="twitter" name="twitter">
 			</div>
 		</div>


 		<div class="form-group">
 			<div class="col-md-6">
 		<input type="submit" value="Submit" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Wait..." >
 	</br></br>
</br> 		</div>
 		</div> </form>


 	</div></div></div>

 		<?php include 'footer.php'; ?>
