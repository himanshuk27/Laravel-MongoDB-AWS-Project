@extends('Icamp18.layouts.dashboard')

@section('title', 'KIIT E-Summit\'18 | Dashboard')

@section('css')

<link href="/Esummit18/assets_dash/css/custom.css" rel="stylesheet" type="text/css" />

@end section




@section('content')


				<!--begin:: Widgets/Profit Share-->
<div class="m-widget14">


	
	<div class="row ">
		<div class="col-md-12">
			<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 100px">		       	
				<i class="la la-exclamation" style="color:red;font-size: 100px"></i>	
				<p class="m-widget14__stat m--font-danger">Payment Not Complete. </p>					
			</div>			
		</div>	
		<br>
		<h5>Calm Down, sometimes your payment may take upto 20 mins to process. You will recieve a confirmation email once done.</h5>
</div>
<div class="row">
	&nbsp;
</div>
<div class="row">
	<h4>Transaction Status: {{$response->status}}, {{$response->payment->status}}</h4>
</div>
<div class="row">	
	<h4>Order Id: {{$trans->o_id}}</h4>
</div>	
<div class="row">
	<h4>Transaction Id: {{$trans->t_id}}</h4>
	</div>
	
<div class="row">
	<h4>Instamojo Order Id: {{$response->payment->payment_id}}</h4>
</div>
		
<div class="row">
	<h4>Instamojo Request Id: {{$response->id}}</h4>
</div>


</div>


</div>
@endsection