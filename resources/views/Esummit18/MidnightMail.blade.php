@extends('Esummit18.layouts.dashboard')

@section('title', 'mail | KIIT E-Summit\'18')

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
</div>
</div>
</div>
<button class="btn" id="send">Send</button>
<br><br><br><br>
</section>

@endsection

@section('scripts')
<script type="text/javascript">
   $("#up").css("display","none");
</script>
<script>
   var btn = $("#send");
   btn.click(function(e){
    $.ajax({
        				url:"/paymentConfirmationMail",
        				type:"GET",
        			
        				dataType:"json",


        			}).done(function(response){
        				if(response.type == 'success')
        					swal("Good job!", response.msg, "success").then(() =>{
        						//window.location.href="https://ecell.org.in";
        					});
        				else
        					swal("Sorry!", response.msg, "error");
        			}).fail(function(response, status, xhr, $form){
        				swal("Sorry!", 'Critical Error', "error");
        			})

        		});

</script>
@endsection