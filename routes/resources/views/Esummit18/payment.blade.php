@extends('Esummit18.layouts.dashboard')

@section('title', 'KIIT E-Summit\'18 | Dashboard')

@section('css')

<style type="text/css">
	.imgwrapper {
		width: 100%;
	}
</style>

@end section

@section('content')

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
					Payment Portal &nbsp;&nbsp;&nbsp; <span color="red"></span>
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="m-pricing-table-1">
			<div class="m-pricing-table-1__items row">
				<h1>Payment for ESummit'18 has been closed</h1>
				<!-- <div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-brand"><img style="width: 80%;" src="/Esummit18/assets_dash/img/payment1.png"> </span>
					</div>
					<span class="m-pricing-table-1__price">Individual</span> 				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 849&nbsp;<del>1149</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Other than KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 1249&nbsp;<del>1449</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For School Students: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 799&nbsp;<del>999</del></h2>			 
					<div class="m-pricing-table-1__btn">
						<button id="but_pay_single" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-accent"><img class="imgwrapper" src="/Esummit18/assets_dash/img/payment2.png"></span>
					</div>
					<span class="m-pricing-table-1__price">Contingent of 2</span> 				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 799&nbsp;<del>1099</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Other than KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 1199&nbsp;<del>1399</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For School Students: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 749&nbsp;<del>949</del></h2>			 
					<div class="m-pricing-table-1__btn">
						<button type="button" id="but_pay_2" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-accent"><img class="imgwrapper" src="/Esummit18/assets_dash/img/payment5.png"></span>
					</div>
					<span class="m-pricing-table-1__price">Contingent of 5</span> 				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 799&nbsp;<del>1099</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Other than KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 1199&nbsp;<del>1399</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For School Students: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 749&nbsp;<del>949</del></h2>			 
					<div class="m-pricing-table-1__btn">
						<button type="button" id="but_pay_5" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-focus"><img class="imgwrapper" src="/Esummit18/assets_dash/img/payment10.png"></span>
					</div>
					<span class="m-pricing-table-1__price">Contingent of 10</span> 				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 749&nbsp;<del>949</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Other than KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 1149&nbsp;<del>1349</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For School Students: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 700&nbsp;<del>850</del></h2>			 
					<div class="m-pricing-table-1__btn">
						<button type="button" id="but_pay_10" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>
				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-primary"><img style="width: 70%;" src="/Esummit18/assets_dash/img/paymentStartup.png"></span>
					</div>
					<span class="m-pricing-table-1__price">Startup Planet</span> 
					<br>				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For Startup: FREE</h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">&nbsp;</h2>
					<br>		 
					<div class="m-pricing-table-1__btn">
						<button id="but_pay_startup" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>	

				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-primary"><img style="width: 70%;" src="/Icamp18/assets/img/logo_new.png"></span>
					</div>
					<span class="m-pricing-table-1__price">Internship Camp Combo Pack</span> 
					<br>				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 999&nbsp;<del>1499</del></h2>
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">Other than KIIT: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 1499&nbsp;<del>1999</del></h2>
					<br>		 
					<div class="m-pricing-table-1__btn">
						<button id="but_pay_icamp" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>

				<div class="m-pricing-table-1__item col-lg-3">
					<div class="m-pricing-table-1__visual">
						<div class="m-pricing-table-1__hexagon1"></div>
						<div class="m-pricing-table-1__hexagon2"></div>
						<span class="m-pricing-table-1__icon m--font-primary"><img style="width: 70%;" src="/KIITEcell/assets/images/makovation.png"></span>
					</div>
					<span class="m-pricing-table-1__price">Makovation Only</span> 
					<br>				 
					<h2 style="color: black;" class="m-pricing-table-1__subtitle">For Innovation Track: <i style="font-size: 0.8em;" class="fa fa-inr"></i> 359&nbsp;</h2>
					<br>		 
					<div class="m-pricing-table-1__btn">
						<button id="but_pay_mkv" type="button" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">Make Payment</button>
					</div>
				</div>				
				
			</div>
			<span class="m-section__sub">
				* All prices are for per person.
			</span>
			<br>
			<span style="color: red;" class="m-section__sub">
				* If paying for Internship Camp Combo Pack, no fees will be charged during Internship Camp.
			</span>
			<br>
			<span style="color: blue;" class="m-section__sub">
				* If paying for Makovation, one can't attend any other track.
			</span>
		</div>
	</div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="modal_pay_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Bulk Payment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form_pay_bulk_2" action="payment/bulk/2/check" class="m-form m-form--fit">
					<div class="form-group m-form__group" id="x2email1">
						<label for="humanEmail_1">Friend's Email *</label>
						<input type="email" class="form-control m-input" name="humanEmail_1" required>
					</div>					
					<div id="x2cart">
					</div>				
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="but_pay_2_start" class="btn btn-primary pull-right">Submit</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>

		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_pay_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Bulk Payment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form_pay_bulk_5" action="payment/bulk/5/check" class="m-form m-form--fit">
					<div class="form-group m-form__group" id="email1">
						<label for="humanEmail_1">Email Id 1 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_1" required>
					</div>
					<div class="form-group m-form__group" id="email2">
						<label for="humanEmail_2">Email Id 2 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_2" required>
					</div>
					<div class="form-group m-form__group" id="email3">
						<label for="humanEmail_3">Email Id 3 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_3" required>
					</div>
					<div class="form-group m-form__group" id="email4">
						<label for="humanEmail_4">Email Id 4 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_4" required>
					</div>	
					<div id="cart">
					</div>				
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="but_pay_5_start" class="btn btn-primary pull-right">Submit</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>

		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_pay_10" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Bulk Payment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="form_pay_bulk_5" action="payment/bulk/10/check" class="m-form m-form--fit">
					<div class="form-group m-form__group row">
						<div class="col-lg-6 m-form__group-sub" id="xemail1">
						<label for="humanEmail_1">Email Id 1 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_1" required>
					</div>
				
					<div class="col-lg-6 m-form__group-sub" id="xemail2">
						<label for="humanEmail_2">Email Id 2 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_2" required>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-6 m-form__group-sub" id="xemail3">
						<label for="humanEmail_3">Email Id 3 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_3" required>
					</div>
				
				
					<div class="col-lg-6 m-form__group-sub" id="xemail4">
						<label for="humanEmail_4">Email Id 4 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_4" required>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-6 m-form__group-sub" id="xemail5">
						<label for="humanEmail_5">Email Id 5 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_5" required>
					</div>
					<div class="col-lg-6 m-form__group-sub" id="xemail6">
						<label for="humanEmail_6">Email Id 6 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_6" required>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-6 m-form__group-sub" id="xemail7">
						<label for="humanEmail_7">Email Id 7 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_7" required>
					</div>
					<div class="col-lg-6 m-form__group-sub" id="xemail8">
						<label for="humanEmail_8">Email Id 8 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_8" required>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<div class="col-lg-6 m-form__group-sub" id="xemail9">
						<label for="humanEmail_9">Email Id 9 *</label>
						<input type="email" class="form-control m-input" name="humanEmail_9" required>
					</div>
					</div>	
					<div id="xcart">
					</div>				
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="but_pay_10_start" class="btn btn-primary pull-right">Submit</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>

		</div>
	</div>
