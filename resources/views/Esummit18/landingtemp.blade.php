@extends('Esummit18.layouts.landing_main')


@section('title', 'KIIT E-Summit \'18')

@section('description', 'E-Summit is Eastern India\'s largest business and technology acquaintance to the youth with thousands of participants from across the country.')

@section('keywords', 'E-Summit 2018, Entrepreneurship Cell KIIT,Leadership, Summit, Global, Asia, India, Largest Summit, Leader, Speaker, Video, Resources, esummit, kiit, bhubaneswar, esummit kiit bhubaneswar, esummit18, esummit 2018 registration, entrepreneurs, Entrepreneurship, technology, business, startup, startup planet, tracks esummit18')

@section('css')
<style type="text/css">
    @media only screen and (max-width: 700px) {
    .panel-body > p {
        color: black !important;
    }
}
    .swal-wide{
    font-size: 18px !important;
}

.mail-icon{
    width:50%;
}
</style>

<style type="text/css">
.lightboxcontainer {
  width:100%;
  text-align:left;
}
.lightboxleft {
  width: 40%;
  float:left;
}
.lightboxright {
  width: 60%;
  float:left;
}
.lightboxright iframe {
  min-height: 390px;
}
.divtext {
  margin: 36px;
}
@media (max-width: 800px) {
  .lightboxleft {
    width: 100%;
  }
  .lightboxright {
    width: 100%;
  }
  .divtext {
    margin: 12px;
  }
}
</style>

<link href="/Esummit18/assets/vendors/flexSlider/flexslider.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection


@section('content')
        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper" id="1">
         <div class="materialize-parallax rev_slider"  data-version="5.0">
          <ul>

            <li data-transition="fade" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="Esummit18/assets/img/parallax/notgeneric.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Parallax" data-description="">

                <!-- MAIN IMAGE -->
                <img src="Esummit18/assets/img/banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <div class="tp-overlay"></div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption text-bold white-text tp-resizeme rs-parallaxlevel-4" 
                    data-x="center"  
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-100']"
                    data-fontsize="['60','60','45','35']"
                    data-lineheight="['60','60','50','40']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
               
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="800" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"

                    
                    style="z-index: 5; white-space: nowrap; text-transform: uppercase;">
                    KIIT E-Summit <span class="brand-color">2018</span>
                </div>



                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-3" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 

                    style="z-index: 6; white-space: nowrap;">Build Your Passion!
 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-2" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 

                    style="z-index: 7; white-space: nowrap;"><i class="fa fa-paper-plane-o"></i>
                </div>

                <!-- LAYER NR. 4 -->
        

                <div class="tp-caption tp-resizeme white-text rs-parallaxlevel-1"
                    data-x="center"
                    data-y="['middle','middle','middle','middle']" data-voffset="['150','150','50','50']"
                    data-fontsize="['25','25','20','16']"
                    data-lineheight="['25','25','25','25']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"

                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 8; white-space: nowrap;">
                    
                     <center><p>8th - 11th March</p><br></center>
                     <p>Kalinga Institute of Industrial Technology, Bhubaneswar</p>
                </div>


                <!-- LAYER NR. 5 -->
                <div class="tp-caption rev-scroll-btn  rs-parallaxlevel-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" 
                    data-width="35"
                    data-height="55"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:pointer;"
         
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" 
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    
                    style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">                         
                    <span></span>                            
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-8" 
                    data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
                    data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                    data-transform_out="opacity:0;s:1000;s:1000;" 
                    data-start="2000" 
                    data-responsive_offset="on" 

                    style="z-index: 10;">
                        <div class="rs-looped rs-pendulum"  data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake4.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina> 
                        </div>
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-7" 
                    data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
                    data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                    data-transform_out="opacity:0;s:1000;s:1000;" 
                    data-start="2000" 
                    data-responsive_offset="on" 

                    
                    style="z-index: 11;">
                        <div class="rs-looped rs-wave"  data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake3.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina> 
                        </div>
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-4" 
                    data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
                    data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                    data-transform_out="opacity:0;s:1000;s:1000;" 
                    data-start="2000" 
                    data-responsive_offset="on" 

                    style="z-index: 12;">
                        <div class="rs-looped rs-rotate"  data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake2.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina> 
                        </div>
                </div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-6" 
                    data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
                    data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                    data-transform_out="opacity:0;s:1000;s:1000;" 
                    data-start="2000" 
                    data-responsive_offset="on" 

                    style="z-index: 13;">
                        <div class="rs-looped rs-wave"  data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake1.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina> 
                        </div>
                </div>
            </li>

          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->



        <section class="section-padding" id="2">
            <div class="container">

              <div class="text-center mb-80">
                  <img src="Esummit18/assets/img/logo-combo.png" alt="">

                  <p class="section-title">Presents</p>
                  <h2 class="section-title text-uppercase" id="aboutus">KIIT Entrepreneurship Summit 2018</h2>
