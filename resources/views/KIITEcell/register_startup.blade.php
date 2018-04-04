@extends('KIITEcell.layouts.main')

@section('title', 'Register Your Startup - Ecell | KIIT University')
@section('description', '')

@section('keywords', '')	

@section('content')

		<div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Register your Startup</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>KIIT Startups - in collaboration with e-cell</h1>
						</div>
					</div>
				</div>
			</section>


			<div class="container">
				<form id="register_startup" class="form-horizontal form-bordered" action="javascript:" onsubmit="return doNothing()" method="POST">
					<h2> Basic Details </h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="StartupName">Startup Name*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="StartupName" name="StartupName" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Industry">Startup Sector*</label>
											<div class="col-md-6">
												<select class="form-control mb-md" id="Industry" name="Industry" required>
													<option>Information Technology</option>
													<option>E-Commerce</option>
													<option>Enterprises</option>
													<option>Media</option>
													<option>Food</option>
													<option>Finance</option>
													<option>Health Care</option>
													<option>Education</option>
													<option>Health and Wellness</option>
													<option>Platforms</option>
													<option>Retail</option>
													<option>Life Sciences</option>
													<option>Fashion</option>
													<option>Design</option>
													<option>Realk Estate</option>
													<option>Ideation</option>
													<option>Travel & Tourism</option>
													<option>Logistics</option>

												</select>												
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Website">Website*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="Website" name="Website" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="CurrentStatus">Current Status*</label>
											<div class="col-md-6">
												<select class="form-control mb-md" id="CurrentStatus" name="CurrentStatus" required>
													<option>Ideation</option>
													<option>Intial Prototype</option>
													<option>Registered Startup</option>
												</select>											
											</div>
										</div>
										<h2> Contact Details </h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Address">Address*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="Address" name="Address" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Email">Email*</label>
											<div class="col-md-6">												
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="Email" id="Email" required>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="MobileNo">Mobile No*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="MobileNo" name="MobileNo" required>
											</div>
										</div>
										<h2> Social Links </h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Facebook">Facebook</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="Facebook" name="Facebook">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Twitter">Twitter</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="Twitter" name="Twitter">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Instagram">Instagram</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="Instagram" name="Instagram">
											</div>
										</div>
										<h2>Founder's Info</h2>
										<div class="form-group">
											<label class="col-md-3 control-label" for="FoundersName">Founder's Name*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="FoundersName" name="FoundersName" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="College">College*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="College" name="College" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="Branch">Branch*</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="Branch" name="Branch" required>
											</div>
										</div>

										<div class="row">
									<div class="col-md-12">
										<input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									<img id="loading" style="display:none;" src=/KIITEcell/assets//images/loading.gif>
								</div>
									
								</div>

						<div class="row">
							<hr class="tall">
						</div>
</form>




	</div>
</div>

		

				@endsection	

					