@extends('Esummit18.layouts.landing_main')


@section('title', 'Campuspreneur - KIIT E-Summit\'18')


@section('content')

        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper" id="1">
         <div class="materialize-parallax rev_slider"  data-version="5.0">
          <ul>

            <li data-transition="fade" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="/Esummit18/assets/img/parallax/notgeneric.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Parallax" data-description="">

                <!-- MAIN IMAGE -->
                <img src="/Esummit18/assets/img/banner/banner-light.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme" data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-120','-120','40','40']" data-fontsize="['70','70','60','55']" data-lineheight="['80','80','70','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">Be Our
</div>

<div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme" data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-50','-50','100','100']" data-fontsize="['70','70','60','55']" data-lineheight="['80','80','70','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">Campuspreneur
</div>



<div class="tp-caption tp-resizeme dark-text" data-x="['left','left','center','center']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['50','50','-190','-190']" data-fontsize="['16','16','16','16']" data-lineheight="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">Help us spread the word of Esummit,bring in  more innovators and budding <br>entrepreneurs and grab a chance of getting free passes,<br>cool goodies,Amazon vouchers,tees and many more swags.  
</div>

<!-- <div class="tp-caption tp-resizeme" data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['170','170','-100','-100']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7;">
<a href="#" class="btn btn-download book-download waves-effect waves-light"><i class="fa fa-cloud-download mr-10"></i> <span>$56.00 <strong>Download</strong></span></a>
</div> -->

<center>

<div class="tp-caption tp-resizeme" data-x="['left','left','center','center']" data-hoffset="['290','290','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['170','170','0','0']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="1600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7;">

<a href="/leaderboard" class="btn btn-download waves-effect waves-light green"><strong>LeaderBoard</strong></span></a>  

@if (!empty($data['campus']))
<h3>Your Campuspreneur Id : {{$data['campus']}}</h3>
@else
<a href="#" id="apply_campus" class="btn btn-download book-download waves-effect waves-light"><strong>Apply</strong></span></a>
@endif

</div>

</center>


<div class="tp-caption tp-resizeme rs-parallaxlevel-6" data-x="['right','right','center','center']" data-hoffset="['90','90','-70','70']" data-y="['middle','middle','bottom','bottom']" data-voffset="['20','20','-30','-30']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:1000;e:Power2.easeOut;" data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" data-start="2200" style="z-index: 4;">
<div><img src="/Esummit18/assets/img/banner/dummy.png" alt="" data-lazyload="/Esummit18/assets/img/banner/campus.png">
</div>
</div>
            </li>

          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->
@endsection


@section('scripts')
<script type="text/javascript">
   $("#up").css("display","none");
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