@extends('KIITEcell.layouts.main')

@section('title', 'KIIT Ecell Recruitment | KIIT University')
@section('description', '')

@section('keywords', '')

@section('css')
<style type="text/css">
    .swal{
    font-size: 18px !important;
}
</style>
@endsection	

@section('content')

	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Recruitment</a></li>
						<li class="active">2018</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Join KIIT Ecell</h1>
				</div>
			</div>
		</div>
	</section>

	 <div class="container">	

		 <h2>Online registrations have been closed.If you are interested to join E-Cell,onsite registrations will  open on 23rd February,2018</h2>
		 <h4>Venue: C-Block,Campus-3</h4>
		 <h4>Time: 8 AM to 11:30 AM</h4>
		 <h4>___________________________</h4>	
	 	 
		<!--form id="newbies_reg" action="/register/student" method="post">
		<div class="form-group col-md-6">
			<label>Your name *</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
		</div>
		<div class="form-group col-md-6">
			<label>Your email address *</label>
			<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
		</div>
		<div class="form-group col-md-6">
			<label>Roll No *</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="roll_no" required>
		</div>
		<div class="form-group col-md-6">
			<label>Branch *</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="branch" required>
		</div>	

		<div class="form-group col-md-6">
			<label>Academic Year *</label>
			<select data-msg-required="Please enter the subject." class="form-control" id="year" name="year" required>
				<option value="">Please Select...</option>
				<option value="First">First</option>
				<option value="Second">Second</option>
			</select>
		</div>
		
		<div class="form-group col-md-6">
			<label>Preferred Time Slot *</label>
			<select data-msg-required="Please enter the subject." class="form-control" name="time_slot" required>
				<option value="">Please Select...</option>
				<option value="8am - 11am">8am - 11am[23/02/2018]</option> -->
				<!-- <option value="3pm - 6pm">3pm - 6pm[23/02/2018]</option> -->
				<!-- <option value="11am - 2pm">11am - 2pm[23/02/2018]</option> -->
				<!-- <option value="3pm - 6pm">3pm - 6pm[23/02/2018]</option> -->
			<!-- 
			</select>
		</div>

								<div class="form-row">
									<div class="form-group col-md-6 mb-4">
										<label id="label_skills">What skills do you possess?</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message_3" required></textarea>
									</div>
								</div>
<div class="form-group col-md-6">
			<label>Preferred Department *</label>
			<select data-msg-required="Please enter the subject." class="form-control" name="team" required>
				<option value="">Please Select...</option>
				<option value="Communications">Communications</option>
				<option value="Operations">Operations</option>
				<option value="Designing">Designing</option>
				<option value="Photography">Photography</option>
				<option value="Video Editing">Video Editing</option>
				<option value="App Development">App Development</option>
				<option value="Web Development">Web Development</option>
				<option value="Data Analytics">Data Analytics</option>
				<option value="Others">Others</option>
			</select>
		</div>
		<div class="form-row">
									<div class="form-group col-md-6 mb-4">
										<label>Reason to choose your preferred team *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message_team" required></textarea>
									</div>
								</div>
		<div class="form-row">
									<div class="form-group col-md-6 mb-4">
										<label>Why do you want to join KIIT Ecell? *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message_main" required></textarea>
									</div>
								</div>

		<br>	
		<div class="form-row">
									<div class="form-group col-md-12">
										<input type="submit" id="form_sub" value="Submit" class="btn btn-success btn-lg pull-right" data-loading-text="Loading...">
									</div>
								</div>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}" >
</form> -->
</div>

@endsection	

@section('scripts')

<script type="text/javascript">

	$("#year").change(function() {
		$('#label_skills').empty();
		$('#label_skills').append('What skills do you possess?');
  if($("#year").val() == 'Second'){
  	$('#label_skills').append(' *');
  }
});


	$('#form_sub').click(function(){
	
		var btn = $(this);
		var form = $(this).closest('form');
		var action = form.prop('action');
		var data = form.serialize();

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data: data,
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
			swal('Critical Error', response.responseText, 'error');

		});

		})

	
</script>

@endsection

