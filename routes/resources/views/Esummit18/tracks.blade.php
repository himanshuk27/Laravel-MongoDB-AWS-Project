@extends('Esummit18.layouts.dashboard')

@section('title', 'KIIT E-Summit\'18 | Dashboard')

@section('css')

<link href="/Esummit18/assets_dash/css/custom.css" rel="stylesheet" type="text/css" />

@end section

@section('content')

<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon">
					<i class="la la-leaf"></i>
				</span>				
				@if(isset($data['track']))
				<h3 class="m-portlet__head-text">
					Your Selected Track: {{strtoupper($data['track'])}}
				</h3>
				@else
				<h3 class="m-portlet__head-text">
					Choose Your Tracks!
				</h3>
				@endif
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="m-pricing-table-1">
			<div class="m-pricing-table-1__items row">
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-brand">
							<img src="Esummit18/assets_dash/	img/track_tech.png">
						</span>
					</div>
					<span class="m-pricing-table-1__price">
						Tech & Design
					</span>											
					<div class="m-pricing-table-1__btn">
						<button id="track_tech" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">
							Select
						</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-brand">
							<img src="Esummit18/assets_dash/	img/track_market.png">
						</span>
					</div>
					<span class="m-pricing-table-1__price">
						Business												
					</span>
					<div class="m-pricing-table-1__btn">
						<button id="track_market" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">
							Select
						</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-brand">
							<img src="Esummit18/assets_dash/	img/track_innovation.png">
						</span>
					</div>
					<span class="m-pricing-table-1__price">
						Innovation												
					</span>
					<div class="m-pricing-table-1__btn">
						<button id="track_innovation" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">
							Select
						</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-brand">
							<img src="Esummit18/assets_dash/	img/track_startup.png">
						</span>
					</div>
					<span class="m-pricing-table-1__price">
						Startup Planet												
					</span>
					<div class="m-pricing-table-1__btn">
						<button id="track_startup" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">
							Select
						</button>
					</div>
				</div>										
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal_tech" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Tech & Design Track</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-portlet__body">
					<div class="m-pricing-table-1">
						<div class="m-pricing-table-1__items row">
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/bitcoin.png"></span>
								</div>				 
								<span class="m-pricing-table-1__price"></span> 	
								<h2 class="m-pricing-table-1__subtitle">BlockChain</h2>

							</div>
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/oculus-rift.png"></span>
								</div>					 
								<span class="m-pricing-table-1__price"></span> 	
								<h2 class="m-pricing-table-1__subtitle">AR/VR</h2>

							</div>
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/dribbble.png"></span>
								</div>			
								<span class="m-pricing-table-1__price"></span> 				
								<h2 class="m-pricing-table-1__subtitle">Dribbble Meetup</h2>					
							</div>
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/drone.png"></span>
								</div>
								<span class="m-pricing-table-1__price"></span> 						
								<h2 class="m-pricing-table-1__subtitle">Hackadrone</h2>					
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-centered">
					<p>Technology track makes its participants aware of the skills they can learn in the technical domain to be on the same page with the industry. The track comprises of a three-day event. On the first day, a keynote session and a Dribble meetup has been planned. The second day comprises of workshops on Augmented Reality/Virtual Reality. On the third day, we have a workshop on BlockChain / Cryptocurrency Mining.
						A workshop on Hackdrone by FlytBase is also planned, which is an unique kind of workshop which helps in developing Unique Drones. This will be a parallel event. Also, there will be a chance to get internship in some renowned companies and earn prize money.
						Youtuber Performance and Mad Talk by Mad Over Marketing is open to all participants.
					</p>
					<!--h4>More Details Coming Soon....</h4-->
				</div>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button id="but_sub_tech" type="button" class="btn btn-primary">Enroll</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal_business" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Business & Marketing Track</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-portlet__body">
					<div class="m-pricing-table-1">
						<div class="m-pricing-table-1__items row">
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/case_study.png"></span>
								</div>				 
								<span class="m-pricing-table-1__price"></span> 	
								<h2 class="m-pricing-table-1__subtitle">Case Study</h2>
								
							</div>
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/startup.png"></span>
								</div>					 
								<span class="m-pricing-table-1__price"></span> 	
								<h2 class="m-pricing-table-1__subtitle">Business Simulation</h2>
								
							</div>
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/mom.jpg"></span>
								</div>			
								<span class="m-pricing-table-1__price"></span> 				
								<h2 class="m-pricing-table-1__subtitle">Mad Over Marketing (MOM)</h2>					
							</div>
							<div class="m-pricing-table-1__item col-lg-3">
								<div class="m-pricing-table-1__visual">
									<div class="m-pricing-table-1__hexagon1"></div>
									<div class="m-pricing-table-1__hexagon2"></div>
									<span class="m-pricing-table-1__icon m--font-brand"><img class="imgwrapper" src="Esummit18/assets_dash/img/tracks/wordpress.png"></span>
								</div>
								<span class="m-pricing-table-1__price"></span> 						
								<h2 class="m-pricing-table-1__subtitle">SEO, SMO, Wordpress</h2>					
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-centered">
					<p>This track aims to test the strategizing and planning capability of participants and help them understand the nitty-gritty of Finance, Marketing, HR and Content Entrepreneurship, providing a holistic approach.
						The track comprises of a three day event with each day having an introductory session and problem solving scenario. The first day will have sessions on Content Entrepreneurship, Inbound Marketing, SEO, SMO and Adwords. The second day will have Case study sessions.  On the third day, we are featuring a business simulation game with hands-on experience.
						Youtuber Performance and Mad Talk by Mad Over Marketing is open to all participants.
					</p>
					<!--h4>More Details Coming Soon....</h4-->
				</div>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button id="but_sub_business" type="button" class="btn btn-primary">Enroll</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_innovation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Innovation Track</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-portlet__body">					
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-centered">
					<p>Workshop on Design Thinking, the rarest workshop found in India.
						Makovation:
						There will be primarily three phases in this track-
						Phase I-
						This phase will primarily focus on generating awareness about the process, engaging participants through theme based mini-hackathons. At the end of this phase we will take their entries and selected ideas will be promoted to phase II.
						Phase II-
						This will be an extensive workshop series based on basics of Design Thinking principle and Idea validation to give participants a hands on experience. This will happen during the E-summit.
						Phase III-
						This will be a unique hackathon called MAKOVATION followed by a pitching session. MAKOVATION will be a collaborative platform equipped with necessary resources and mentorship support whereby participants are expected to give a final shape to their prototype that will be used for pitching round.

						Top ten prototypes/ideas will be selected and will be integrated into Maker’s Lab with a chance to win prize money.
						Youtuber Performance and Mad Talk by Mad Over Marketing is open to all participants.

					</p>
					<!--h4>More Details Coming Soon....</h4-->
				</div>
			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button id="but_sub_innovation" type="button" class="btn btn-primary">Enroll</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_enroll_tech" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Tech & Design Track</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">								
				<span class="m-section__sub">
					Please answer a simple survey question.						
				</span>
				<br><br>
				<form id="form_bug_report" action="tracks/enroll" class="m-form m-form--fit">									
					<div class="form-group m-form__group">
						<label for="exampleTextarea">What makes you choose Tech & Design track:</label>
						<textarea class="form-control m-input" placeholder="Not more than 250 words." name="why" rows="7"></textarea>
					</div>

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="but_send_track" class="btn btn-primary pull-right">Send</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="sessionId" value="{{ $data['id'] or '' }}">
					<input type="hidden" name="track" value="tech">
				</form>


			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modal_enroll_market" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Business & Marketing Track</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">								
				<span class="m-section__sub">
					Please answer a simple survey question.						
				</span>
				<br><br>
				<form id="form_bug_report" action="tracks/enroll" class="m-form m-form--fit">									
					<div class="form-group m-form__group">
						<label for="exampleTextarea">What makes you choose Business & Marketing track:</label>
						<textarea class="form-control m-input" placeholder="Not more than 250 words." name="why" rows="7"></textarea>
					</div>

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="but_sel_business" class="btn btn-primary pull-right">Send</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="sessionId" value="{{ $data['id'] or '' }}">
					<input type="hidden" name="track" value="business">
				</form>


			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modal_enroll_innovation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Innovation Track</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			 <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="500">								
				<span class="m-section__sub">
					Please enter your product details.						
				</span>
				<br><br>
				<form id="form_bug_report" action="tracks/enroll" class="m-form m-form--fit">									
					<div class="m-form__group form-group">
						<label for="">Do you have a Prototype?</label>
						<div class="m-checkbox-inline">
							<label class="m-checkbox">
								<input name="prototype" type="checkbox" value="Yes" required> Yes
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="prototype" type="checkbox" value="No"> No
								<span></span>
							</label>											
						</div>
					</div>

					<div class="form-group m-form__group">
						<label for="exampleTextarea">Idea :</label>
						<textarea class="form-control m-input" placeholder="Describe your idea in details." name="idea" rows="7"></textarea>
					</div>

					<div class="form-group m-form__group">
						<label for="exampleTextarea">Innovation/Technology Used :</label>
						<textarea class="form-control m-input" placeholder="Describe your idea in details." name="tech_used" rows="5"></textarea>
					</div>

					<div class="form-group m-form__group">
						<label for="exampleTextarea">Unique Selling Point (USP) :</label>
						<textarea class="form-control m-input" placeholder="Mention the usp of the product." name="usp" rows="5"></textarea>
					</div>

					<div class="form-group m-form__group">
						<label for="exampleSelect1">Category :</label>
						<select class="form-control m-input" name="category">						

							<option value="none">Please Select</option>

							<option value="e-Commerce">e-Commerce</option>

							<option value="Data Science, ML, AI">Data Science, ML, AI</option>

							<option value="Education Tech">Education Tech</option>

							<option value="Financial Tech">Financial Tech</option>

							<option value="Health Tech">Health Tech</option>

							<option value="Human Resources, Recruiting">Human Resources, Recruiting</option>

							<option value="Internet of Things, Hardware">Internet of Things, Hardware</option>

							<option value="Marketing Tech">Marketing Tech</option>

							<option value="Social Networks">Social Networks</option>

							<option value="Travel Tech">Travel Tech</option>

							<option value="Others">Others</option>							

						</select>
					</div>

					<div class="m-form__group form-group">
						<label for="">Current Status</label>
						<div class="m-radio-inline">
							<label class="m-radio">
								<input type="radio" name="status" value="Ideation">Ideation
								<span></span>
							</label>
							<label class="m-radio">
								<input type="radio" name="status" value="Prototype">Prototype
								<span></span>
							</label>
							<label class="m-radio">
								<input type="radio" name="status" value="Ready">Ready to Launch
								<span></span>
							</label>
						</div>
					</div>

					<div class="form-group m-form__group">
						<label for="exampleInputEmail1">Required Funding :</label>
						<input type="text" class="form-control m-input" name="required_fund">
					</div>

					<div class="form-group m-form__group">
						<label for="exampleInputEmail1">No of Team Members :</label>
						<input type="number" class="form-control m-input" name="no_team">
					</div>

					<div class="form-group m-form__group">
						<label for="exampleInputEmail1">Required time period for market ready product :</label>
						<input type="text" class="form-control m-input" name="required_time">
					</div>

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="but_send_inno" class="btn btn-primary pull-right">Send</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="sessionId" value="{{ $data['id'] or '' }}">
					<input type="hidden" name="track" value="innovation">
				</form>
			</div>

			</div>

		</div>
	</div>
