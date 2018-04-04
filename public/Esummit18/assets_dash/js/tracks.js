$( document ).ready(function() {


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

	$('#track_startup').click(function(){
		if('{{ $data['track'] or 'none'}}' != 'startup' ){
			swal('Your profile type is not set as Startup');
		}
		else{
			swal('This track will open soon');
		}
		
	})

});