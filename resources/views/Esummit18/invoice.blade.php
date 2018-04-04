<?php
use App\Icamp18\Players as Players;
?>

<div class="m-portlet">	 
			<div class="m-portlet__body m-portlet__body--no-padding">
				<div class="m-invoice-2">
					<div class="m-invoice__wrapper">
						<div class="m-invoice__head" style="background-image: url(./assets/app/media/img//logos/bg-6.jpg);">	
							<div class="m-invoice__container m-invoice__container--centered">			 		 
								<div class="m-invoice__logo">
									<a href="#">
										<h1>Payment Invoice</h1> 	
									</a>				 
									<a href="#">
										<img style="width: 200px; height: 100px" src="/logo">  	
									</a>
								</div> 
								<span class="m-invoice__desc">
									<span>KIIT Entrepreneurship Cell, </span>
									<span>KIIT University</span>
								</span>
								<div class="m-invoice__items">	
                                <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">Invoice To</span>
                                        <span class="m-invoice__text">Name: {{$response->buyer_name or $response['buyer_name']}}</span>
                                        <span class="m-invoice__text">Email: {{$response->email or $response['email']}}</span>
                                        <span class="m-invoice__text">Phone: {{$response->phone or $response['phone']}}</span>
                                        <span class="m-invoice__text">Mode of Payment: {{$response->payment->instrument_type or $response['payment']['instrument_type']}}</span>
                                    </div>								
									<div class="m-invoice__item">
										<span class="m-invoice__subtitle">Transaction Details</span>
                                        <span class="m-invoice__text">Instamojo Id: {{$response->payment->payment_id or $response['payment']['payment_id']}}</span>
                                         <span class="m-invoice__text">Instamojo Request Id: {{$response->id or $response['id']}}</span>
									</div>									
                                    <div class="m-invoice__item">
                                        <span class="m-invoice__subtitle">Date</span>
                                        <span class="m-invoice__text">{{date('F d, Y', strtotime($response->payment->created_at))}}</span>
                                        <span class="m-invoice__text">{{date('h:i:s A', strtotime($response->payment->created_at))}}</span>  
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
                                            <th>IC-Id</th>
                                            <th>Profile Type</th>
										 	<th>Amount</th>
										</tr>
									</thead>	
									<tbody>
                                    <?php
                                       $email_array = explode(",",$trans['email']);                                  
                                        $count = count($email_array);
                                        $bulk = false;
                                        if(isset($trans['fee']))
                                        	$bulk = true;

                                        if($bulk == true)
                                        	$price_array = explode(",",$trans['fee']);   
                                        else
                                        	$price_array = array(0, $response->amount);	                                    
                                        
                                      	                                     
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
                                            <td>'.$fetch['ic_id'].'</td>
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
											<td>{{$trans->o_id or $trans['o_id']}}</td>
											<td>{{$trans->t_id or $trans['t_id']}}</td>
											<td>{{$response->status or $response['status']}}, {{$response->payment->status or $response['payment']['status']}}</td>
											<td class="m--font-danger">₹ {{$response->amount or $response['amount']}}</td>
										</tr>										 					 
									</tbody> 
								</table>
							</div>							 				 					
						</div>				 
					</div>	 
				</div>
			</div>
		</div>

