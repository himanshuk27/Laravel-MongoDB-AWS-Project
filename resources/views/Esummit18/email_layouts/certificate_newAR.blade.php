@extends('Esummit18.layouts.email')

@section('email_content')

<div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <p>Hey there!</p>
                                                        <p class="hero" style="color:#3498DB;">Greetings from KIIT Enterpreneurship Cell!</p>
                                                        <p>We hope the workshops that you attended in KIIT E-Summit 2018 from 8th-11th March were
                                                          of great help to you.
                                                        </p>
                                                        <p>Here with attached is your certificate for the AR VR Workshop.</p>
                                                        <p>
                                                          <a href="interncamp.ecell.org.in/xyz1/{{$data['id']}}" class="btn">Download</a>
                                                        </p>
                                                        <p>
                                                          Regards,<br>
                                                          Team KIIT E-Cell
                                                        </p>
                                                        <p>If you don’t know why you got this email, please 
                                                          <a href="https://esummit.org.in/contact" target="_blank">tell us</a> straight away so we can
                                                          fix this for you.</p>


@endsection                                                         