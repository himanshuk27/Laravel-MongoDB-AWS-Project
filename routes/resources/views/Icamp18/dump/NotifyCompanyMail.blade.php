@extends('Icamp18.layouts.email')

@section('email_content')

<div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <p>Hello {{$data["name"]}}!</p>
                                                        
                                                        <p class="hero">Greetings from KIIT Entrepreneurship Cell (aka KIIT E-Cell)!.</p>

<p>Thank you for registering with Internship Camp 2018. 
    We will be emailing you all the details for the further procedure of Internship Camp shortly.
</p>
<br>

<p>For any further queries, feel free to write back to us or call us on (+91)9078803016.
 We will be emailing you the procedure of ICamp 2018 shortly.
 Website: https://interncamp.ecell.org.in/ 
 </p>
                                                        


@endsection                                                         