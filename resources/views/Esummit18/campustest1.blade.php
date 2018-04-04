@extends('Esummit18.layouts.landing_main_rest')


@section('title', 'Campuspreneur - KIIT E-Summit\'18')


@section('content')


<section class="section-padding">       
<div class="container">

  <div class="row">

      <!-- <div class="col s12"><h2><strong>Be Our Campuspreneur</strong></h2></div>
      <div class="col s6"><p>Help us spread the word of Esummit,bring in  more innovators and budding <br>entrepreneurs and grab a chance of getting free passes,<br>cool goodies,Amazon vouchers,tees and many more swags.  </p></div> -->
      <div class="col-sm-6" id="hide">
        <img src="/Esummit18/assets/img/banner/campus.png" alt="" data-lazyload="/Esummit18/assets/img/banner/campus.png" style="height: 400px">
      </div>
      <div class="col-sm-6">
         <h1><strong>Be Our Campuspreneur</strong></h1><br>
      <h2 style="line-height:1.6;letter-spacing: 2px">
          Help spread the word of Esummit and get a chance to win multiple <strong>amazon goodies,vouchers,T-shirts and many more swags.</strong>
      </h2> <br>

      <a href="/leaderboard" class="btn btn-download waves-effect waves-light green"><strong>LeaderBoard</strong></span></a>
    @if (!empty($data['campus']))
<h3>Your Campuspreneur Id : {{$data['campus']}}</h3>
@else
<a href="#" id="apply_campus" class="btn btn-download book-download waves-effect waves-light"><strong>Apply</strong></span></a>
@endif
       
      </div>
<!-- 
       <div class="col-sm-6">
    
    <a href="/leaderboard" class="btn btn-download waves-effect waves-light green"><strong>LeaderBoard</strong></span></a>
    @if (!empty($data['campus']))
<h3>Your Campuspreneur Id : {{$data['campus']}}</h3>
@else
<a href="#" id="apply_campus" class="btn btn-download book-download waves-effect waves-light"><strong>Apply</strong></span></a>
@endif

</div> -->

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">

    <!--   <h1><strong>Be Our Campuspreneur</strong></h1>
      <h2>
          Help spread the word of Esummit and get a chance to win multiple amazon goodies,vouchers,T-shirts and many more swags.
      </h2> -->

    </div>
    <div class="col-sm-6">
       <!-- <a href="/leaderboard" class="btn btn-download waves-effect waves-light green"><strong>LeaderBoard</strong></span></a>
    @if (!empty($data['campus']))
<h3>Your Campuspreneur Id : {{$data['campus']}}</h3>
@else
<a href="#" id="apply_campus" class="btn btn-download book-download waves-effect waves-light"><strong>Apply</strong></span></a>
@endif -->
    </div>    
  </div>
</div>
</section>

<!-- <div class="row">
  <div class="col s6">
    
    <a href="/leaderboard" class="btn btn-download waves-effect waves-light green"><strong>LeaderBoard</strong></span></a>
    @if (!empty($data['campus']))
<h3>Your Campuspreneur Id : {{$data['campus']}}</h3>
@else
<a href="#" id="apply_campus" class="btn btn-download book-download waves-effect waves-light"><strong>Apply</strong></span></a>
@endif

  </div> -->

  
</div>
  




</div>

</center>






            </li>

          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->

        <div>

</div>

@endsection

@section('scripts')
<script type="text/javascript">
   $("#up").css("display","none");
</script>
<script type="text/javascript">
  var div = document.querySelector("#hide");
  if(window.innerWidth <= 550)
  {
    div.style.display = "none";
  }
</script>
<script src="https://unpkg.com/sweetalert2@7.11.0/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript"> 
  function enroll() { 
      
    var action = 'apply/campus';

    $.ajax({
      url: action,
      type : 'POST',
      data: { 
        'enroll': 'true',
        '_token': '{{ csrf_token() }}'
    },
      dataType    : 'json',
    }).done(function(response) {

      if( response.type=='success' ){       
        swal('Awesome!', response.message, 'success').then((result) => {
          window.location.reload();
      });
        
      }

      else
        swal('Error', response.message, 'error');



    }).fail(function(response, status, xhr, $form) {
      swal('Critical Error', xhr, 'error');

    });
}


	$('#apply_campus').click(function(){

    if('{{$data['id'] or 'none'}}' == 'none'){
      swal({
        title: 'Action Restricted!',
        text: "You must login to complete this action.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Login'
      }).then((result) => {
        if (result.value) {
          window.location.href = '/login/redirect/campuspreneur';
        }
      })
    }

    else{
       enroll();
    }

    
    
  });
</script>

@endsection