</div>

@endsection


@section('scripts')
<script src="/Esummit18/assets_dash/js/jquery.popupwindow.js"></script>

<script type="text/javascript">
	$('#but_pay_2').click(function(e) {
		$('#modal_pay_2').modal('show');
		});
	$('#but_pay_2_start').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = 'payment/bulk/2/check';
		var form = $(this).closest('form');
		var data = form.serialize();	

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
		$('#x2email1').children("span").remove();
		$('#x2cart').children("span").remove();

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);

			if( response.type=='success' ){		
			var sub_total = parseInt(response.cart_total) - 20;	
				$('#x2cart').append('<span class="m-section__sub">Total Registration Amount : ₹'+response.sub_total+'</span>');
				$('#x2cart').append('<br><span class="m-section__sub">Convenience Charge: ₹'+response.tax+'</span>'); 
				$('#x2cart').append('<br><span class="m-section__sub">Total Cart Amount : ₹'+response.cart_total+'</span>');
				btn.css("display","none");
				form.append('<a href="/payment/bulk/2/start"><button type="button" id="checkout_pay_2" class="btn btn-primary pull-right">Make Payment</button></a>');
			}

			else if(response.type == 'error')
				swal('Error', response.message, 'error');

			else{
				if (typeof response.email1 !== 'undefined')
					$('#x2email1').append('<span class="m--font-info">'+response.email1+'</span>');				
				if(typeof response.cart_total !== 'undefined'){
				$('#x2cart').append('<span class="m-section__sub">Total Registration Amount : ₹'+response.sub_total+'</span>');
				$('#x2cart').append('<br><span class="m-section__sub">Convenience Charge: ₹'+response.tax+'</span>'); 
				$('#x2cart').append('<br><span class="m-section__sub">Total Cart Amount : ₹'+response.cart_total+'</span>');
				}  

			}



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});
</script>

