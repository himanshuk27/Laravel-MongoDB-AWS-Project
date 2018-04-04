<?php

$KIITEcell_Routes = function() {
	Route::post("testmakovation","KIITEcell\MainController@registerMakovation");
	Route::get('/', 'KIITEcell\PageController@showLanding');
	Route::post('php/newsletter-subscribe.php', 'KIITEcell\MainController@newsletter_reg');

	Route::get('logo', 'KIITEcell\MainController@getLogo');

	Route::get('about-us', function () {
		return view('KIITEcell.about-us');
	});
	Route::get('contact-us', function () {
		return view('KIITEcell.contact-us');
	});
	Route::get('eschool', function () {
		return view('KIITEcell.eschool');
	});
	Route::get('gallery', function () {
		return view('KIITEcell.gallery');
	});
	Route::get('icamp', function () {
		return view('KIITEcell.icamp');
	});
	Route::get('initiatives', function () {
		return view('KIITEcell.initiatives');
	});
	Route::get('register/student', function () {
		return view('KIITEcell.joinEcell');
	});
	Route::get('noticeboard', function () {
		return view('KIITEcell.noticeboard');
	});
	Route::get('partners', function () {
		return view('KIITEcell.partners');
	});
	Route::get('register_startup', function () {
		return view('KIITEcell.register_startup');
	});
	Route::get('startups', function () {
		return view('KIITEcell.startups');
	});
	Route::get('startupyatra', function () {
		return view('KIITEcell.startupyatra');
	});
    Route::post("startupyatraRegister","KIITEcell\MainController@startupyatraRegister");
	
	Route::get('tbi-initiatives', function () {
		return view('KIITEcell.tbi-initiatives');
	});
	Route::get('makovation', function () {
		return view('KIITEcell.makovation');
	});

	Route::get('makovationNew', function () {
		return view('KIITEcell.makovationNew');
	}); 
 
	Route::post('register/student', 'KIITEcell\MainController@newbieReg');

	Route::get('mkv', function () {
		return redirect('/makovation');
	});

	Route::get('join', function () {
		return redirect('/register/student');
	});

	Route::get('mail','KIITEcell\MainController@sendMail');

	Route::get('makovationMail','KIITEcell\MainController@makovationMail');



	
};

