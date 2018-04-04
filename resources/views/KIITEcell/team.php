<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
$pageid = "About";
$title = 'Our Team - Ecell | KIIT University';
$dropdown = ' class="dropdown" ';

/* 
		choose one
 	$active = ' class="active"';
 	$dropdown_active = ' class="dropdown active"';   */

 	$dropdown_active = ' class="dropdown active"';
 	include('php/intialize.php');

 	$query = $con->prepare("SELECT * FROM `members` ORDER BY `name`");
 	$query->execute();   





 	include 'header.php';
 	?>

 	<div role="main" class="main">

 		<section class="page-header">
 			<div class="container">
 				<div class="row">
 					<div class="col-md-12">
 						<ul class="breadcrumb">
 							<li><a href="/">Home</a></li>
 							<li class="active">Team</li>
 						</ul>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-md-12">
 						<h1>Team</h1>
 					</div>
 				</div>
 			</div>
 		</section>



 		<div class="container">

 			<h2>Meet the <strong>Team</strong></h2>

 			<ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
 				<li data-option-value=".bod" class="active"><a href="#">Board of Directors</a></li> 				
 				<li data-option-value=".pcr"><a href="#">Public & Corporate Relations</a></li>
 				<li data-option-value=".rnd"><a href="#">Research & Development</a></li>
 				<li data-option-value=".tech"><a href="#">Tech</a></li>
 				<li data-option-value=".design"><a href="#">Design</a></li>	 						
 				<li data-option-value=".content"><a href="#">Content</a></li>	
 				
 			</ul>

 			<hr>

 			<div class="row">

 				<div class="sort-destination-loader sort-destination-loader-showing">
 					<ul class="team-list sort-destination" data-sort-id="team">
 						<?php
 						$src = null;
 						while($row = $query->fetch(PDO::FETCH_ASSOC)){								
 							?>
 							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item 
 							<?php 
 							if($row['dept']=='PCR')
 								echo ' pcr';
 							if($row['dept']=='Content')
 								echo ' content';
 							if($row['dept']=='Design')
 								echo ' design';
 							if($row['dept']=='R&D')
 								echo ' rnd';
 							if($row['dept']=='Tech')
 								echo ' tech';
 							if($row['year']=='Fourth')
 								echo ' bod';
 							?>">
 							<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
 								<span class="thumb-info-wrapper">
 									<a href="#">

 										<img class="img-responsive" src="<?php if($row['fb_id']==null) echo 'assets/placeholder.png'; else
 										echo 'https://graph.facebook.com/'.$row['fb_id'].'/picture?type=large'; ?>" alt="">
 										<span class="thumb-info-title">
 											<span class="thumb-info-inner"><?php echo $row['name']; ?></span>
 											<span class="thumb-info-type">
 												<?php 
 												if($row['year']=='First')
 													echo 'Junior Executive';
 												if($row['year']=='Second')
 													echo 'Junior Executive';
 												if($row['year']=='Third')
 													echo 'Senior Executive';
 												if($row['year']=='Fourth')
 													echo 'BOD';
 												?>
 											</span>
 											<span class="thumb-info-type"><?php echo $row['dept']; ?></span>
 										</span>
 									</a>
 								</span>
 								<span class="thumb-info-caption">
 									<!--span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span-->
 									<span class="thumb-info-social-icons">
 										<?php if($row['fb_link']!=null || $row['fb_link']!="")
 											echo '<a target="_blank" href="'.$row['fb_link'].'" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>';
 										if($row['twitter']!=null || $row['twitter']!="")
 											echo '<a href="'.$row['twitter'].'" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>';
 										if($row['linkedin']!=null || $row['linkedin']!="")
 										echo '<a href="'.$row['linkedin'].'" target="_blank"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>';
 										else 
 											echo '&nbsp;'
 										?>
 									</span>
 								</span>
 							</span>
 						</li>
 						<?php } ?>

 					</ul>
 				</div>

 			</div>

 		</div> </div> 


 	</br></br></br>


 		<?php include ("footer.php"); ?>	

