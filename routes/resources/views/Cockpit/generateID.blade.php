<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Generate ID Esummit | KIIT E-Cell
		</title>
		<meta name="description" content="Login to KIIT Ecell Cockpit.">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="/Esummit18/assets_dash/vendors/vendors.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="/Esummit18/assets_dash/css/style.css" rel="stylesheet" type="text/css"/>
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="Cockpit/favicons/favicon.ico" type="image/x-icon"/>
		
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(/Esummit18/assets_dash/img/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img style="width: 250px; height: 100px;" src="//ecell.org.in/logo">
							</a><br><br>
							<h4>E-Summit '18 ID Card</h4>
						</div>
						
						<div class="m-login__signin">
						
							<form id="loginForm" name="loginForm" class="m-login__form m-form" action="/generateid" method="POST">
								<input type="hidden" name="_token" value="{{csrf_token()}}">								
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" id="es_id" placeholder="ES_ID" name="es_id" autocomplete="off">
								</div>

								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" id="userEmail" placeholder="Email" name="userEmail" autocomplete="off">
								</div>
								
								
								<div class="m-login__form-action">
									<input id="" class="btn btn-info m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit" value="Search">
										
									  <br><br><h3 id="status" style="display: none">No result Found</h3>
								</div>
							</form>
						</div>

						<div>
							
						</div>
						
												
						
					</div>
				</div>

				


				<div class=" m-grid__item--fluid m-login__wrapper" id="result"  style="margin-top: -120px;display:none">
					

				<div class="m-widget1" >
	<div class="m-widget1__item">
		<h4 class="">Search Result</h4><br><br>

		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Name</h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-focus name"></span>
			</div>
		</div>
	</div>
	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Email</h3>
				
			</div>
			<div class="col">
				<span id="sendEmail" class="m-widget1__number m--font-accent email" style="margin-left: 50px"></span>
			</div>
		</div>
	</div>
	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">ES_ID</h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-info id"></span>
			</div>
		</div>
	</div>

	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Track</h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-info track"></span>
			</div>
		</div>
	</div>

	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Payment</h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-info payment"></span>
			</div>
		</div>
	</div>

	
</div>

<div class="m-login__signin">
						
							<form id="track_sel" name="loginForm" class="m-login__form m-form" method="POST">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<!--div id="abc" style="display: none; font-size: 20px;" class="form-group m-form__group">
									<input type="checkbox" name="track" id="tr_tech" value="tech">Tech
									<br>
									<input type="checkbox" name="track" id="tr_business" value="business">Business
									<br>
									<input type="checkbox" name="track" id="tr_innovation" value="innovation">Innovation
									<br>
									<input type="checkbox" name="track" id="tr_startup" value="startup">Startup Planet
									<br>
									<input type="checkbox" name="track" id="tr_mkv" value="mkv">Only Makovation
								</div-->
								
								
								
								<!--div class="m-login__form-action">
									<input id="gen_final" class="btn btn-info m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit" value="Register">
										
									  <br><br><h3 id="status" style="display: none">No result Found</h3>
								</div-->
							</form>
						</div>
</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="/Cockpit/assets/vendors/vendors.bundle.js" type="text/javascript"></script>
		<script src="/Cockpit/assets/js/scripts.bundle.js" type="text/javascript"></script>
		<script src="/Cockpit/assets/js/scripts.js" type="text/javascript"></script>

		<script type="text/javascript">

			var form = $("#loginForm");
		

			form.submit(function(e){
                 e.preventDefault();
				var data = form.serialize();
				var userEmail = $('#userEmail').val();
				var es_id = $('#es_id').val();

				$.ajax({
			url: '/generateid',
			type : 'POST',
			data: { 
				'userEmail': userEmail,
				'es_id': es_id,
				'_token': '{{ csrf_token() }}'
			},
			dataType : 'json',
		}).done(function(response) {
			
			

			if( response.type=='success' ){
				//$('#modal_feedback').modal('hide');
				console.log("true");
				// swal('Found', 
				// 	"Name: "+"<strong>"+response.Name+"</strong>"+" <br>"+"Contact:"+"<strong>"+response.Contact+"</strong>", 'success').then(() => {
				// 	//window.location.href="https://interncamp.ecell.org.in";
				// });

             $("#result").css("display", "block");
             $("#status").css("display", "none");
             $(".name").text(response.Name);
             $(".email").text(response.Email);
             $(".track").text(response.Track);
             
             	$("#abc").css("display", "block");
             
             

            
             	
             $(".payment").text(response.Status);
             $(".id").text(response.ES_ID);

				
			}

			else
			{
			 //    console.log("False");	
				// swal('Error', response.msg, 'error');
				$("#result").css("display", "none");
				$("#status").css("display", "block");
			}


			
		}).fail(function(response, status, xhr, $form) {
			//btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			//swal('Critical Error', xhr, 'error');
			$("#result").css("display", "none");
		    $("#status").css("display", "block");

		});
		});

			



			var form2 = $("#track_sel");
		

			form2.submit(function(e){

				e.preventDefault();

				
				var data = form2.serialize();

				var sendEmail = $('#userEmail').val();

				data = data+"&email="+sendEmail;
				

				//var track = $('#')

				

				var btn = $(this);

				var action = '/finalReg';

			//	var track = $("#abc").val();			


				btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data:data,
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
		
	</body>
	<!-- end::Body -->


</html>
