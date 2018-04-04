<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Login | KIIT E-Cell
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
							</a>
						</div>
						<div class="m-login__signin">
							
							<form id="loginForm" name="loginForm" class="m-login__form m-form" action="/login/userAuth">
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
						
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div>
							<form id="form_reset_pass" class="m-login__form m-form" action="account/password/reset">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="humanEmail" id="humanEmail" autocomplete="off">
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
							</form>
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
		
	</body>
	<!-- end::Body -->
</html>