<p class="section-sub">E-Summit is Eastern India's largest business and technology acquaintance to the youth with thousands of participants from across the country.</p>

              </div>

         <div class="row">
                <div class="col-md-12">

                    <div class="icon-tab">

                      <!-- Nav tabs -->
                      <div class="text-center">
                        <ul class="nav nav-pills" role="tablist">

                          <li role="presentation" class="active"><a href="#icontab-1" class="waves-effect waves-light"  role="tab" data-toggle="tab"> <i class="material-icons">people</i></a></li>

                          <li role="presentation"><a href="#icontab-2" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">trending_up</i></a></li>

                          <li role="presentation"><a href="#icontab-3" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">assessment</i></a></li>
                          <li role="presentation"><a href="#icontab-4" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">business_center</i></a></li>
                        </ul>
                      </div>

                      <!-- Tab panes -->
                      <div class="mt-40">
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="icontab-1">

                            <div class="row">
                              <div class="col-md-6">
                                  <h2 class="text-bold mb-40">About KIIT E-Cell</h2>
<p>We at <a href="https://ecell.org.in/" target="_blank">KIIT E-Cell</a> foster Entrepreneurship Culture amongst the youth and establish necessary support system for aspiring young minds. We strongly encourage self development of our members and aim to light up the path of independency for many.  </p>
<p> We are driven by the tagline <b> "IMAGINE INNOVATE IMPLEMENT" </b> because we strongly believe that the best time to build a solution, the best time to solve a problem, the best time to figure out a way ro resolve an issue is right now and passion is the driving force behind it.</p>

                              </div>

                              <div class="col-md-6">
                                  <img src="Esummit18/assets/img/logo-ecell.png" alt="image" class="img-responsive">
                              </div>
                            </div>
                          </div>

                          <div role="tabpanel" class="tab-pane fade" id="icontab-2">
                            <div class="row">
                              <div class="col-md-6">
                                  <h2 class="text-bold mb-40">Our Mission</h2>
                                 <p>We believe that emerging economies like India need the drive of new and young breed of worthy entrepreneurs who target their efforts on innovative way to technologically address the genuine needs of billions of people. <a href="https://ecell.org.in/" target="_blank">KIIT E-Cell</a> targets to enhance entrepreneurship culture among students with East India's largest inbuilt techonology business incubator, <a href="https://ecell.org.in/tbi-initiatives" target="_blank">KIIT TBI</a>. </p>
<p> This is achieved through a number of activities such as Discussion Forums, Speaker sessions, B-Plan activities, E-Schools amd many more such concepts.</p>

                              </div>

                              <div class="col-md-6">
                                  <img src="Esummit18/assets/img/mission.jpg" alt="image" class="img-responsive">
                              </div>
                            </div>
                          </div>

                          <div role="tabpanel" class="tab-pane fade" id="icontab-3">
                            <div class="row">
                              <div class="col-md-6">
                                 <h2 class="text-bold mb-40">Our Initiatives</h2>
