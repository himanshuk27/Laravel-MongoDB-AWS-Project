@extends('Esummit18.layouts.landing_main')


@section('title', 'Registrations - KIIT E-Summit\'18')

@section('content')

<section class="section-padding ">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <br>
    <center>
        <h2 class="section-title text-uppercase">We can do this,guys!!!</h2>
    </center>
<div class="mt-30"></div>
<div class="table-responsive">
<table class="table table-responsive">
<thead>
<tr>
<th><h2>Registrations</h2></th>
<th><h2>Payment</h2></th>
<th><h2> Tech Payment</h2></th>
<th><h2> Innovation Payment</h2></th>
<th><h2> Business Payment</h2></th>
</tr>
</thead>
<tbody>

                                                    <tr>
                                                        <td><h1>{{ $PlayersCount}}</h1></td>
                                                        <td><h1>{{$PaymentCount}}</h1></td>
                                                         <td><h1>{{$TechCount}}</h1></td>
                                                         <td><h1>{{$InnovationCount}}</h1></td>
                                                         <td><h1>{{$BusinessCount}}</h1></td>
                                                        </tr>
                                                
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
<br><br><br><br>
</section>

@endsection

@section('scripts')
<script type="text/javascript">
   $("#up").css("display","none");
</script>
@endsection