$Esummit18_Routes = function() {

	Route::get('mail/day1/buisness/1', 'Cockpit\SweepController@getFile');
	Route::get('mail/day1/buisness/2', 'Cockpit\SweepController@getFile2');
	Route::get('mail/day2/buisness', 'Cockpit\SweepController@getFile4');
	Route::get('mail/day3/buisness', 'Cockpit\SweepController@getFile5');

	Route::get('mail/day1/tech', 'Cockpit\SweepController@getFile4');

	Route::get('logo', 'Esummit18\MainController@getLogo1');
	Route::get('logo_small', 'Esummit18\MainController@getLogo2');
	Route::get('logo_new', 'Esummit18\MainController@getLogo3');
	Route::get('panda', 'Esummit18\MainController@getPanda');
	Route::get('prospectus', 'Esummit18\MainController@getPanda');

 //   Route::post('apply/campus', 'Esummit18\MainController@enrollCampus');	

	Route::get('/', 'Esummit18\PageController@showLanding')->name('landing');
//	Route::get('profile', 'Esummit18\PageController@showProfile');
//	Route::get('email/verify/{token}', 'Esummit18\AuthController@email_verify');

//	Route::post('login/newReg', 'Esummit18\AuthController@register_player');	
//	Route::get('login', 'Esummit18\PageController@showLogin')->name('es_login');
//	Route::post('login/userAuth', 'Esummit18\AuthController@authenticate_player');
///	Route::get('logout', 'Esummit18\AuthController@logout');	

//	Route::get('dashboard', 'Esummit18\PageController@showDashboard');
//	Route::post('profile/update', 'Esummit18\MainController@updateProfile');
	Route::get("sponsors","Esummit18\PageController@showSponsors");
	Route::get("speakers","Esummit18\PageController@showSpeakers");

//	Route::post('feedback/bug-report', 'Esummit18\MainController@submitBug');
//	Route::get('account/password/new/{hashEmail}&{token}', 'Esummit18\PageController@showForgot');
	
//	Route::post('account/password/reset', 'Esummit18\AuthController@send_reset_mail');
//	Route::post('tracks/enroll', 'Esummit18\MainController@enrollTrack');

//	Route::get('campuspreneur', 'Esummit18\PageController@showCampus');

//Route::post('account/password/setNew', 'Esummit18\AuthController@set_new_pass');

//	Route::get('login/redirect/{data}', 'Esummit18\PageController@showLoginCustom');

//	Route::post('newsletter/register', 'Esummit18\MainController@newsletter_reg');

	Route::get("faq","Esummit18\PageController@showFaq");

//	Route::post('payment/start', 'Esummit18\PaymentController@payment');

	//Route::get("sweep","Esummit18\PaymentController@sweep");

//	Route::get('payment', 'Esummit18\PageController@showPayment');

//	Route::post('payment/startupPlanet', 'Esummit18\PaymentController@payStartup');

//	Route::post('payment/insta/webhook', 'Esummit18\PaymentController@paymentWebhook');
	//Route::get('payment/check', 'Esummit18\PaymentController@showPayCheck');
//	Route::get('payment/start', 'Esummit18\PaymentController@paymentinit');

	
//	Route::post('payment/bulk/5/check', 'Esummit18\PaymentController@pay_5_init');

//	Route::get('payment/bulk/5/start', 'Esummit18\PaymentController@pay_5_start');

/*
	Route::post('payment/bulk/10/check', 'Esummit18\PaymentController@pay_10_init');

	Route::get('payment/bulk/10/start', 'Esummit18\PaymentController@pay_10_start');

	Route::post('payment/bulk/2/check', 'Esummit18\PaymentController@pay_2_init');

	Route::get('payment/bulk/2/start', 'Esummit18\PaymentController@pay_2_start');

	Route::post('payment/icamp/check', 'Esummit18\PaymentController@paymentIcamp');

	Route::get('payment/icamp/start', 'Esummit18\PaymentController@icampPackInit');

	Route::post('payment/mkv/check', 'Esummit18\PaymentController@paymentMkv');

	Route::get('payment/mkv/start', 'Esummit18\PaymentController@mkvPackInit');

	Route::get('send', 'Esummit18\MainController@sendPaymentEmail');

	Route::get('payment/gen_invoice', 'Esummit18\PaymentController@genInvoice');

	Route::get('leaderboard', 'Esummit18\PageController@showLeaderBoard');

	Route::get('accoMail/{token}', 'Esummit18\MainController@setAcco');

	Route::get('sendAccoMail', 'Esummit18\MainController@sendApplyAccoMail');
	Route::get('payment/transactions', 'Esummit18\PaymentController@transList');

	Route::get('sendAccoMail', 'Esummit18\MainController@eventProspectus');

	Route::get('promotionMail', 'Esummit18\MainController@sendPromotionMail');

	Route::get('eventProspectus', 'Esummit18\MainController@eventProspectus');

	Route::get('paymentConfirmationMail', 'Esummit18\MainController@sendPaymentConfirmationMail');
	

	Route::get("test1000",'Esummit18\MainController@showStats');

	Route::get("testnew",function(){
		return view("Esummit18.landing_new");
	});

	Route::get("techtrack",function(){
		return view("Esummit18.TechTrack");
	});

	Route::get("innovationtrack",function(){
		return view("Esummit18.InnovationTrack");
	});
    
    Route::get("businesstrack",function(){
		return view("Esummit18.BusinessTrack");
	});

	Route::get("startuptrack",function(){
		return view("Esummit18.StartupTrack");
	});

	 Route::get("testakshat",function(){
		return view("Esummit18.landing_akshat");
	});

	  Route::get("testpay99",function(){
		return view("Esummit18.paytemp");
	});

	  // Route::get("payConf",function(){
	  // 	return view("Esummit18.MidnightMail");
	  // });

	  */
		
};