<p>KIIT E-Cell has started a number of initiatives. The Chief amongst them are:<br>
 <a href="https://ecell.org.in/initiatives#ml" target="_blank">Maker's Lab</a> It is our newest initiative through which we will set up an incubation space for startups where they can come and work together.The startups will be provided with proper guidance of mentors, required technological support and the proper resources.</p>
 <p> <a href="https://ecell.org.in/initiatives#ml" target="_blank"> Startup Club </a> The startups from Maker's Lab which have their Minimum Viable Product (MVP) ready, will be promoted to Startup Club for operations.</p>
 <p><a href="https://ecell.org.in/initiatives#ml" target="_blank"> Community Learning </a> This initiative helps our members to learn and master the skills which they wish to develop.</p>
 <p> <a href="https://ecell.org.in/initiatives#ml" target="_blank"> Read More.. </a></p>

                              </div>

                              <div class="col-md-6">
                                  <img src="Esummit18/assets/img/idea.jpg" alt="" class="img-responsive">
                              </div>
                            </div>
                          </div>
                          
                          <div role="tabpanel" class="tab-pane fade" id="icontab-4">
                            <div class="row">
                              <div class="col-md-6">
                                  <h2 class="text-bold mb-40">Our Startups</h2>
<p> We at ECell have been able to guide the students who have brought forward their ideas, whether it is the stage to pitch in the idea, to formaulate, to process it, or to guide it through a path of comepletion.  </p>
<p> We not only provide mentorship but also investors and workspace. Currently we have 12 startups under our umbrella.</p>

                              </div>

                              <div class="col-md-6">
                                  <img src="Esummit18/assets/img/workstation2.jpg" alt="image" class="img-responsive">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div><!-- /.icon-tab -->

                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
       

       <section class="section-padding event-banner-1 bg-fixed parallax-bg overlay black-overlay"  data-stellar-background-ratio="0.5" id="about_esummit">
            <div class="container">

              <h2 class="font-40 mb-30 white-text">What is E-SUMMIT '18?</h2>

              <div class="row">
                <div class="col-md-7 white-text">
                  
                <p>
                      The main goal that KIIT Entrepreneurship Cell aims to achieve with KIIT Entrepreneurship Summit 2018 is to bring people having different interests from all over university and all over India, on a common platform, create an open dialogue, engage them and in this process, instill the spirit of Entrepreneurship which will ultimately add greater workforce in KIIT Startup Community.
                  </p>
                  <p>
                      The main event will comprise of four tracks- Technology, Innovation, Marketing and Startup Planet. All the delegates of KIIT E-Summit '18 will be allowed to choose any one track depending upon their choice and interest. <br>
                      Throughtout the event, all the sessions, workshops and competitions that they will take part in, will be revolving around that particular track.
                  </p>


                  <a href="#join" class="waves-effect waves-light btn pink"> Join Now!</a>
                </div><!-- /.col-md-7 -->

               <div class="col-md-5"> <img src="Esummit18/assets/img/logo_white.png" height="150px" width="400px" ></div>

              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <!--content promo box start-->
        <section class="content-promo-box banner padding-top-100 padding-bottom-120 gray-bg" >
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="font-30 text-extrabold mb-30 text-uppercase">Founder KIIT-KISS</h2>

                        <p>Our honourable founder Dr. Achyuta samanta is one of the top 15 social entrepreneurs of the world.<br> His guiding principle of “Art of Giving” and his quest for “Poverty Eradication through Education” is the biggest source of inspiration for all of us who wish to bring a positive change in the society.</p>

                        <a href="http://kiit.ac.in/founders-message/" target="_blank" class="waves-effect waves-light btn blue"> Message</a>
                  <a href="http://achyutasamanta.com/about/" target="_blank" class="waves-effect waves-light btn blue"> About</a>
                  <a href="https://kiss.ac.in/" target="_blank" class="waves-effect waves-light btn blue"> Social Work</a>
                  <a href="http://artofgiving.in.net/" target="_blank" class="waves-effect waves-light btn blue"> Philosophy</a>
                    </div>

                </div>
            </div>
        </section>
        <!--content promo box end-->

        <section class="section-padding ">

             <!--div id="mydiv" style="display:none;">
  <div class="lightboxcontainer">
    <div class="lightboxleft">
      <div class="divtext">
        <p class="divtitle" style="font-size:16px;font-weight:bold;margin:12px 0px;">WonderPlugin Gallery</p>
        <p class="divdescription" style="font-size:14px;line-height:20px;">WonderPlugin Gallery is a WordPress photo and video gallery plugin, and a great way to showcase your images and videos online. The plugin supports images, YouTube, Vimeo, Dailymotion, mp4 and webm videos. It's fully responsive, works on iPhone, iPad, Android, Firefox, Chrome, Safari, Opera and Internet Explorer 7/8/9/10/11.</p>
      </div>
    </div>
    <div class="lightboxright">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wswxQ3mhwqQ" frameborder="0" allowfullscreen></iframe>
    </div>
    <div style="clear:both;"></div>
