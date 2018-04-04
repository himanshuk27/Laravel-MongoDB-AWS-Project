(function($) {

	'use strict';

	/*
	Contact Form: Basic
	*/
	$('#contactForm').validate({
		submitHandler: function(form) {

			var $form = $(form),
				$messageSuccess = $('#contactSuccess'),
				$messageError = $('#contactError'),
				$submitButton = $(this.submitButton),
				$errorMessage = $('#mailErrorMessage');

			$submitButton.button('loading');

			// Ajax Submit
			$.ajax({
				type: 'POST',
				url: $form.attr('action'),
				dataType    : 'json',
				data: {
					name: $form.find('#name').val(),
					email: $form.find('#email').val(),
					subject: $form.find('#subject').val(),
					message: $form.find('#message').val(),
					_token: $form.find('#_token').val()
				}
			}).done(function(data) {

				$errorMessage.empty().hide();

				if (data.type == 'success') {

					$messageSuccess.removeClass('hidden');
					$messageError.addClass('hidden');

					// Reset Form
					$form.find('.form-control')
						.val('')
						.blur()
						.parent()
						.removeClass('has-success')
						.removeClass('has-error')
						.find('label.error')
						.remove();

					if (($messageSuccess.offset().top - 80) < $(window).scrollTop()) {
						$('html, body').animate({
							scrollTop: $messageSuccess.offset().top - 80
						}, 300);
					}

					$submitButton.button('reset');
					
					return;

				} else {
					$errorMessage.html(data.message).show();
				}

				$messageError.removeClass('hidden');
				$messageSuccess.addClass('hidden');

				if (($messageError.offset().top - 80) < $(window).scrollTop()) {
					$('html, body').animate({
						scrollTop: $messageError.offset().top - 80
					}, 300);
				}

				$form.find('.has-success')
					.removeClass('has-success');
					
				$submitButton.button('reset');

			}).fail(function(data, textStatus, jqXHR) {

				$errorMessage.empty().hide();			

					$errorMessage.html(jqXHR).show();				

				$messageError.removeClass('hidden');
				$messageSuccess.addClass('hidden');

				if (($messageError.offset().top - 80) < $(window).scrollTop()) {
					$('html, body').animate({
						scrollTop: $messageError.offset().top - 80
					}, 300);
				}

				$submitButton.button('reset');

			});
		}
	});

	/*
	Contact Form: Advanced
	*/
	$('#contactFormAdvanced').validate({
		onkeyup: false,
		onclick: false,
		onfocusout: false,
		rules: {
			'captcha': {
				captcha: true
			},
			'checkboxes[]': {
				required: true
			},
			'radios': {
				required: true
			}
		},
		errorPlacement: function(error, element) {
			if (element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
				error.appendTo(element.parent().parent());
			} else {
				error.insertAfter(element);
			}
		}
	});

}).apply(this, [jQuery]);