@extends('Esummit18.layouts.email')

@section('email_content')

<div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
	<center><img style = "width: 400px; height: 234px;" src="https://esummit.org.in/Esummit18/assets_dash/img/pass_reset.png"></center>
	<p>Hi, {{ $data['humanName'] }}!</p>
	<p class="hero">Forgot Your Password?</p>
	
	<p>Thats okay, it happens! Click on the button below to reset your password.</p>
	<p>
		<a href="https://esummit.org.in/account/password/new/{{$data['humanEmail']}}&{{$data['pass_reset_token']}}" class="btn" mc:disable-tracking="">Reset Password</a>
	</p>
	<p>If you don’t know why you got this email, please ignore it.</p>


	@endsection                                                         