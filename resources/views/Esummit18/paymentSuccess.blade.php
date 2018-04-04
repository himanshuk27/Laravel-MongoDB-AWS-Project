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
		       <p class="m-widget14__stat m--font-success">Your Payment was Successful. </p>
				
				<i class="la la-check-circle-o" style="color:green;font-size: 100px"></i>
		
			</div>
		</div>
		
</div>


</div>

@if(Request::is('payment/check'))
@include('Esummit18.invoice')
@endif
@endsection