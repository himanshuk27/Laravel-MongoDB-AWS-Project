@extends('Icamp18.layouts.dashboard')

@section('title', 'Access Restricted | Icamp \'18 Dashboard')

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
				<p class="m-widget14__stat m--font-danger">Payment Pending</p>					
			</div>
			<br>
			<center>
			<h4>List of companies is visible only after payment.</h4></center>			
		</div>	
</div>


</div>


</div>
@endsection