</div>

@endsection

@section('scripts')

@if (! empty( ($_GET['email']) ) )
<script type="text/javascript">
	function showCustomMsg() {
		var msg;
		if('{{$_GET['email']}}' == 'verified')
			msg = 'Email verified successfully!';
		
		swal('Great', 'Email Verification Complete!', 'success');
	}			

	window.onload = showCustomMsg();
</script>		
@endif

<script type="text/javascript">


	$.validator.addMethod("checkInput", function(value, element, param) {                  
		return this.optional(element) || value != param;
	}, "Please Select this option");
 
	$('#but_sub_tech').click(function(){
		$('#modal_tech').modal('hide');
		$('#modal_enroll_tech').modal('show');
	});

	$('#but_sub_business').click(function(){
		$('#modal_business').modal('hide');
		$('#modal_enroll_market').modal('show');
	})

	$('#but_sub_innovation').click(function(){
		$('#modal_innovation').modal('hide');
		$('#modal_enroll_innovation').modal('show');
	})

	$('#but_send_inno').click(function(e) {
		e.preventDefault();
		var btn = $(this);
		var form = $(this).closest('form');
		var action = form.prop('action');
		var data = form.serialize();

		form.validate({
			rules: {
				prototype: {
					required: true
				},
				prototype: {
					required: true
				},
				idea: {
					required: true
				},
				tech_used: {
					required: true
				},
				usp: {
					required: true
				},
				category: {
					required: true,
					checkInput: 'none'
				},
				status: {
					required: true
				},
				required_fund: {
					required: true
				},
				no_team: {
					required: true
				},
				required_time: {
					required: true
				}							
			}
		});

		if (!form.valid()) {
			return;
		}

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				$('#modal_enroll_innovation').modal('hide');
				swal('Awesome!', response.message, 'success').then(() => {
					location.reload();							
				})							
			}

			else
				swal('Error', response.message, 'error');



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', xhr, 'error');

		});
	});

	$('#but_send_track, #but_sel_business').click(function(e) {
		e.preventDefault();
		var btn = $(this);
		var form = $(this).closest('form');
		var action = form.prop('action');
		var data = form.serialize();

		form.validate({
			rules: {
				why: {
					required: true
				}							
			}
		});

		if (!form.valid()) {
			return;
		}

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				$('#modal_enroll_tech').modal('hide');
				swal('Awesome!', response.message, 'success').then(() => {
					location.reload();							
				})							
			}

			else
				swal('Error', response.message, 'error');



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', xhr, 'error');

		});
	});




	function trackInit(track){			
		switch(track){
			case 'modal_tech':
			$('#modal_tech').modal('show');
			break;
			case 'modal_business':
			$('#modal_business').modal('show');
			break;
			case 'modal_innovation':
			$('#modal_innovation').modal('show');
			break;		
			default:
			return;	
		}		
	}


	$('#track_tech').click(function(){
		if('{{ $data['prof_status'] }}' == true ){
			if('{{ $data['trackInit_status'] or 'none'}}' == 'none' ){
				trackInit('modal_tech');
			}
			else{
				swal('Track Selection', 'Selecting track more than once will override previous selected track.', 'warning').then(() => {
					trackInit('modal_tech');							
				});			
			}
			
		}
		
		else{
			swal({
				title: 'Profile Incomplete!',
				text: "You must update your profile to complete this action.",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Update Profile'
			}).then((result) => {
				if (result.value) {
					window.location.href = 'profile';
				}
			});
		}
	})

	$('#track_market').click(function(){
		if('{{ $data['prof_status'] }}' == true){
			if('{{ $data['trackInit_status'] or 'none'}}' == 'none' ){
				trackInit('modal_business');
			}
			else{
				swal('Track Selection', 'Selecting track more than once will override previous selected track.', 'warning').then(() => {
					trackInit('modal_business');							
				})			
			}
		}
		else{
			swal({
				title: 'Profile Incomplete!',
				text: "You must update your profile to complete this action.",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Update Profile'
			}).then((result) => {
				if (result.value) {
					window.location.href = 'profile';
				}
			})
		}
	})

	$('#track_innovation').click(function(){
		if('{{ $data['prof_status'] }}' == true){
			if('{{ $data['trackInit_status'] or 'none'}}' == 'none' ){
				trackInit('modal_innovation');
			}
			else{
				swal('Track Selection', 'Selecting track more than once will override previous selected track.', 'warning').then(() => {
					trackInit('modal_innovation');							
				})			
			}
		}
		else{
			swal({
				title: 'Profile Incomplete!',
				text: "You must update your profile to complete this action.",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Update Profile'
			}).then((result) => {
				if (result.value) {
					window.location.href = 'profile';
				}
			})
		}
	})


</script>

<script type="text/javascript">
	$('#track_startup').click(function(){
	
		var btn = $(this);
		var form = $(this).closest('form');
		var action = '/tracks/enroll';

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data: { 
				'track': 'startup',
				'_token': '{{ csrf_token() }}'
			},
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				$('#modal_enroll_tech').modal('hide');
				swal('Awesome!', response.message, 'success').then(() => {
					location.reload();							
				})							
			}

			else
				swal('Error', response.message, response.type);



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', xhr, 'error');

		});

		})

	
</script>

@endsection		