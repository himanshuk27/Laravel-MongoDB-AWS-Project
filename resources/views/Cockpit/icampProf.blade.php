<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Icamp 18 Profile | KIIT E-Cell
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
							<h4>Icamp 18 Profile</h4>
						</div>
						
						

					
												
						
					</div>
				</div>

				


				<div class=" m-grid__item--fluid m-login__wrapper" id="result"  style="margin-top: -150px;">
					

				<div class="m-widget1" >
	<div class="m-widget1__item">

		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Name: </h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-focus name"> {{$data->name or ''}}</span>
			</div>
		</div>
	</div>
	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Email: </h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-accent email" style="margin-left: 50px">{{$data->email or ''}}</span>
			</div>
		</div>
	</div>
	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Roll: </h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-info roll">{{$data->univ_roll or ''}}</span>
			</div>
		</div>
	</div>

	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Contact: </h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-info contact">{{$data->mobile_no or ''}}</span>
			</div>
		</div>
	</div>

	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Resume: </h3>
				
			</div>
			<div class="col">
			<a href="{{$data->resume or ''}}">	<span class="m-widget1__number m--font-info roll payment_status">Download</span></a>
			</div>
		</div>
	</div>

	<div class="m-widget1__item">
		<div class="row m-row--no-padding align-items-center">
			<div class="col">
				<h3 class="m-widget1__title">Payment Status: </h3>
				
			</div>
			<div class="col">
				<span class="m-widget1__number m--font-info roll payment_status">{{$data->payment?'True':'False'}}</span>
			</div>
		</div>
	</div>
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

				$.ajax({
			url: 'searchregistration',
			type : 'POST',
			data : data,
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
             $(".roll").text(response.Roll);
             $(".payment_status").text(response.Status);
             $(".contact").text(response.Contact);

				
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



			
			

		</script>
		
	</body>
	<!-- end::Body -->


</html>
