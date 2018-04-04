@extends('Icamp18.layouts.dashboard')

@section('title', 'Payment - Internship Camp \'18')

@section('css')

<link href="/Esummit18/assets_dash/css/custom.css" rel="stylesheet" type="text/css" />

@end section




@section('content')

@if(isset($data2) || !empty($data2))
				<!--begin:: Widgets/Profit Share-->
<div class="m-widget14">


	
	<div class="row ">
		<div class="col-md-12">
			<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 100px">		       	
				<img src="/Icamp18/assets_dash/img/credit-card.png" style="width: 7%;">	
				<p class="m-widget14__stat m--font-success">Payment Portal</p>					
			</div>			
		</div>	
</div>

<div class="row">
	<h3>Previous Transaction</h3>
</div>
<div class="row">
	&nbsp;
</div>
<div class="row">
	<h4>Transaction Status: {{$data->payment? 'true' : 'false'}}</h4>
</div>
<div class="row">	
	<h4>Amount: {{$data->payment_amount or ''}}</h4>
</div>
</div>
@endif
@if($data->payment == true)
<h2>Payment Successful</h2>
@else

<!--begin::Fluid Pricing Table-->
<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon">
					<i class="la la-leaf"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Payment Portal
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="m-pricing-table-1">
			<div class="m-pricing-table-1__items row">
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-brand"><img style="width: 80%;" src="/Esummit18/assets_dash/img/payment1.png"> </span>
					</div>
					<span class="m-pricing-table-1__price">Individual</span> 				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 300</h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Other than KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 400</h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Esummit '18 Participant: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 150</h2>			 
					<div class="m-pricing-table-1__btn">
						<button id="but_pay_single" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>
					
				
			</div>
			<span class="m-section__sub">
				* All prices are for per person.
			</span>			
			<br>
			<span class="m-section__sub">
				* Rs. 10 Transaction charge
			</span>
			<br>
			<span class="m-section__sub">
				* People who paid for KIIT Esummit '18 before 5th march 2018 are eligible for early bird discounts.
			</span>			
		</div>
	</div>
</div>
@endif	

@endsection

@section('scripts')
<script type="text/javascript" src="/Icamp18/assets_dash/js/payment.js"></script>
@endsection