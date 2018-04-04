

var _token = $('meta[name="csrf-token"]').attr('content');




$('#but_pay_single').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = '/payment/check';
		var data = { 
			'_token': _token
		};

		

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				swal({
					title: 'Payment Confirmation',
					text: response.message+response.cart_total,
					type: 'warning',
					showCancelButton: true
				}).then((result) => {
					if (result.value)
						window.location = '/payment/init'
				})
				
			}

			else
				swal('Error', response.message, response.type);



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', xhr, 'error');

		});
	});