@extends('KIITEcell.layouts.main')

@section('title', 'TBI Initiatives - Ecell | KIIT University')
@section('description', '')

@section('keywords', '')	

@section('content')


		<div role="main" class="main">
				
				<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Technology Buisness Incubator</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Intiatives</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">		

				<hr class="tall">


					<div class="row" id="prayas">
						<div class="col-md-4">

							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="/KIITEcell/assets/tbi/nidhi-thumb.jpg">
									</span>
								</div>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="/KIITEcell/assets/tbi/nidhi-thumb2.jpg">
									</span>
								</div>								
							</div>

						</div>

						<div class="col-md-8">

							<div class="portfolio-info">
								<div class="row">
									<div class="col-md-12 center">
										<ul>											
											<li>
												<i class="fa fa-calendar"></i> 26 February 2017
											</li>
											<li>
												<i class="fa fa-tags"></i> <a href="#">Digital Modelling</a>, <a href="#">Innovators</a>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<h4 class="heading-primary">Nidhi <strong>Prayas</strong></h4>
							<p class="mt-xlg">We invite applications for prototyping projets through digital modelling and fabrication process under NIDHI-PRAYAS
							 Scheme @ KIIT-TBI-NIDHI PRAYAS Centre.
							 <br><br>
							 The Main objective of the KIIT-TBI-NIDHI PRAYAS Centre (PC) is to support the innovators (PRAYASEE) by providing grant along with a PC
							  Fab Lab facility for the development of POC/Ready product thus bridging the gap between idea and prototype funding.
							 
							 <br><br>
							 Preference may be given to those innovators who have bootstrapped or have got co-investment commitment. The IP generated will be with
							  the PRAYASEE.
							  </p>							
  							<button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">
										View Brochure
									</button>
                            <a href="/KIITEcell/assets/tbi/NIDHI-PRAYAS-Application-form.doc" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Download Application Form</a> 
							<span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>
						</div>						
					</div>

						<hr class="tall">
				</div>
				<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="largeModalLabel">Prayas Brochure</h4>
												</div>
												<div class="modal-body">
													<img alt="" class="img-responsive" src="/KIITEcell/assets/tbi/PRAYAS-Brochure.jpg">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

		

				@endsection	

					