<script type="text/javascript">
	$('#but_pay_10').click(function(e) {
		$('#modal_pay_10').modal('show');
		});
	$('#but_pay_10_start').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = 'payment/bulk/10/check';
		var form = $(this).closest('form');
		var data = form.serialize();	

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
		$('#xemail1').children("span").remove();
		$('#xemail2').children("span").remove();
		$('#xemail3').children("span").remove();
		$('#xemail4').children("span").remove();
		$('#xemail5').children("span").remove();
		$('#xemail6').children("span").remove();
		$('#xemail7').children("span").remove();
		$('#xemail8').children("span").remove();
		$('#xemail9').children("span").remove();
		$('#xcart').children("span").remove();

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);

			if( response.type=='success' ){		
			var sub_total = parseInt(response.cart_total) - 20;	
				$('#xcart').append('<span class="m-section__sub">Total Registration Amount : ₹'+response.sub_total+'</span>');
				$('#xcart').append('<br><span class="m-section__sub">Convenience Charge: ₹'+response.tax+'</span>'); 
				$('#xcart').append('<br><span class="m-section__sub">Total Cart Amount : ₹'+response.cart_total+'</span>');
				btn.css("display","none");
				form.append('<a href="/payment/bulk/10/start"><button type="button" id="checkout_pay_10" class="btn btn-primary pull-right">Make Payment</button></a>');
			}

			else if(response.type == 'error')
				swal('Error', response.message, 'error');

			else{
				if (typeof response.email1 !== 'undefined')
					$('#xemail1').append('<span class="m--font-info">'+response.email1+'</span>');
				if (typeof response.email2 !== 'undefined')
					$('#xemail2').append('<span class="m--font-info">'+response.email2+'</span>');
				if (typeof response.email3 !== 'undefined')
					$('#xemail3').append('<span class="m--font-info">'+response.email3+'</span>');
				if (typeof response.email4 !== 'undefined')
					$('#xemail4').append('<span class="m--font-info">'+response.email4+'</span>'); 
				if (typeof response.email5 !== 'undefined')
					$('#xemail5').append('<span class="m--font-info">'+response.email5+'</span>'); 
				if (typeof response.email6 !== 'undefined')
					$('#xemail6').append('<span class="m--font-info">'+response.email6+'</span>'); 
				if (typeof response.email7 !== 'undefined')
					$('#xemail7').append('<span class="m--font-info">'+response.email7+'</span>'); 
				if (typeof response.email8 !== 'undefined')
					$('#xemail8').append('<span class="m--font-info">'+response.email8+'</span>'); 
				if (typeof response.email9 !== 'undefined')
					$('#xemail9').append('<span class="m--font-info">'+response.email9+'</span>'); 
				if(typeof response.cart_total !== 'undefined'){
					var sub_total = parseInt(response.cart_total) - 20;	
				$('#xcart').append('<span class="m-section__sub">Total Registration Amount : ₹'+response.sub_total+'</span>');
				$('#xcart').append('<br><span class="m-section__sub">Convenience Charge: ₹'+response.tax+'</span>'); 
				$('#xcart').append('<br><span class="m-section__sub">Total Cart Amount : ₹'+response.cart_total+'</span>');
				}  

			}



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});
</script>

