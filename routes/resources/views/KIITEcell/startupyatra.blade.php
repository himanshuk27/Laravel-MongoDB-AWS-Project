@extends('KIITEcell.layouts.main')

@section('title', 'Startup Yatra - Ecell | KIIT University')
@section('description', '')

@section('keywords', '')	

@section('content')
		
			
			<div role="main" class="main">

			<section>
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
							
							    <img src="/KIITEcell/assets/startup-yatra/startupyatra.jpg" alt="" style="height:350px;min-width:100%;margin:0px auto;border:3px solid black" class="img-responsive"><br>
							   
						
							</div>
							
						</div>
					</div>
				</section>
             </div>				

				<div class="container">
               
				<center><h2 class="heading-secondary"><strong>Startup India Yatra</strong>&nbsp;&nbsp;<span class="alternative-font">Odisha Edition</span></h2></center>	

					<div class="row">
						<div class="col-md-12">
							<p class="lead">The objective of Startup Yatra-Odisha,organised under Startup India initiative is to provide a platform for budding entrepreneurs of Odisha to realize their startup dream by getting incubated at excellent facilities and taking their idea to the next level.
							Organized under the StartupIndia initiative, Startup India Yatra is a series of events that will travel to small cities of India to search for entrepreneurial talent and help develop startup ecosystem in the state.The Odisha edition is travelling to<span class="inverted inverted-secondary"> 9 cities </span>with the grand finale at <span class="heading-primary"><strong>KIIT,Bhubaneswar.</strong></span></p><br>

							<center>

								<button class="btn btn-secondary" data-toggle="modal" data-target="#formModal">
											<strong>Register For Bootcamp</strong>
								</button>
							</center>

						</div>
					</div>

				</div><hr>

				<!-- Modal Form ---------------------------------------------------- -------- -->

				<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="formModalLabel">Register For Bootcamp</h4>
												</div>
												<div class="modal-body">
													<form id="demo-form" class="form-horizontal mb-lg" action="/startupyatraRegister" method="post">
														<input type="hidden" name="_token" value="{{csrf_token()}}">
														<div class="form-group mt-lg">
															<label class="col-sm-3 control-label">Name</label>
															<div class="col-sm-9">
																<input type="text" name="name" class="form-control" placeholder="Type your name..." required/>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Email</label>
															<div class="col-sm-9">
																<input type="email" name="email" class="form-control" placeholder="Type your email..." required/>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">College</label>
															<div class="col-sm-9">
																<input type="text" name="college" class="form-control" placeholder="College Name..." />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">Mobile</label>
															<div class="col-sm-9">
																<input type="text" name="mobile" class="form-control" placeholder="10 digit Mobile number..." required minlength="10" />
															</div>
														</div>

												<!-- 		<input type="submit" name="submit" value="Test"> -->
														
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" id="register" class="btn btn-primary">Register</button>
												</div>
											</div>
										</div>
									</div>

									<!-- ----------------------------------------------- --------- -->

				
				<div class="container">
				    <div class="row">
				        <div class="col-md-4 col-xs-12">
				            <table class="table table-bordered">
										<thead>
											<tr  class="info">
											
												<th>
													Potential Entrepreneurs
												</th>
												<th>
												    Destination
												</th>
												<th>
													State
												</th>
												<th>
													Yatra
												</th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td>
													<strong>6000+</strong>
												</td>
												<td>
													<strong>10</strong>
												</td>
												<td>
													<strong>1</strong>
												</td>
												<td>
													<strong>1</strong>
												</td>
											</tr>
										</tbody>
									</table>

				        </div>
				        <div class="col-md-8 col-xs-12">
				            <img class="img-responsive" src="/KIITEcell/assets/startup-yatra/map.jpg" alt="Kiit Ecell" style="width:100%;height:400px">
				        </div>
				    </div>
				</div><br><hr>


				<script>
					var form = $("form");
					var submit = $("#register");

					

					submit.click(function(e){
							e.preventDefault();

							data = form.serialize();

							$.ajax({
							url:"/startupyatraRegister",
							type:"POST",
							data:data,
							dataType:"json",
							

						}).done(function(response){
							if(response.type == 'success')
								swal("Good job!", response.msg, "success").then(() =>{
									window.location.href="https://ecell.org.in";
								});
							else
								swal("Sorry!", response.msg, "error");
						}).fail(function(response, status, xhr, $form){
							swal("Sorry!", 'Critical Error', "error");
						})

					})
				</script>

			
			
			@endsection

			
