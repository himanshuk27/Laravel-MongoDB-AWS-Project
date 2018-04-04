@extends('KIITEcell.layouts.email')

@section('email_content')

<div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <p>Hey there!</p>
                                                        <p class="hero">Thank you for registering in Makovation.</p>
                                                        <!-- <p>Your Team ID:&nbsp;<strong>{{$data['TeamID']}}</strong> </p> -->
                                                        <p>
                                                        	We will be starting with the event tomorrow by 9 am.So,all the participants are requested to join us in the opening ceremony.<br>

                                                        	Venue: Conference Hall 4,Campus 6 <br>
                                                        	Reporting Time: 8:45 AM <br>
                                                        	Date:24.02.2018
                                                        </p>
                                                        <p>
                                                        	Note:
                                                        	Teams who haven't submitted their abstracts can submit it on spot during the event.
                                                        </p>
                                                        <p>If you don’t know why you got this email, please 
                                                        	<a href="https://ecell.org.in/makovation" target="_blank">tell us</a> straight away so we can
                                                          fix this for you.</p>


@endsection                                                         