$Icamp18_Routes = function() {

	Route::get('logo', 'Icamp18\MainController@getLogo');
	Route::get('mail/attc1', 'Icamp18\MainController@getfile1');

	Route::post('login/newReg', 'Icamp18\LoginController@register_player');
	Route::post('login/auth', 'Icamp18\LoginController@authenticate_player');
	Route::post('login/auth/es', 'Icamp18\LoginController@authenticate_player_es');
	Route::post('login/auth/company', 'Icamp18\CompanyDashController@authenticate_comp');
	Route::get('logout', 'Icamp18\LoginController@logout');
	Route::get('logout/comp', 'Icamp18\LoginController@logoutComp');

	Route::get('account/password/new/{hashEmail}&{token}', 'Icamp18\LoginController@showForgot');	
	Route::post('account/password/reset', 'Icamp18\LoginController@send_reset_mail');
	Route::post('account/password/setNew', 'Icamp18\LoginController@set_new_pass');

	Route::get('email/verify/{token}', 'Icamp18\MainController@email_verify');

	Route::get('profile', 'Icamp18\PageController@showProfile');
	Route::get('dashboard', 'Icamp18\PageController@showCompany');
	Route::post('feedback/bug-report', 'Icamp18\MainController@submitBug');
	
Route::get('test2', 'Icamp18\PageController@showtest2Company');	
//Route::get('test2', function () {
//		return view('Icamp18.test2');
//	});
	Route::get('login', function () {
		return view('Icamp18.login');
	});

	Route::get('login/company', function () {
		return view('Icamp18.companyLogin');
	});

	Route::get('companyRegister', function () {
		return view('Icamp18.dump.companyReg');
	});

	//Route::post("companyRegister","Icamp18\MainController@companyRegister");

	Route::get('/', function () {
		return view('Icamp18.landing');
	});

	Route::get('test1', function () {
		return view('Icamp18.test1');
	});

	Route::get('landing', function () {
		return view('Icamp18.landing');
	});
Route::get('companies', function () {
		return view('Icamp18.companies');
	});

	
	Route::post('profile/update', 'Icamp18\ProfileController@update_profile');

	Route::get('startups/selected', 'Icamp18\PageController@showCompanyApplied');
	Route::get('startups/bookmarks', 'Icamp18\PageController@showCompanySaved');
	Route::post('fetchComp/{ic_id}', 'Icamp18\CompanyListController@fetchComp');
	Route::get('payment', 'Icamp18\PageController@showPayment');

	Route::post('profile/resume/upload', 'Icamp18\ProfileController@uploadResume');
	Route::post('startup/remove/{ic_id}', 'Icamp18\CompanyListController@remStartup');
	Route::get('profile/resume', 'Icamp18\PageController@showResumeUpload');
	Route::get('profile/resume/download', 'Icamp18\ProfileController@getResume');
	Route::post('startup/apply/{ic_id}', 'Icamp18\CompanyListController@applyStartup');
	Route::post('startup/addBookmark/{ic_id}', 'Icamp18\CompanyListController@saveStartup');

	Route::post("payment/check","Icamp18\PaymentController@payCheck");
	Route::get("payment/init","Icamp18\PaymentController@payInit");
	Route::get("payment/finalize","Icamp18\PaymentController@payFinalize");
	Route::post("payment/webhook","Icamp18\PaymentController@instaWebhook");
	Route::post('aiesec/apply', 'Icamp18\MainController@applyAiesec');
	Route::get('aiesec', 'Icamp18\PageController@showAiesec');

	Route::get("company/dashboard","Icamp18\CompanyDashController@showDash");
	Route::get("companylist","Icamp18\FetchData@fetch");
	Route::get("companies","Icamp18\FetchData@fetch");

	Route::get("xyz","Icamp18\MainController@notify");

    Route::get('test3', "Esummit18\MainController@showImageName");

    Route::get('xyz/{id}', 'Esummit18\MainController@downloadC');
    Route::get('xyz1/{id}', 'Esummit18\MainController@downloadCAR');
    Route::get('xyz2/{id}', 'Esummit18\MainController@downloadCBL');
};


$Cockpit_Routes = function() {

	Route::get('login', function(){
		return view('Cockpit.login');
	});
	Route::get('logo', 'KIITEcell\MainController@getLogo');

	Route::get('testxyz', 'Cockpit\EmailController@testxyz');

	Route::post('login/userAuth', 'Cockpit\AuthController@login_init');
	Route::get('logout', 'Cockpit\AuthController@logout');
	Route::get('/', 'Cockpit\PageController@showCompCount');
	Route::get('/email999', 'Cockpit\PageController@showEmail');
	Route::post('marketing/email/preview', 'Cockpit\EmailController@previewEmail');
	Route::get('marketing/email/preview', 'Cockpit\EmailController@previewEmail');
	Route::post('marketing/emailPromoInit', 'Cockpit\EmailController@emailPromoInit');
	Route::get('reg999', 'Cockpit\AuthController@reg');

	//Route::get('searchregistration', 'Cockpit\MainController@searchReg');
	Route::post('searchregistration', 'Cockpit\MainController@fetchSearchResult');

	Route::get('searchregistration', 'Cockpit\PageController@showCashPay');

	Route::get('generateid', 'Cockpit\PageController@showGenerateID');

	Route::post('generateid', 'Cockpit\PageController@fetchGenerateID');
	
	Route::get('cashpay/ic/pay', 'Cockpit\MainController@cashPayIcInit');
//	Route::get('cashpay/es/pay', 'Cockpit\MainController@cashPayEsInit');
//
	Route::get('sweepMain99', 'Cockpit\SweepController@sweep');

//	Route::post('finalReg', 'Cockpit\PageController@genID');
	Route::get('icampProf', 'Cockpit\PageController@showicampProf');

};



Route::group(array('domain' => 'interncamp.ecell.org.in'), $Icamp18_Routes);
Route::group(array('domain' => 'ecell.org.in'), $KIITEcell_Routes);
Route::group(array('domain' => '2018.esummit.org.in'), $Esummit18_Routes);
Route::group(array('domain' => 'cockpit.ecell.org.in'), $Cockpit_Routes);

