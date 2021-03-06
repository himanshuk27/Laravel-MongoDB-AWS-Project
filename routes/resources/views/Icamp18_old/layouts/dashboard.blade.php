<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8" />
		<title>
			@yield('title')
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
		<link href="Icamp18/assets_dash/vendors/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="Icamp18/assets_dash/css/style.css" rel="stylesheet" type="text/css" />
		<link rel="apple-touch-icon" sizes="57x57" href="Icamp18/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="Icamp18/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="Icamp18/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="Icamp18/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="Icamp18/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="Icamp18/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="Icamp18/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="Icamp18/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="Icamp18/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="Icamp18/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="Icamp18/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="Icamp18/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="Icamp18/favicons/favicon-16x16.png">
		<link rel="manifest" href="Icamp18/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	</head>
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<div class="m-grid m-grid--hor m-grid--root m-page">
		<header class="m-grid__item	m-header"  data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200" >
			<div class="m-header__top">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-brand">
							<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
									<img alt="logo" align="left" style="width: 67px; height: 36px;" src="logo"/>	
									</a> 
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click" aria-expanded="true">
										<a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
										<span>
										Dashboard
										</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav">
															<li class="m-nav__item">
																<a href="/" class="m-nav__link">
																<i class="m-nav__link-icon fa fa-home"></i>
																<span class="m-nav__link-text">
																Main Website
																</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
											<span class="m-nav__link-icon">
											<span class="m-nav__link-icon-wrapper">
											<i class="flaticon-music-2"></i>
											</span>
											</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(Icamp18/assets_dash/img/misc/notification_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">
														0 New
														</span>
														<span class="m-dropdown__header-subtitle">
														User Notifications
														</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																	<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																		
																		<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																			<span class="">
																				All caught up!
																				<br>
																				No new logs.
																			</span>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
										</li>
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
										<span class="m-topbar__welcome">
										Hello,&nbsp;
										</span>
										<span class="m-topbar__username">
										New User &nbsp;
										</span>
										<span class="m-topbar__userpic">
										<img src="Icamp18/assets_dash/img/user-placeholder.png" class="m--img-rounded m--marginless m--img-centered" alt=""/>
										</span>
										</a>
										<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
										<div class="m-dropdown__header m--align-center" style="background: url(Icamp18/assets_dash/misc/user_profile_bg.jpg); background-size: cover;">
										<div class="m-card-user m-card-user--skin-dark">
										<div class="m-card-user__pic">
										<img src="Icamp18/assets_dash/img/user-placeholder.png" class="m--img-rounded m--marginless" alt=""/>
										</div>
										<div class="m-card-user__details">
										<span class="m-card-user__name m--font-weight-500">
										New User
										</span>
										<a href="" class="m-card-user__email m--font-weight-300 m-link">
										{{ Session::get('sessionKey') }}
										</a>
										</div>
										</div>
										</div>
										<div class="m-dropdown__body">
										<div class="m-dropdown__content">
										<ul class="m-nav m-nav--skin-light">
										<li class="m-nav__section m--hide">
										<span class="m-nav__section-text">
										Section
										</span>
										</li>
										<li class="m-nav__item">
										<a href="profile.html" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-profile-1"></i>
										<span class="m-nav__link-title">
										<span class="m-nav__link-wrap">
										<span class="m-nav__link-text">
										My Profile
										</span>
										<span class="m-nav__link-badge">
										<span class="m-badge m-badge--success">
										2
										</span>
										</span>
										</span>
										</span>
										</a>
										</li>
										<li class="m-nav__separator m-nav__separator--fit"></li>
										<li class="m-nav__item">
										<a href="profile.html" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-info"></i>
										<span class="m-nav__link-text">
										FAQ
										</span>
										</a>
										</li>
										<li class="m-nav__item">
										<a href="profile.html" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-lifebuoy"></i>
										<span class="m-nav__link-text">
										Support
										</span>
										</a>
										</li>
										<li class="m-nav__separator m-nav__separator--fit"></li>
										<li class="m-nav__item">
										<a href="{{route('logout')}}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
										Logout
										</a>
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
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item {{ Request::is('dashboard') ? ' m-menu__item--active' : '' }}"  aria-haspopup="true">
											<a  href="dashboard" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
											Home
											</span>
											</a>
										</li>
										<li class="m-menu__item{{ Request::is('startups') ? ' m-menu__item--active' : '' }}"  aria-haspopup="true">
											<a  href="startups" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
											Startups
											</span>
											</a>
										</li>
										<li class="m-menu__item{{ Request::is('profile') ? ' m-menu__item--active' : '' }}"  aria-haspopup="true">
											<a  href="profile" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
											User Profile
											</span>
											</a>
										</li>
										
										<li class="m-menu__item{{ Request::is('payment') ? ' m-menu__item--active' : '' }}"  aria-haspopup="true">
											<a  href="payment" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
											Payment
											</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch" data-search-type="default">
								<form class="m-header-search__form">
									<div class="m-header-search__wrapper">
										<span class="m-header-search__icon-search" id="m_quicksearch_search">
										<i class="la la-search"></i>
										</span>
										<span class="m-header-search__input-wrapper">
										<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
										</span>
										<span class="m-header-search__icon-close" id="m_quicksearch_close">
										<i class="la la-remove"></i>
										</span>
										<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
										<i class="la la-remove"></i>
										</span>
									</div>
								</form>
								<div class="m-dropdown__wrapper">
									<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__body">
											<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
												<div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</header>
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
		<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
		<div class="m-grid__item m-grid__item--fluid m-wrapper">						
		<div class="m-content">
		@yield('content')
		</div>
		</div>
		</div>
		</div>
		<footer class="m-grid__item m-footer ">
		<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
		<div class="m-footer__wrapper">
		<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
		<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
		<span class="m-footer__copyright">
		2017 &copy; 
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
		</div>
		
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Report Bug" data-placement="left">
				<a href="#">
				<i class="la la-life-ring"></i>
				</a>
			</li>
		</ul>
		<script src="Icamp18/assets_dash/vendors/vendors.bundle.js" type="text/javascript"></script>
		<script src="Icamp18/assets_dash/js/scripts.bundle.js" type="text/javascript"></script>
		<script src="Icamp18/assets_dash/js/scripts.js" type="text/javascript"></script>
	</body>
</html>