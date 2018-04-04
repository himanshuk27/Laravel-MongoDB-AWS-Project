var _token = $('meta[name="csrf-token"]').attr('content');

$("#univ_kiit").change(function () {
            $("#univ_name").css("display","none");
            var univ = this.value;
            if(univ == 'Others')
                  $("#univ_name").css("display","block");
      });


		$('#but_submit, #but_submit2').click(function(e) {
		e.preventDefault();

		var name = $('#name').val();
		var mobile_no = $('#mobile_no').val(); 
		var smobile = $('#smobile').val();
		var univ_year = $('#univ_year').val();
		var univ_name = $('#univ_name').val();
		var univ_kiit = $('#univ_kiit').val(); 
		var univ_roll = $('#univ_roll').val(); 
		var univ_branch = $('#univ_branch').val();

		var btn = $(this);
        var form = $('#updateProf');
		var action = form.attr('action'); 
        var data = { 
        	'name' : name,
        	'mobile_no' : mobile_no,
        	'smobile' : smobile,
        	'univ_kiit' : univ_kiit,
        	'univ_name' : univ_name,
        	'univ_roll' : univ_roll,
        	'univ_year' : univ_year,
        	'univ_branch' : univ_branch,
			'_token': _token
		};


    form.validate({
                rules: {
                    name: {
                        required: true
                    },
                     mobile_no: {
                        required: true,
                        number:true,
                        minlength: 10,
                        maxlength: 10
                    },

                    smobile: {
                    	number:true,
                        minlength: 10,
                        maxlength: 10
                    },
                    
                     univ_roll: {
                        required: true
                    },
                     univ_branch: {
                        required: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }


		$('#but_submit').addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$('#but_submit2').addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);



		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			$('#but_submit').removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			$('#but_submit2').removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				swal('Awesome!', response.message, 'success').then((result) => {
				if (result.value) {
					window.location.href = '/dashboard';
				}
			});
				
			}

			else
				swal('Error', response.message, response.type);



		}).fail(function(response, status, xhr) {
			$('#but_submit').removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			$('#but_submit2').removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', status, 'error');

		});

	});