@extends('Cockpit.layouts.dashboard')

@section('title', 'Cockpit- KIIT Ecell')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Email Promotions
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--label-align-right" id="emailPromo">
				<div class="m-portlet__body">	
					<div class="m-form__section m-form__section--first">		
						<div class="m-form__heading">
							<h3 class="m-form__heading-title">Domain Address :</h3>
						</div>
						<div class="form-group m-form__group row">
							<div class="col-lg-6">
								<div class="m-radio-inline">
									<label class="m-radio">
										<input checked="checked" type="radio" name="emailDomain" id="emailDomain1"value="@esummit.org.in">esummit.org.in
										<span></span>
									</label>
									<label class="m-radio">
										<input type="radio" name="emailDomain" id="emailDomain2" value="@ecell.org.in">ecell.org.in
										<span></span>
									</label>											
								</div>
							</div>
						</div>
						<div class="m-form__group form-group row">
							<label class="col-lg-2 col-form-label">* From Address :</label>
							<div class="col-lg-4">
								<div class="input-group">
									<input type="text" name="emailId" class="form-control m-input" placeholder="Email Id" aria-describedby="basic-addon2" required>
									<div class="input-group-append"><span class="input-group-text" id="labelEmailDomain">@esummit.org.in</span></div>
								</div>
							</div>
						</div>					
						
					</div>

					<div class="m-form__seperator m-form__seperator--dashed"></div>

					<div class="m-form__section m-form__section--last">
						<div class="m-form__heading">
							<h3 class="m-form__heading-title">Email Template :</h3>
						</div>
						<div class="form-group m-form__group row">
							<div class="col-lg-6">
								<div class="m-radio-inline">
									<label class="m-radio">
										<input checked="" type="radio" name="emailTemp" value="mailTemp">Blank
										<span></span>
									</label>
									<!--label class="m-radio">
										<input checked="" type="radio" name="emailTemp" value="payment">Payment
										<span></span>
									</label-->
									<label class="m-radio">
										<input type="radio" name="emailTemp" value="Cockpit.email_layouts.esummit">Esummit' 18
										<span></span>
									</label>	
									<label class="m-radio">
										<input type="radio" name="emailTemp" value="Cockpit.email_layouts.ecell">Ecell.org.in
										<span></span>
									</label>	
									<label class="m-radio">
										<input type="radio" name="emailTemp" value="Icamp18.email_layouts.email_aisec">Icamp18
										<span></span>
									</label>											
								</div>
							</div>
						</div>
						<div class="form-group m-form__group m-form__group--last">
							<label for="example_input_full_name">* Email Content :</label>
							<div class="col-lg-8">
								<div id="emailContent" name="emailContent" class="summernote"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-form__seperator m-form__seperator--dashed"></div>
				<div class=row>&nbsp;</div>
				<h5>&emsp;&emsp;Email Database :</h5>
				<div class="m-form__group form-group row">
					<label class="col-lg-2 col-form-label">&emsp;&emsp;</label>
					<div class="col-lg-6">
						<div class="m-checkbox-inline">
							<!--label class="m-checkbox">
								<input name="emailDb[]" value="esummit" type="checkbox">Esummit Participants
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="esummit_newsletter" type="checkbox">Esummit Newsletter
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="ecell_newsletter" type="checkbox">Ecell Newsletter
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="makovation" type="checkbox">Makovation Participants
								<span></span>
							</label-->
							<!--label class="m-checkbox">
								<input name="emailDb[]" value="icamp_stu" type="checkbox">Icamp Students
								<span></span>
							</label-->

							<label class="m-checkbox">
								<input name="emailDb[]" value="player_business_1" type="checkbox">E-Summit Business Track 1
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="player_business_2" type="checkbox">E-Summit Business Track 2
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="player_tech_1" type="checkbox">E-Summit Tech Track 1
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="player_tech_2" type="checkbox">E-Summit Tech Track 2
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="player_tech_3" type="checkbox">E-Summit Tech Track 3
								<span></span>
							</label>
							<label class="m-checkbox">
								<input name="emailDb[]" value="player_tech_4" type="checkbox">E-Summit Tech Track 4
								<span></span>
							</label>

						</div>
					</div>
				</div>
				<div class="m-form__seperator m-form__seperator--dashed"></div>
				<div class=row>&nbsp;</div>
				<h5>&emsp;&emsp;Send To :</h5>
				<div class="m-form__group form-group row">
					<label class="col-lg-2 col-form-label">* Subject :</label>
					<div class="col-lg-6">
						<input type="text" name="emailSubject" class="form-control m-input" aria-describedby="basic-addon2" required>
					</div>
				</div>
				<div class="m-form__group form-group row">
					<label class="col-lg-2 col-form-label">* Email Address :</label>
					<div class="col-lg-6">
						<div class="input-group">
							<textarea name="sendEmail" placeholder="user1@mail.com,user2@mail.com,user3@mail.com...." class="form-control m-input" id="exampleTextarea" rows="6"></textarea>
						</div>
					</div>
				</div>

				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						<div class="row">
							<div class="col-lg-6">
								<button type="submit" id="butEmailPromoSubmit" class="btn btn-primary">Submit</button>
								&nbsp;
								<button id="preview" type="button" class="btn btn-success">Preview</button>
							</div>
							<div class="pull-right">
								<button type="button" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}" >
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->

	</div></div>

	<!--begin::Modal-->
