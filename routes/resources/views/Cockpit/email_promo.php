@extends('Cockpit.layouts.dashboard')

@section('title', 'Cockpit- KIIT Ecell')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Horizontal Form Sections
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--label-align-right">
				<div class="m-portlet__body">	
					<div class="m-form__section m-form__section--first">		
						<div class="m-form__heading">
							<h3 class="m-form__heading-title">Customer Info:</h3>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Full Name:</label>
							<div class="col-lg-6">
								<input type="email" class="form-control m-input" placeholder="Enter full name">
								<span class="m-form__help">Please enter your full name</span>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Email address:</label>
							<div class="col-lg-6">
								<input type="email" class="form-control m-input" placeholder="Enter email">
								<span class="m-form__help">We'll never share your email with anyone else</span>
							</div>
						</div>						
						<div class="m-form__group form-group row">
							<label class="col-lg-2 col-form-label">Communication:</label>
							<div class="col-lg-6">
								<div class="m-checkbox-list">
									<label class="m-checkbox">
			                           	<input type="checkbox"> Email 
			                            <span></span>
			                        </label>
			                        <label class="m-checkbox">
			                           	<input type="checkbox"> SMS 
			                            <span></span>
			                        </label>
			                        <label class="m-checkbox">
			                           	<input type="checkbox"> Phone 
			                            <span></span>
			                        </label>
			                    </div>
		                    </div>
		                </div>
		            </div>

		            <div class="m-form__seperator m-form__seperator--dashed"></div>

		            <div class="m-form__section m-form__section--last">
		            	<div class="m-form__heading">
							<h3 class="m-form__heading-title">Payment Info:</h3>
						</div>
						<div class="m-form__group form-group row">
							<label class="col-lg-2 col-form-label">Payment Method:</label>
							<div class="col-lg-6">
								<div class="m-radio-list">
									<label class="m-radio">
			                           	<input type="radio" name="payment_methid_1"> Credit Card 
			                            <span></span>
			                        </label>
			                        <label class="m-radio">
			                           	<input type="radio" name="payment_methid_1"> Bitcoin
			                            <span></span>
			                        </label>
			                        <label class="m-radio">
			                           	<input type="radio" name="payment_methid_1"> Cash
			                            <span></span>
			                        </label>
			                    </div>
			                    <span class="m-form__help">Please select payment method</span>
		                    </div>
		                </div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Amount:</label>
							<div class="col-lg-6">
								<input type="email" class="form-control m-input" placeholder="Enter full name">
								<span class="m-form__help">Please enter payment amount</span>
							</div>
						</div>
					</div>
	            </div>
	            <div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-6">
								<button type="reset" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->

	</div></div>

@endsection		