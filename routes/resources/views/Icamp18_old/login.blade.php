<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Login | KIIT E-Summit 2018
		</title>
		<meta name="description" content="Login to KIIT E-Summit'18 Dashboard.">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
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
		<link href="Icamp18/assets_dash/vendors/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="Icamp18/assets_dash/css/style.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="apple-touch-icon" sizes="57x57" href="Icamp18/assets_dash/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="Icamp18/assets_dash/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="Icamp18/assets_dash/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="Icamp18/assets_dash/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="Icamp18/assets_dash/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="Icamp18/assets_dash/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="Icamp18/assets_dash/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="Icamp18/assets_dash/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="Icamp18/assets_dash/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="Icamp18/assets_dash/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="Icamp18/assets_dash/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="Icamp18/assets_dash/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="Icamp18/assets_dash/favicons/favicon-16x16.png">
		<link rel="manifest" href="Icamp18/assets_dash/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(Icamp18/assets_dash/img/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img style="width: 240px; height: 120px;" src="logo">
							</a>
						</div>
						<div class="m-login__signin">
							
							<form id="loginForm" name="loginForm" class="m-login__form m-form" action="{{ URL::to('login/userAuth') }}">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="userEmail" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="userPass">
								</div>
								<div class="row m-login__form-sub">
									
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Forget Password ?
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-info m-btn m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Sign In
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								
								<div class="m-login__desc">
									Enter your details to create your account:
								</div>
							</div>
							<form class="m-login__form m-form" action="login/newReg">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Fullname" name="humanName" >
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
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="humanEmail" id="humanEmail" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-info m-btn m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">
										Request
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-info-focus m-btn m-btn--custom m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
								Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="Icamp18/assets_dash/vendors/vendors.bundle.js" type="text/javascript"></script>
		<script src="Icamp18/assets_dash/js/scripts.bundle.js" type="text/javascript"></script>
		<script src="Icamp18/assets_dash/js/scripts.js" type="text/javascript"></script>

		@if (! empty( ($data['msg']) ) )
		<script type="text/javascript">
			function showCustomMsg() {
        var alert = $('<div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert">\
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
            <span></span>\
        </div>');
        loginForm = $('#m_login').find('.m-login__signin form');
        alert.prependTo(loginForm);
        alert.animateClass('fadeIn animated');
        alert.find('span').html($data['msg']);
    }			

    window.onload = showCustomMsg();
		</script>
		@endif


		
	</body>
	<!-- end::Body -->
</html>
