<?php
use App\Esummit18\Players as Players;

?>

<head>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', '111549111', 'auto');
		ga('send', 'pageview');
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<style type="text/css">
	@import "https://esummit.org.in/Esummit18/assets_dash/css/style.css";
	</style>

	<!--style type="text/css">;
	@import "https://esummit.org.in/Esummit18/assets_dash/css/style.css";
	</style-->

	

	<!--link href="https://esummit.org.in/Esummit18/assets_dash/css/style.css" rel="stylesheet" type="text/css" /-->
<link href="https://esummit.org.in/Esummit18/assets_dash/vendors/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="https://esummit.org.in/Esummit18/assets_dash/css/payment.css" rel="stylesheet" type="text/css" />
<link href="https://esummit.org.in/Esummit18/assets_dash/css/custom.css" rel="stylesheet" type="text/css" />
</head>

<div class="m-portlet">	 
			<div class="m-portlet__body m-portlet__body--no-padding">
				<div class="m-invoice-2">
					<div class="m-invoice__wrapper">
						<div class="m-invoice__head" style="background-image: url(https://esummit.org.in/Esummit18/assets/app/media/img/logos/bg-6.jpg);">	
							<div class="m-invoice__container m-invoice__container--centered">			 		 
								<div class="m-invoice__logo">
									<a href="#">
										<h1>Payment Invoice</h1> 	
									</a>				 
									<a href="#">
										<img style="width: 200px; height: 70px" src="https://esummit.org.in/logo_new">  	
									</a>
								</div> 
								<span class="m-invoice__desc">
									<span>KIIT Entrepreneurship Cell, </span>
									<span>KIIT University</span>
								</span>
								<div class="m-invoice__items">	
                                <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">Invoice To</span>
                                        <span class="m-invoice__text">Name: {{$data['name']}}</span>
                                        <span class="m-invoice__text">Email: {{$data['email']}}</span>
                                        <span class="m-invoice__text">Phone: {{$data['phone']}}</span>
                                        <span class="m-invoice__text">Mode of Payment: {{$data['payment_request']['payment']['instrument_type']}}</span>
                                    </div>								
									<div class="m-invoice__item">
										<span class="m-invoice__subtitle">Transaction Details</span>
                                        <span class="m-invoice__text">Instamojo Id: {{$data['payment_request']['payment']['payment_id']}}</span>
                                         <span class="m-invoice__text">Instamojo Request Id: {{$data['payment_request']['id']}}</span>
									</div>									
                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">Date</span>
                                        <span class="m-invoice__text">{{date('F d, Y', strtotime($data['payment_request']['payment']['created_at']))}}</span>
                                        <span class="m-invoice__text">{{date('h:i:s A', strtotime($data['payment_request']['payment']['created_at']))}}</span>  
                                    </div>
								</div>
							</div>					 	
						</div>
						<div class="m-invoice__body m-invoice__body--centered">
							<div class="table-responsive"> 
							    <table class="table">
									<thead> 							 			 
										<tr>
										 	<th>Participant</th>
                                            <th>ES-Id</th>
                                            <th>Profile Type</th>
										 	<th>Amount</th>
										</tr>
									</thead>	
									<tbody>
                                   <?php
                                       $email_array = explode(",",$data['email']);                                  
                                        $count = count($email_array);
                                        $bulk = false;
                                        if(isset($data['fee']))
                                        	$bulk = true;

                                        if($bulk == true)
                                        	$price_array = explode(",",$data['fee']);   
                                        else
                                        	$price_array = array(0, $data['payment_request']['payment']['amount']);	                                    
                                        
                                      	                                     
                                        for($i=0; $i<$count; $i++){  
                                        $fetch = Players::where('email', $email_array[$i])->first();
                                        if($fetch['prof_type']=='Student'){
                                        if($fetch['univ_name'] == 'kiit')
                                            $type = 'KIIT Student';
                                        else
                                            $type = 'College Student';   
                                    }
                                    else if($fetch['prof_type']=='School Student')
                                        $type = 'School Student';
                                    else if($fetch['prof_type']=='Professional (Job)')
                                        $type = 'Professional (Job)';    
                                    else if($fetch['prof_type']=='Startup')
                                        $type = 'Startup';

                                        else
                                        	$type = 'none'; 

                                                                             
                                        echo '<tr>
                                            <td>'.$email_array[$i].'</td>
                                            <td>'.$fetch['id'].'</td>
                                            <td>'.$type.'</td>
                                            <td class="m--font-danger">₹ '.$price_array[$i+1].'</td>
                                            </tr>';                                            
                                    }

                                    if($bulk == true){
                                    	echo '<tr>
                                            <td>Convenience Charge: </td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td class="m--font-danger">₹ '.$price_array[0].'</td>
                                            </tr>';  
                                    }

                                    ?>											
																 
									</tbody> 
								</table>
							</div>					 		
						</div>
						<div class="m-invoice__footer">						 
							<div class="m-invoice__table  m-invoice__table--centered table-responsive"> 
								<table class="table">
									<thead> 							 			 
										<tr>
											<th>Order Id</th>
											<th>Transaction Id</th>
											<th>Status</th>
											<th>Total Amount</th>
										</tr>
									</thead>	
									<tbody>	 
										<tr>
											<td>{{$data['o_id']}}</td>
											<td>{{$data['t_id']}}</td>
											<td>{{$data['payment_request']['status']}}, {{$data['payment_request']['payment']['status']}}</td>
											<td class="m--font-danger">₹ {{$data['payment_request']['amount']}}</td>
										</tr>										 					 
									</tbody> 
								</table>
							</div>							 				 					
						</div>				 
					</div>	 
				</div>
			</div>
		</div>

