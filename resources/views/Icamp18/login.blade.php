<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Login | Internship Camp '18
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
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="/Icamp18/assets_dash/vendors/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/Icamp18/assets_dash/css/style.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="apple-touch-icon" sizes="57x57" href="/Icamp18/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/Icamp18/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/Icamp18/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/Icamp18/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/Icamp18/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/Icamp18/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/Icamp18/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/Icamp18/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/Icamp18/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/Icamp18/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/Icamp18/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/Icamp18/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/Icamp18/favicons/favicon-16x16.png">
		<link rel="manifest" href="/Icamp18/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(/Icamp18/assets_dash/img/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img style="width: 200px; height: 100px;" src="/logo">
							</a>
						</div>
						<div class="m-login__signin">

							<div class="m-login__head">
					<h3 class="m-login__title">Sign In/Register To Internship Camp '18</h3>
				</div>
							
							<form id="loginForm" name="loginForm" class="m-login__form m-form" action="/login/auth">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="userEmail" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="userPass">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
							<label class="m-checkbox  m-checkbox--focus">
							<input type="checkbox" id="es_login"> Use Esummit '18 Email
							<span></span>
							</label>
						</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Forget Password ?
										</a>
									</div>
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
									<button id="but_reg" class="btn btn-success btn-lg">
										&nbsp;Register&nbsp;
									</button>
								</div>
								<div class="col m--align-right m-login__form-right">
									<button id="m_login_signin_submit" class="btn btn-info m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary btn-lg">
										Sign In
									</button>
								</div>
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}" >
							</form>
						</div>
						<!--div class="m-login__signup">
							<div class="m-login__head">
								
								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>
							<form class="m-login__form m-form">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="cand_name" >
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="newEmail" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" id="newPass" name="newPass">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" id ="repeatPass" name="repeatPass">
								</div>
								
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn btn-info m-btn m-btn--custom m-btn--air  m-login__btn">
										Sign Up
									</button>
									&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn btn-info-outline-focus m-btn m-btn--custom  m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div-->
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>
							<form id="form_reset_pass" class="m-login__form m-form" action="/account/password/reset">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="humanEmail" id="humanEmail" autocomplete="off">
								</div>
								<br>
								<div class="col m--align-left m-login__form-left">
							<label class="m-checkbox  m-checkbox--focus">
							<input type="checkbox" id="es_login_forgot"> Use Esummit '18 Email
							<span></span>
							</label>
						</div>
								<div class="m-login__form-action">
									<button id="sub_forget_pass" class="btn btn-info m-btn m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">
										Request
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-info-focus m-btn m-btn--custom m-login__btn">
										Cancel
									</button>
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}" >
							</form>
						</div>
					
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="/Icamp18/assets_dash/vendors/vendors.bundle.js" type="text/javascript"></script>
		<script src="/Icamp18/assets_dash/js/scripts.bundle.js" type="text/javascript"></script>
		<script src="/Icamp18/assets_dash/js/scripts2.js" type="text/javascript"></script>

		<script type="text/javascript">
			//var loc = window.location.pathname;
    //var dir = loc.substring(loc.indexOf('/')+1);
    	//dir = dir.substring(loc.indexOf('/')+1);
    	//dir = dir.substring(loc.lastIndexOf('/')+1);
			//alert(dir);
		</script>

		@if (! empty( ($_GET['errorType']) ) )
		<script type="text/javascript">			
			function showCustomMsg() {
		var msg;
		if('{{$_GET['errorType']}}' == 'session_exp')
			msg = 'Session Expired! Please Login Again.';
		
        var alert = $('<div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert">\
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
            <span></span>\
        </div>');
        loginForm = $('#m_login').find('.m-login__signin form');
        alert.prependTo(loginForm);
        alert.animateClass('fadeIn animated');
        alert.find('span').html(msg);
    }			

    window.onload = showCustomMsg();
		</script>
		@endif


		
	</body>
	<!-- end::Body -->
</html>
