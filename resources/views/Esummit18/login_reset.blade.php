<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Reset Password | KIIT E-Summit 2018
		</title>
		<meta name="description" content="Login to KIIT E-Summit'18 Dashboard.">
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
		<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '111549111', 'auto');
            ga('send', 'pageview');
        </script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="/Esummit18/assets_dash/vendors/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/Esummit18/assets_dash/css/style.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="apple-touch-icon" sizes="57x57" href="Esummit18/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="Esummit18/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="Esummit18/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="Esummit18/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="Esummit18/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="Esummit18/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="Esummit18/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="Esummit18/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="Esummit18/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="Esummit18/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="Esummit18/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="Esummit18/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="Esummit18/favicons/favicon-16x16.png">
		<link rel="manifest" href="Esummit18/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
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
								<img style="width: 250px; height: 70px;" src="/logo">
							</a>
						</div>
						<div class="m-login__signin">
							<center><h3>Reset Your Account Password</h3></center>
							<form id="loginForm" name="loginForm" class="m-login__form m-form" action="/account/password/setNew">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="humanPass" autocomplete="off" id="humanPass">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Repeat Password" name="humanPassRepeat">
								</div>
								<div class="row m-login__form-sub">									
									
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-info-outline-focus m-btn m-btn--custom  m-login__btn">
										Cancel
									</button>
									<button class="btn btn-info m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary" id="but_reset_pass">
										Reset
									</button>
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}" >
								<input type="hidden" name="token" value="{{ $data['token'] }}" >
								<input type="hidden" name="hashEmail" value="{{ $data['email'] }}" >
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="/Esummit18/assets_dash/vendors/vendors.bundle.js" type="text/javascript"></script>
		<script src="/Esummit18/assets_dash/js/scripts.bundle.js" type="text/javascript"></script>
		<script src="/Esummit18/assets_dash/js/scripts.js" type="text/javascript"></script>

		<script type="text/javascript">
			$.validator.addMethod("checkInput", function(value, element, param) {                  
		return this.optional(element) || value == param;
	}, "Passwords didn't match!");

		$('#but_reset_pass').click(function(e) {
		e.preventDefault();
		var btn = $(this);
		var form = $(this).closest('form');
		var action = form.prop('action');
		var data = form.serialize();
		var password = $("#humanPass").val();

		form.validate({
			rules: {
				humanPass: {
					required: true,
					minlength: 5
				},
				humanPassRepeat: {
					required: true,
					checkInput: password
				},

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
				swal('Awesome!', response.message, 'success').then(() => {
					window.location.href = '/login';							
				})							
			}

			else
				swal('Error', response.message, 'error');



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', xhr, 'error');

		});
	});
		</script>
		
	</body>
	<!-- end::Body -->
</html>
