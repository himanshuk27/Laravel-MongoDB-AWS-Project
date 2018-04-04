@extends('Icamp18.email_layouts.email_parent')

@section('email_content')

<div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <p class="hero">Payment Confirmed!</p>
                                                                                          
                                                        <p class="hero">Greetings from Internship Camp '18</p>

                                                        <p>It is with great pleasure that we write to invite you to the Internship Camp '18 startup recruitment drive. <br>
                                                        <strong>Your Icamp id is : {{$data['ic_id']}}</strong><br>
                                                        Bootcamp Date : 22nd March <br>
                                                        Internship Camp Date : 23rd, 24th and 25th March <br>
                                                        Venue: You will get notified soon:) <br>
                                                       </p>

                                                       <p>
                                                         You are requested to be present at the Bootcamp venue (when announced) on the given data and time as we will be discussing crucial information related to Internship Camp '18.
                                                         Welcome aboard to this journey full of surprises.

                                                       </p>

                                                        <p>
                                                        Do let us know for any queries regarding the Icamp as our team will be there for you at any time at pcr@ecell.org.in or call us at +91 9348012872.
                                                        </p>
                                                        
                                                        <p>If you don’t know why you got this email, please 
                                                        	<a href="https://ecell.org.in/contact" target="_blank">tell us</a> straight away so we can
                                                          fix this for you.</p>


@endsection                                                         