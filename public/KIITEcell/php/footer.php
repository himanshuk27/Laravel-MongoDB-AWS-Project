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
								<!--img class="spinner" src="KIITEcell/assets/images/spinner_white.gif"-->
							</span>
						</div>
						<input type="hidden" value="true" id="submit" name="submit">
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
					<h5>Get Sparrow <img src="KIITEcell/assets/images/sparrow_logo.png" width="50px" height="auto"><br /> Official E-Cell App</h5>
					<img src="KIITEcell/assets/images/playstore.png" width="170px" height="auto"></a>
					<br /><br />
					<script async language="JavaScript" type="text/javascript">
						TrustLogo("KIITEcell/comodo_secure_seal_113x59_transp.png", "CL1", "none");
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
							<img alt="KIIT Ecell" class="img-responsive" style="width:30px; height:30px;" src="KIITEcell/assets/images/logo_alt.png">
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
<script src="KIITEcell/js/theme.js"></script>
<script src="KIITEcell/js/theme.init.js"></script>
<script async src="KIITEcell/js/views/view.home.js"></script>
<script async src="KIITEcell/libs/jquery.appear/jquery.appear.min.js"></script>
<script async src="KIITEcell/libs/jquery.easing/jquery.easing.min.js"></script>
<script async src="KIITEcell/libs/jquery-cookie/jquery-cookie.min.js"></script>
<script src="KIITEcell/libs/bootstrap/js/bootstrap.min.js"></script>
<script async src="KIITEcell/libs/common/common.min.js"></script>
<script async src="KIITEcell/libs/jquery.validation/jquery.validation.min.js"></script>
<script async src="KIITEcell/libs/isotope/jquery.isotope.min.js"></script>
<script src="KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="KIITEcell/js/sweetalert2.all.js"></script>
<script src="KIITEcell/libs/jquery.gmap/jquery.gmap.js"></script>
<script async src="KIITEcell/libs/owl.carousel/owl.carousel.min.js"></script>
<script async src="KIITEcell/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme Base, Components and Settings -->

<script async src="KIITEcell/js/add_newsletter.js"></script>

<!-- Current Page Vendor and Views -->
<?php if($pageid=="Home"){ ?>
<script src="KIITEcell/libs/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="KIITEcell/libs/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="KIITEcell/libs/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<?php } ?>



<!-- Theme Initialization Files -->


<?php 
if($pageid=="About"){ ?>
<script> 
      $(function() {     

    //alert("page loaded");
    $('#team').submit(function(event) {        
       
       $.ajax( {
  type: 'POST',
  url: 'KIITEcell/php/membersform.php',
  data: new FormData( this ),
  processData: false,
  contentType: false,
  cache: false,
  success:function(result){                     
                    alert(result);
                 }
});

    //next line: end of ajax
    });
//next line: end of script
}); 
        
    </script>
<?php } ?>

<?php 
//if($pageid=="Makovation"){ ?>
<!--script> 
      $(function() {  
      console.log("Makovation");   

    //alert("page loaded");
    $('#makovation').submit(function(event) {        
       
       $.ajax( {
  type: 'POST',
  url: 'KIITEcell/php/makovation-registration.php',
  data: new FormData( this ),
  processData: false,
  contentType: false,
  cache: false,
  success:function(result){                     
                    alert(result);
                 }
});

    //next line: end of ajax
    });
//next line: end of script
}); 
        
    </script-->
<?php } ?>

<?php if($pageid=="Contact"){ ?>
<script src="KIITEcell/js/views/view.contact.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF3wMjYMC1nu43rxIV3S_z54kiXJsBibk"></script>
		<script>			
			// Map Markers
			var mapMarkers = [{
				address: "KIIT University",
				html: "<strong>Office</strong><br>K I I T University ,Patia, Bhubaneswar IN 751024",
				icon: {
					image: "assets/images/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 20.355329938938823;
			var initLongitude = 85.81549644470215;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>
      <?php }   ?> 

 <!-- Theme Custom -->
<script src="KIITEcell/js/custom.js"></script>     
       



</body>
</html>