</div></div-->


<div class="container">
<div class="text-center mb-80">
<h2 class="section-title text-uppercase">E-Summit '18 Tracks Intro</h2>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="gallery-thumb">
<ul class="slides">   
<li data-thumb="Esummit18/assets/img/working_man.png">
     <div style="width: 100%; height: 400px;" id="vid_workshop_1"></div>
</li>
<li data-thumb="Esummit18/assets/img/mission.png">
<div style="width: 100%; height: 400px;" id="vid_workshop_2"></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


       <section class="section-padding"  id="speaker">
            <div class="container">

              <div class="text-center mb-80">
                   <h2 class="section-title text-uppercase">Previous Speakers!</h2>
                  <h5 class="text-uppercase">(Conclave Of Entrepreneurship, Leadership and Technology)</h5>
                  <p class="section-sub">Conclave of Entrepreneurship Leadership and Technology (CELT), at KIIT University, Bhubaneswar was aimed at fostering entrepreneurial skill among the students worldwide and enabling the process of identifying, nurturing, training and establishing startups.<br />It promoted openness of knowledge, network, contacts and opportunities</p>

              </div>

              <div class="row">
                  <div class="col-md-4">
                        <div class="widget widget_tt_author_widget featured-item flat-border-box">

                            <div class="author-info-wrapper">
                                <div class="author-avatar">
                                     <img src="Esummit18/assets/img/speakers/shashi-tharoor-celt.jpg">
                                     


                                   <h2>Dr. Shashi Tharoor</h2>

                                   
                                            <span>Politician</span>

                                </div>

                                <p>Shashi Tharoor is currently serving as Member of Parliament, Lok Sabha from Thiruvananthapuram, Kerala since 2009. </p>
                                <hr>
                               <br>
                                <hr>
                              <hr>  
                            </div> <!-- /author-info-wrapper -->
                          </div><!-- /.widget_tt_author_widget -->
                       </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="widget widget_tt_author_widget featured-item flat-border-box">

                            <div class="author-info-wrapper">
                                <div class="author-avatar">
                                     <img src="Esummit18/assets/img/speakers/apurv-chamaria-celt.jpg"  alt="">


                                   <h2>Apurva Chamaria</h2>
                                            <span>Vice President,HCL Technologies</span>
                                        </div>
                    
                                        <p>Apurva Chamaria is the Vice President and Head of Corporate Marketing for
                                         HCL Technologies, a 7 Bn US$ global IT major.  </p>
                                  <hr>
                               <br>
                                <hr>

                                <hr>
                            </div> <!-- /author-info-wrapper -->
                          </div><!-- /.widget_tt_author_widget -->
                       </div><!-- /.col-md-4 -->


                    <div class="col-md-4">
                        <div class="widget widget_tt_author_widget featured-item flat-border-box">

                            <div class="author-info-wrapper">
                                <div class="author-avatar">
                                   <img src="Esummit18/assets/img/speakers/balaji-viswanathan-celt.png">


                                   <h2>Mr. Balaji Viswanathan</h2>
                                            <span>CEO of Invento Robotics</span>
                                        </div>
                    
                                        <p>To all Quora readers Mr. Balaji Viswanathan, one of India's most followed and
                                        viewed writers on Quora.. He was a part of "Windows 7" Core development
                                        team and then was a part of the startup factory at Live Labs, Microsoft. 
                                       </p>

                                   <hr>
                               <br>
                                <hr>

                                <hr>
                            </div> <!-- /author-info-wrapper -->
                          </div><!-- /.widget_tt_author_widget -->
                       </div><!-- /.col-md-4 -->
                       
                    

              </div><!-- /.row -->

                  <a href="speakers" target="_blank"><h5 class="text-uppercase grey-text text-bold" style="color: #ff3e3e;">View All Speakers...</h5></a>
              
            </div><!-- /.container -->
        </section>

       <!--hero section starts-->
 <section id="tracks" class="banner-track bg-fixed parallax-bg overlay dark-5 padding-top-100" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="mb-70 text-center">
                  <h1 class="font-90 white-text text-extrabold text-uppercase">Choose Your Track</h1>
                  
                  <p class="white-text width-60 mb-30"> Keeping in mind the requirements and interests of the students, as well as the current industry trends, we have designed the following four tracks for the participants.</p>

 <section class="padding-bottom-100" >
            

              <div class="vertical-tab">
                <div class="row">
                  <div class="col-sm-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-stacked" role="tablist">
                          <br><br>
                          <li role="presentation" class="active"><a href="#tab-6" class="waves-effect waves-light" role="tab" data-toggle="tab">INNOVATION</a></li>
                          <li role="presentation"><a href="#tab-7" class="waves-effect waves-light" role="tab" data-toggle="tab">TECH & DESIGN</a></li>
                          <li role="presentation"><a href="#tab-8" class="waves-effect waves-light" role="tab" data-toggle="tab">BUSINESS & MARKETING</a></li>
                          <li role="presentation"><a href="#tab-9" class="waves-effect waves-light" role="tab" data-toggle="tab">STARTUP PLANET</a></li>
                          
                        </ul>                      
                  </div><!-- /.col-md-3 -->

                  <dizv class="col-sm-9">
                        <!-- Tab panes -->
                        <div class="panel-body">
                          <div class="tab-content" >
                            <div role="tabpanel" class="tab-pane fade in active custom-panel" id="tab-6">
                                <br>
                                 <br>
                                <img class="alignright" src="Esummit18/assets/img/busy_man.png" alt="">

                                <p class="white-text width-160 mb-30">Innovation Track aims at bringing a reformation in our thought process and building a community of startup minded people.</p>

                                <p class="white-text width-160 mb-30">The top 10 prototype/ideas will be selected and will be integrated into the <a href="https://ecell.org.in/initiatives#ml" > Maker's Lab </a> - an umbrella organisation which will bring synergy in between Startup, Mentor, Investor, Partner and Ambassador, who will be responsible for overall growth of a startup, from ideation to execution.</p>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-7">
                               <br><br>
                                <img class="alignright" src="Esummit18/assets/img/working_man.png" alt="">

                                <p class="white-text width-160 mb-30">The objective of this track is to bring skill development with respect to current industry trends.</p>

                                <p class="white-text width-160 mb-30">The three day event comprises of a keynote seeion, Dribble Meetup, Hack-Drone, workshops on Augmented Reality/Virtual Reality and Blockchain/Cryptocurrency Mining. This will provide boost to developing sustainable solutions with the skills learnt during the track timeline.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-8">
                                <br><br>
                                <img class="alignright" src="Esummit18/assets/img/mission.png" alt="">

                                <p class="white-text width-160 mb-30">The aim of this track is to test the strategising and planning capabilities of the participants.</p>

                                <p class="white-text width-160 mb-30">This track will have sessions on Content Entrpreneurship, Inbound Marketing, SEO, SMO, Adwords and its application on Wordpress. It will also feature Case Study sessions and business simulation game. It thus hepls the participants gain the understanding of the nitty-gritty of Finance and Marketing.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-9">
                                <br><br>
                                <img class="alignright" src="Esummit18/assets/img/business.png" alt="">

                                <p class="white-text width-160 mb-30">This track is whole-heartedly dedicated to Startups and their Ecosystem, while bringing together all the entrepreneurs in the community.</p>

                                <p class="white-text width-160 mb-30">It will provide the startups the platform to come down and set up their stalls where they'll get a chance to market their companies in front of investors and all the delegates present. This will give them the opportunity for product branding and networking.</p>
                            </div>
                            
                          </div>
                        
                  </div>
                </div><!-- /.row -->
              <!-- /.vertical-tab -->
                         
                  <a href="#join" class="btn btn-lg blue waves-effect waves-light">Register Now</a>

              </div><!-- /.hero-intro -->
            </div><!-- /.container -->
