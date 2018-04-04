
<!DOCTYPE html>

<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />

	<title>@yield('title')</title>
	<meta name="description" content="User profile view and edit"> 

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

	<link rel="shortcut icon" href="Cockpit/favicons/favicon.ico" type="image/x-icon"/> 

	@yield('css')	
</head>
<!-- end::Head -->


<!-- end::Body -->
<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">



	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">


		<!-- begin::Header -->
		<header class="m-grid__item		m-header "  data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200" >
			<div class="m-header__top">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">		
						<!-- begin::Brand -->
						<div class="m-stack__item m-brand">
							<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="#" class="m-brand__logo-wrapper">
										<img style="height: 50px;" src="/logo"/>
									</a>  
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									

									<!-- begin::Responsive Header Menu Toggler-->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- end::Responsive Header Menu Toggler-->


									<!-- begin::Topbar Toggler-->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!--end::Topbar Toggler-->
								</div>
							</div>
						</div>
						<!-- end::Brand -->		
						<!-- begin::Topbar -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">										
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__welcome">Hello,&nbsp;</span>	
												<span class="m-topbar__username">{{$data->CompanyName or 'New User'}}</span>	
												<span class="m-topbar__userpic">
													<img src="/Esummit18/assets_dash/img/user-placeholder.png" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(/Icamp18/assets_dash/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="/Esummit18/assets_dash/img/user-placeholder.png" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">{{$data->CompanyName or 'New User'}}</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">{{$data->CompanyEmail or 'New User'}}</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__item">
																	<a href="/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">  
																			<span class="m-nav__link-wrap">      
																				<span class="m-nav__link-text">My Profile</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Activity</span>
																	</a>
																</li>
																
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="/logout/comp" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<!-- end::Topbar -->			</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">		
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">

								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >		
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item{{ Request::is('dashboard') ? ' m-menu__item--active' : '' }}"  aria-haspopup="true">
											<a  href="/dashboard" class="m-menu__link ">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">Dashboard</span>
											</a>
										</li>
										
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->	
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->		
			<!-- begin::Body -->

				<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">		
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<div class="m-content">

					@yield('content')

				</div></div>

			</div>


			<!-- Modal -->
				<div class="modal fade" id="modal_feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Report Bugs/Feedback</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img align="left" style="width: 80px; height: 80px;" src="/Esummit18/assets_dash/img/mail_bug.png">
								<span class="m-section__sub">
									Please let us know if you find any bugs or want to give a feedback regarding the experience with our website.						
								</span>
								<br><br>
								<form id="form_bug_report" action="/feedback/bug-report" class="m-form m-form--fit">
									<div class="form-group m-form__group">
										<label for="exampleInputEmail1">Email Address:</label>
										<input class="form-control m-input" type="text" class="form-control m-input" name="humanEmail" aria-describedby="emailHelp" placeholder="Enter email">
									</div>
									<div class="form-group m-form__group">
										<label for="exampleTextarea">Bugs or FeedBack :</label>
										<textarea class="form-control m-input" placeholder="Describe about the problem with all details." name="bugReport" rows="7"></textarea>
									</div>

									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="submit" id="sub_bug" class="btn btn-primary pull-right">Send</button>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="sessionId" value="{{ $data->ic_id or '' }}">
								</form>


							</div>

						</div>
					</div>
				</div>


			<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
										2018 &copy; 
										<a href="https://ecell.org.in" target="_blank" class="m-link">
											KIIT E-Cell, 
										</a>
										&nbsp;	Made with <span style="color: #e74c3c">&hearts;</span> by 
										<a href="https://ecell.org.in/team#tech" target="_blank" class="m-link">
										Ecell Techies</a>
									</span>
							</div>
							<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
								<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
									<li class="m-nav__item">
											<a href="https://ecell.org.in/about-us" target="_blank" class="m-nav__link">
												<span class="m-nav__link-text">
													About
												</span>
											</a>
										</li>									
										<li class="m-nav__item">
											<a href="#" class="m-nav__link">
												<span class="m-nav__link-text">
													T&C
												</span>
											</a>
										</li>
										<li class="m-nav__item m-nav__item--last">
											<a href="//kiit.ac.in" target="_blank" class="m-nav__link" data-toggle="m-tooltip" title="Kalinga Institute of Industrial Technology" data-placement="left">
												<span class="m-nav__link-text">
													KIIT
												</span>
											</a>
										</li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->		

</div>
		

		     
		<!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->			<!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
				<li id="but_feedback" class="m-nav-sticky__item" data-toggle="m-tooltip" title="Report Bugs" data-placement="left">
					<a href="#">
						<i class="la la-bug"></i>
					</a>
				</li>
			</ul>
<!-- begin::Quick Nav -->	
<!--begin::Base Scripts -->    
<!--script src="/Icamp18/assets_dash/js/jquery-3.3.1.min.js" type="text/javascript"></script-->    
<script src="/Icamp18/assets_dash/vendors/vendors.bundle.js" type="text/javascript"></script>
<script src="/Icamp18/assets_dash/js/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->   

<script type="text/javascript">

				


				$('#but_feedback').click(function(e){
					$('#modal_feedback').modal('show');
				});

				$('#sub_bug').click(function(e) {
           			e.preventDefault();
           			var btn = $(this);
					var form = $(this).closest('form');
					var action = form.prop('action');
					var data = form.serialize();

					form.validate({
						rules: {
							humanEmail: {
								required: true,
								email: true
							},
							bugReport: {
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
							$('#modal_feedback').modal('hide');
							swal('Great', response.message, 'success');
							
						}

						else
							swal('Error', response.message, 'error');


						
					}).fail(function(response, status, xhr, $form) {
						btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
						swal('Critical Error', xhr, 'error');

					});
				});


			</script>

@yield('scripts')




</body>
<!-- end::Body -->
</html>