<div class="modal fade" id="modalEmailStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Emails Sent Successfully</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div id="emailBody" class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="200">

            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

	@endsection		

	@section('scripts')
	<script src="/Cockpit/assets/js/summernote.js" type="text/javascript"></script>


	<script type="text/javascript">

		function ajaxSend(btn, action, data){
			$.ajax({
				url: action,
				type : 'POST',
				timeout: 0, 
				data: data,
				dataType    : 'json',
			}).done(function(response) {
				btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);

				var count = parseInt(response.count);				

				if( response.type=='success' ){
					var html = '';
					for(i=1; i<=count; i++){
						var email = 'email'+i.toString();
						html = html+'<p>'+response[email]+'</p><br>';
					}

					$('#emailBody').html(html);

					swal.close();
					$('#modalEmailStatus').modal("show");

				}

				else
					swal('Error', response.message, response.type);



			}).fail(function(response, status, xhr) {
				btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
				swal('Critical Error', xhr, 'error');

			});
		}



		$("#emailDomain1, #emailDomain2").change(function (e) {
			$( "#labelEmailDomain" ).html($(this).val());
		});

		$('#butEmailPromoSubmit').click(function(e){

			e.preventDefault();

			
			var btn = $(this);
			var form = $(this).closest('form');
			var action = '/marketing/emailPromoInit';
			var emailContent = $('.summernote').summernote('code');		
			var data = form.serialize();

			data = data+'&emailContent='+encodeURIComponent(emailContent);


			 var ajaxData = new FormData( form.get( 0 ) );          
              ajaxData.append( 'emailContent', emailContent );
         



			if ($('.summernote').summernote('isEmpty')) 
				swal('Error', 'Email content field cant be empty!', 'warning');

			else{

				btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

				swal({
					title: '<img src="/Cockpit/assets/img/spinner.gif">',
					html:
					'<b>Sending emails....</b><br><b>this may take some time.</b>',
					showCloseButton: true,
					showConfirmButton: false,
					onOpen: () => {
						ajaxSend(btn, action, data);
					},
					allowOutsideClick: false
				});

			}

		})

		$('#preview').click(function(e){

			e.preventDefault();

			
			var btn = $(this);
			var form = $(this).closest('form');
			var action = '/marketing/email/preview';
			var emailContent = $('.summernote').summernote('code');		
			//var data = form.serialize();


			//data = data+'&emailContent='+encodeURIComponent(emailContent);
		//	data = data+'&preview=true'+'&emailContent='+encodeURIComponent(emailContent);

			 var ajaxData = new FormData( form.get( 0 ) );          
              ajaxData.append( 'emailContent', emailContent );


			if ($('.summernote').summernote('isEmpty')) 
				swal('Error', 'Email content field cant be empty!', 'warning');

			else{

				btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

				$.ajax({
					url: action,
					type : 'POST',
					data: ajaxData,
					 cache:      false,
            contentType:  false,
            processData:  false,
					dataType    : 'json',
				}).done(function(response) {
					btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


					if( response.type=='success' ){
						window.open('https://cockpit.ecell.org.in'+action, '_blank');							

					}

					else
						swal('Error', response.message, response.type);



				}).fail(function(response, status, xhr) {
					btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
					swal('Critical Error', status, 'error');

				});

			}

		})
	</script>


	@endsection