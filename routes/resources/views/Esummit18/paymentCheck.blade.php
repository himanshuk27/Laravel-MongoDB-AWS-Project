

@if($data->payment_request->payment->status == 'Credit')

<h2>Payment Successful</h2>
<br>
<h3>Transaction Id: {{$data->payment_request->payment->payment_id}}</h3>
<br>
<h3>Status: {{$data->payment_request->status}}</h3>

@elseif($data->payment_request->payment->status == 'Failed')

@endif