<!--hero section finishes-->
        </section>

        <section class="section-padding"  id="schedule">
              <!--promo default white box start-->
            <div class="ptb-50">
                <div class="container">
                    <div class="promo-box border-box">
                        <div class="promo-info">
                            <h2 align="center" class="text-extrabold text-uppercase">EVENT SCHEDULE</h2>
                            <p align="center" >Coming Soon...</p>
                        </div>                      
                    </div>
                </div>
            </div>
            <!--promo default box end-->
        </section>



        <section id="join" class="section-padding event-banner-2 bg-fixed parallax-bg  overlay purple-overlay" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row">
                <div class="col-md-6 white-text">
                 <h2 class="font-40 mb-30 white-text line-height-50"><span class="text-bold brand-color">Hurry Up!</span> Limited seats available for each track.</h2>

                  <p>Register Now and Get a chance win cash prizes.<br> Pitch your Idea and get a chance for Incubation, Grant Money, and many more facilities.</p>
                <p>Showcase your innovative products and get more audience and also get a chance to pitch your Idea.</p>

                    
                    <br>                    

               

                </div><!-- /.col-md-6 -->



                <div class="col-md-5 col-md-offset-1">
                    <div class="booking-form-wrapper">

                         <h3>Quick Sign Up Form</h3>
                        <form id="regForm" name="regForm" class="clearfix">

                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-field">
                                <input type="text" name="cand_name" class="validate" id="cand_name">
                                <label for="cand_name">Name</label>
                              </div>

                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">
                              <div class="input-field">
                                <input id="phone" type="tel" name="phone" class="validate" >
                                <label for="phone">Phone Number</label>
                              </div>
                            </div><!-- /.col-md-6 -->

                          </div><!-- /.row -->

                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="newEmail" type="email" name="newEmail" class="validate" >
                            <label for="newEmail" data-error="wrong" data-success="right">Email</label>
                          </div>

                          <div class="input-field">
                            <label class="sr-only" for="email">Password</label>
                            <input id="newPass" type="password" name="newPass" class="validate" >
                            <label for="newPass" data-error="wrong" data-success="right">Password</label>
                          </div>
                          <div class="input-field">
                            <label class="sr-only" for="">Repeat Password</label>
                            <input id="repeatPass" type="password" name="repeatPass" class="validate" >
                            <label for="repeatPass" data-error="wrong" data-success="right">Repeat Password</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="ref_id" class="validate" id="ref_id">
                            <label for="ref_id">Referral Id</label>
                        </div>
                          <button type="submit" class="waves-effect waves-light btn blue mt-30">Register Now</button>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                        </form>

                    </div>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

     


        <section class="section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="font-25 text-bold text-uppercase mb-30">What you can't miss</h2>
                  <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="accordion-one">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion-one" href="#collapse-one">
                            Workshops
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-one" class="panel-collapse collapse in">
                        <div class="">
                          Turbocharged workshops on Augmented Reality and Virtual Reality.Workshop on blockchain so you find out what it is and why you need to know about it and Dynamic workshop on Design Thinking.
                        </div>
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-two">
                            Sessions
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-two" class="panel-collapse collapse">
                        <div class="">
                          Hard Hitting sessions on HR and Operations,SEO,SMO,Adwords,Inbound Marketing and Content Entrepreneurship.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-three">
                            Pitching
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-three" class="panel-collapse collapse">
                        <div class="">
                          Break a leg! You get to pitch your ideas to India’s biggest investors and mentors.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-four">
                            Youtuber and Mad Talk
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-four" class="panel-collapse collapse">
                        <div class="">
                          Fresh off the press,we have the best youtubers coming up and our very favorite mad talk over marketing.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion-one" href="#collapse-five" class="collapsed">
                            Hackdrone and Makovation
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-five" class="panel-collapse collapse">
                        <div class="">
                          Enthralling and unique kind of hackathon for product development and drone building.
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <h2 class="font-25 text-bold text-uppercase mb-30">KIIT E-Summit '18 Official Trailer</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9akwOPXrAVo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            </div>
        </div><!-- /.container -->
    </section>

    <section id="sponsor" class="section-padding">
            <div class="container">

              <div class="text-center mb-80 wow fadeInUp">
                  <h2 class="section-title text-uppercase">Previous Sponsors</h2>
                  <p class="section-sub"></p>
              </div>

              

              <div class="clients-grid no-gutter">


                <div class="col-md-3 col-sm-6">
                       <h3 class="text-bold">Title Sponsor</h3>
                    <div class="border-box">
                          <img src="Esummit18/assets/img/sponsors/jindal.png" alt="Jindal steel">
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->

                

                <div class="col-md-3 col-sm-6">
                    <h3 class="text-bold">Mobility Partner</h3>
                    <div class="border-box">
                        
                          <img src="Esummit18/assets/img/sponsors/ola.png" alt="Ola Cabs">
                    
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->

               
                <div class="col-md-3 col-sm-6">
                    <h3 class="text-bold">Printing Partner</h3>
                    <div class="border-box">
                        
                       <img src="Esummit18/assets/img/sponsors/printview.png" alt="print view">
                        
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->

                 <div class="col-md-3 col-sm-6">
                    <h3 class="text-bold">Food & Beverage Partner</h3>
                    <div class="border-box">
                    
                       <img src="Esummit18/assets/img/sponsors/redbull.png" alt="redbull">
                        
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="border-box">
                    
                         <img src="Esummit18/assets/img/sponsors/carrer_launcher.png" alt="career launcher">
                        
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->

                

                <div class="col-md-3 col-sm-6">
                    <div class="border-box">
                
                         <img src="Esummit18/assets/img/sponsors/uber.png" alt="uber">
                        
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">
                    <div class="border-box">
                
                         <img src="Esummit18/assets/img/sponsors/crowdera.png" alt="crowdera">
                        
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->

                
                <div class="col-md-3 col-sm-6">
                    <div class="border-box">
                        
                         <img src="Esummit18/assets/img/sponsors/zomato.jpg" alt="zomato">
                        
                    </div><!-- /.border-box -->
                </div><!-- /.col-md-3 -->                
                  
            </div>

            <br>
            <a href="sponsors" target="_blank"><h5 class="text-uppercase grey-text text-bold" style="color: #ff3e3e;">See List of Sponsors...</h5></a>


        </section>