<script type="text/javascript">	
	$('#but_pay_5').click(function(e) {
		e.preventDefault();
		$('#modal_pay_5').modal('show');
	});
	$('#but_pay_5_start').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = 'payment/bulk/5/check';
		var form = $(this).closest('form');
		var data = form.serialize();	

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
		$('#email1').children("span").remove();
		$('#email2').children("span").remove();
		$('#email3').children("span").remove();
		$('#email4').children("span").remove();
		$('#cart').children("span").remove();

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){				
				var sub_total = parseInt(response.cart_total) - 10;	
					$('#cart').append('<br><span class="m-section__sub">Total Registration Amount : ₹'+response.sub_total+'</span>'); 
					$('#cart').append('<br><span class="m-section__sub">Convenience Charge: ₹'+response.tax+'</span>');
					$('#cart').append('<br><span class="m-section__sub">Total Cart Amount : ₹'+response.cart_total+'</span>'); 
				btn.css("display","none");
				form.append('<a href="/payment/bulk/5/start"><button type="button" id="checkout_pay_5" class="btn btn-primary pull-right">Make Payment</button></a>');
			}

			else if(response.type == 'error')
				swal('Error', response.message, 'error');

			else{
				if (typeof response.email1 !== 'undefined')
					$('#email1').append('<span class="m--font-info">'+response.email1+'</span>');
				if (typeof response.email2 !== 'undefined')
					$('#email2').append('<span class="m--font-info">'+response.email2+'</span>');
				if (typeof response.email3 !== 'undefined')
					$('#email3').append('<span class="m--font-info">'+response.email3+'</span>');
				if (typeof response.email4 !== 'undefined')
					$('#email4').append('<span class="m--font-info">'+response.email4+'</span>'); 
				if(typeof response.cart_total !== 'undefined'){
					var sub_total = parseInt(response.cart_total) - 10;	
					$('#cart').append('<br><span class="m-section__sub">Total Registration Amount : ₹'+response.sub_total+'</span>'); 
					$('#cart').append('<br><span class="m-section__sub">Convenience Charge: ₹'+response.tax+'</span>'); 
					$('#cart').append('<br><span class="m-section__sub">Total Cart Amount : ₹'+response.cart_total+'</span>');  
				}

			}



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});


	$('#but_pay_single').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = '/payment/start';
		var data = { 
			'_token': '{{ csrf_token() }}'
		};

		

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				swal({
					title: 'Payment Confirmation',
					text: "Proceed to pay Rs "+response.cart_total,
					type: 'warning',
					showCancelButton: true
				}).then((result) => {
					if (result.value)
						window.location = '/payment/start'
				})
				
			}

			else
				swal('Error', response.message, 'error');



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});

	$('#but_pay_startup').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = '/payment/startupPlanet';
		var data = { 
			'_token': '{{ csrf_token() }}'
		};

		

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				swal('Awesome!', response.message, 'success');
				
			}

			else
				swal('Error', response.message, response.type);



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});


	$('#but_pay_icamp').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = 'payment/icamp/check';
		var data = { 
			'_token': '{{ csrf_token() }}'
		};

		

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				swal({
					title: 'Payment Confirmation',
					text: "Proceed to pay Rs "+response.cart_total,
					type: 'warning',
					showCancelButton: true
				}).then((result) => {
					if (result.value)
						window.location = 'payment/icamp/start'
				})
				
			}

			else
				swal('Error', response.message, response.type);



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});

	$('#but_pay_mkv').click(function(e) {
		e.preventDefault();
		var token = '_token'
		var btn = $(this);
		var action = 'payment/mkv/check';
		var data = { 
			'_token': '{{ csrf_token() }}'
		};

		

		btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

		$.ajax({
			url: action,
			type : 'POST',
			data : data,
			dataType    : 'json',
		}).done(function(response) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


			if( response.type=='success' ){
				swal({
					title: 'Payment Confirmation',
					text: "Proceed to pay Rs "+response.cart_total,
					type: 'warning',
					showCancelButton: true
				}).then((result) => {
					if (result.value)
						window.location = 'payment/mkv/start'
				})
				
			}

			else
				swal('Error', response.message, response.type);



		}).fail(function(response, status, xhr, $form) {
			btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
			swal('Critical Error', response, 'error');

		});
	});
</script>
@endsection

