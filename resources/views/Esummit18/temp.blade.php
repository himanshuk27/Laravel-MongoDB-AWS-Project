@extends('Esummit18.layouts.dashboard')

@section('title', 'KIIT E-Summit\'18 | Dashboard')

@section('css')
<link href="/Esummit18/assets_dash/css/payment.css" rel="stylesheet" type="text/css" />
<link href="/Esummit18/assets_dash/css/custom.css" rel="stylesheet" type="text/css" />

@end section




@section('content')


<!--begin:: Widgets/Profit Share-->
<div class="m-widget14">	
	<div class="row ">
		<div class="col-md-12">
			<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 100px">
               <i class="la la-check-circle-o" style="color:green;font-size: 100px"></i>
                <p class="m-widget14__stat m--font-success">Your Payment was Successful</p>
               <br>
               <center>
                <a href="/payment/gen_invoice?payment_id={{Request::input('payment_id')}}&payment_request_id={{Request::input('payment_request_id')}}"><button type="button" class="btn m-btn m-btn--gradient-from-success m-btn--gradient-to-accent">Download Invoice</button></a>
                </center>            
           </div>
       </div>	
   </div>
   <div class="row ">
    &nbsp;
</div>
</div>
<h2>test- {{var_dump(Request::is('payment/temp123'))}}</h2>
@include('Esummit18.invoice')

@endsection