@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert2@7.11.0/dist/sweetalert2.all.min.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider-min.js" async></script>
<script type="text/javascript">
    function newsletterModal() {
        swal({
  title: '<img class="mail-icon" src="/Esummit18/assets/img/newsletter.png">',
  html:
    '<b>Enter you email to get our latest news before everybody else.</b><br>',
    input: 'email',
    inputPlaceholder: 'Email Address',
  showCloseButton: true,
  customClass: 'swal-wide',
  confirmButtonClass: 'btn green',
  focusConfirm: true,
  confirmButtonText: '<i class="fa fa-check"></i> Subscribe',
  showLoaderOnConfirm: true,
  preConfirm: (email) => {
    return new Promise((resolve) => {
        var data = {"email": email, "_token": '{{ csrf_token() }}'};
        $.ajax({
            url: '/newsletter/register',
            type : 'POST',
            data : data,
            dataType    : 'json',
        }).done(function(response) {

            if( response.type=='success' ){
                swal('Awesome!', response.message, 'success');              
            }

            else{                
                swal.showValidationError(response.message);
                 setTimeout(() => {
                newsletterModal();
      }, 2000);
            }

        }).fail(function(response, status, xhr, $form) {
            swal.showValidationError('We couldn\'t connect to the server!');
             setTimeout(() => {
                newsletterModal();
      }, 2000);
        });



    })
  },
  allowOutsideClick: false
});
    }


    $( document ).ready(function() {
        var counter = 0;
        var x = setInterval(function() {

            counter++;

            newsletterModal();

             if (counter == 1) {        
        clearInterval(x);
    }

            

        }, 3000);






       $('.gallery-thumb').flexslider("stop")


    
});
</script>
<!--script type="text/javascript" src="https://html5box.com/html5lightbox/html5lightbox/html5lightbox.js"></script-->


<script src="https://www.youtube.com/player_api"></script>
<script>
    
    // create youtube player
    var player;
    var player2;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('vid_workshop_1', {
          videoId: 'NeingVd221o', <!-- video id should be here. last component from video URL -->
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });

         player2 = new YT.Player('vid_workshop_2', {
          videoId: 'cuqV0KgBHfs', <!-- video id should be here. last component from video URL -->
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
      //  event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {        
        if(event.data === 0) {            
            $('.gallery-thumb').flexslider("next");
        }
    }
    
</script>

@endsection