@extends('Icamp18.layouts.email')

@section('email_content')

<div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <p>Hey there!</p>
                                                        <p class="hero">It’s time to confirm your email address.</p>
                                                        <p>Have we got the right email address to reach you on? To confirm that you can access the Internship Camp'18 dashboard and finish the sign up process, just click the button below.</p>
                                                        <p>
                                                          <a href="{{ route( 'emailVerify', [ 'humanEmail'=>$data['email'],'accessToken'=>$data['token'] ] ) }}" class="btn" mc:disable-tracking="">Confirm my email address</a>
                                                        </p>
                                                        <p>If you don’t know why you got this email, please 
                                                        	<a href="https://esummit.org.in/contact" target="_blank">tell us</a> straight away so we can
                                                          fix this for you.</p>


@endsection                                                         