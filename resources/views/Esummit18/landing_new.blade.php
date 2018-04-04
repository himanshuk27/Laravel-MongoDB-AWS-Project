@extends('Esummit18.layouts.landing_main') @section('title', 'KIIT E-Summit \'18') @section('description', 'E-Summit is Eastern India\'s largest business and technology acquaintance to the youth with thousands of participants from across the country.') @section('keywords', 'E-Summit 2018, Entrepreneurship Cell KIIT,Leadership, Summit, Global, Asia, India, Largest Summit, Leader, Speaker, Video, Resources, esummit, kiit, bhubaneswar, esummit kiit bhubaneswar, esummit18, esummit 2018 registration, entrepreneurs, Entrepreneurship, technology, business, startup, startup planet, tracks esummit18') @section('css')
<style type="text/css">
    @media only screen and (max-width: 700px) {
        .panel-body>p {
            color: black !important;
        }
    }

    .swal-wide {
        font-size: 18px !important;
    }

    .mail-icon {
        width: 50%;
    }

</style>

<style type="text/css">
    .lightboxcontainer {
        width: 100%;
        text-align: left;
    }

    .lightboxleft {
        width: 40%;
        float: left;
    }

    .lightboxright {
        width: 60%;
        float: left;
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

    .brand-hover-innovation:hover {
        background-color: #9E9E9E !important;
    }

    .brand-hover-business:hover {
        background-color: #E53935 !important;
    }

    .brand-hover-startup:hover {
        background-color: #00E676 !important;
    }



    table,
    th,
    td {
        border: 2px solid black;
    }

    td {
        font-size: 16px;
        font-weight: bold;
    }

</style>

<link href="/Esummit18/assets/vendors/flexSlider/flexslider.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> @endsection @section('content')
<!-- start revolution slider 5.0 -->
<section class="rev_slider_wrapper" id="1">
    <div class="materialize-parallax rev_slider" data-version="5.0">
        <ul>

            <li data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-thumb="Esummit18/assets/img/parallax/notgeneric.jpg" data-rotate="0" data-saveperformance="off" data-title="Parallax" data-description="">

                <!-- MAIN IMAGE -->
                <img src="Esummit18/assets/img/banner.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <div class="tp-overlay"></div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption text-bold white-text tp-resizeme rs-parallaxlevel-4" data-x="center" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-100']" data-fontsize="['60','60','45','35']" data-lineheight="['60','60','50','40']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; text-transform: uppercase;">
                    KIIT E-Summit <span class="brand-color">2018</span>
                </div>



                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Build Your Passion!

                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="fa fa-paper-plane-o"></i>
                </div>

                <!-- LAYER NR. 4 -->


                <div class="tp-caption tp-resizeme white-text rs-parallaxlevel-1" data-x="center" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','50','50']" data-fontsize="['25','25','20','16']" data-lineheight="['25','25','25','25']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;">

                    <center>
                        <p>8th - 11th March</p><br></center>
                    <p>Kalinga Institute of Industrial Technology, Bhubaneswar</p>
                </div>


                <!-- LAYER NR. 5 -->
                <div class="tp-caption rev-scroll-btn  rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                    <span></span>
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-8" data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="2000" data-responsive_offset="on" style="z-index: 10;">
                    <div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake4.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina>
                    </div>
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-7" data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="2000" data-responsive_offset="on" style="z-index: 11;">
                    <div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake3.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina>
                    </div>
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-4" data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="2000" data-responsive_offset="on" style="z-index: 12;">
                    <div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake2.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina>
                    </div>
                </div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption   tp-resizeme rs-parallaxlevel-6" data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="2000" data-responsive_offset="on" style="z-index: 13;">
                    <div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="Esummit18/assets/img/parallax/blurflake1.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <!-- end revolution slider -->
</section>
<!-- end of slider wrapper -->



<section class="section-padding" id="2">
    <div class="container">

        <div class="text-center mb-80">
            <img src="Esummit18/assets/img/logo-combo.png" alt="">

            <p class="section-title">Presents</p>
            <h2 class="section-title text-uppercase text-extrabold" id="aboutus">KIIT Entrepreneurship Summit 2018</h2>
            <p class="section-sub dark-text font-20 font-roboto">E-Summit is Eastern India's largest business and technology acquaintance to the youth with thousands of participants from across the country.</p>

        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="icon-tab">

                    <!-- Nav tabs -->
                    <div class="text-center">
                        <ul class="nav nav-pills" role="tablist">

                            <li role="presentation" class="active"><a href="#icontab-1" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">people</i></a></li>

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
                                        <p class="dark-text font-16">We at <a href="https://ecell.org.in/" target="_blank">KIIT E-Cell</a> foster Entrepreneurship Culture amongst the youth and establish necessary support system for aspiring young minds. We strongly encourage self development of our members and aim to light up the path of independency for many. </p>
                                        <p class="dark-text font-16"> We are driven by the tagline <b> "IMAGINE INNOVATE IMPLEMENT" </b> because we strongly believe that the best time to build a solution, the best time to solve a problem, the best time to figure out a way ro resolve an issue is right now and passion is the driving force behind it.</p>

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
                                        <p class="dark-text font-16">We believe that emerging economies like India need the drive of new and young breed of worthy entrepreneurs who target their efforts on innovative way to technologically address the genuine needs of billions of people. <a href="https://ecell.org.in/" target="_blank">KIIT E-Cell</a> targets to enhance entrepreneurship culture among students with East India's largest inbuilt techonology business incubator, <a href="https://ecell.org.in/tbi-initiatives" target="_blank">KIIT TBI</a>. </p>
                                        <p class="dark-text font-16"> This is achieved through a number of activities such as Discussion Forums, Speaker sessions, B-Plan activities, E-Schools amd many more such concepts.</p>

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
                                        <p class="dark-text font-16">KIIT E-Cell has started a number of initiatives. The Chief amongst them are:<br>
                                            <a href="https://ecell.org.in/initiatives#ml" target="_blank">Maker's Lab</a> It is our newest initiative through which we will set up an incubation space for startups where they can come and work together.The startups will be provided with proper guidance of mentors, required technological support and the proper resources.</p>
                                        <p class="dark-text font-16"> <a href="https://ecell.org.in/initiatives#ml" target="_blank"> Startup Club </a> The startups from Maker's Lab which have their Minimum Viable Product (MVP) ready, will be promoted to Startup Club for operations.</p>
                                        <p class="dark-text font-16"><a href="https://ecell.org.in/initiatives#ml" target="_blank"> Community Learning </a> This initiative helps our members to learn and master the skills which they wish to develop.</p>
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
                                        <p class="dark-text font-16"> We at ECell have been able to guide the students who have brought forward their ideas, whether it is the stage to pitch in the idea, to formaulate, to process it, or to guide it through a path of comepletion. </p>
                                        <p class="dark-text font-16"> We not only provide mentorship but also investors and workspace. Currently we have 12 startups under our umbrella.</p>

                                    </div>

                                    <div class="col-md-6">
                                        <img src="Esummit18/assets/img/workstation2.jpg" alt="image" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.icon-tab -->

            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</section>


<section class="section-padding event-banner-1 bg-fixed parallax-bg overlay black-overlay" data-stellar-background-ratio="0.5" id="about_esummit">
    <div class="container">

        <h2 class="font-40 mb-30 white-text">What is E-SUMMIT '18?</h2>

        <div class="row">
            <div class="col-md-7 white-text">

                <p>
                    The main goal that KIIT Entrepreneurship Cell aims to achieve with KIIT Entrepreneurship Summit 2018 is to bring people having different interests from all over university and all over India, on a common platform, create an open dialogue, engage them and in this process, instill the spirit of Entrepreneurship which will ultimately add greater workforce in KIIT Startup Community.
                </p>
                <p>
                    The main event will comprise of four tracks- Technology, Innovation, Marketing and Startup Planet. All the delegates of KIIT E-Summit '18 will be allowed to choose any one track depending upon their choice and interest. <br> Throughtout the event, all the sessions, workshops and competitions that they will take part in, will be revolving around that particular track.
                </p>


                <a href="#join" class="waves-effect waves-light btn pink"> Join Now!</a>
            </div>
            <!-- /.col-md-7 -->

            <div class="col-md-5"> <img src="Esummit18/assets/img/logo_white.png" height="150px" width="400px"></div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!--content promo box start-->
<section class="content-promo-box banner padding-top-100 padding-bottom-120 gray-bg">
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


<section class="content-promo-box  padding-top-100 padding-bottom-120">
    <div class="container">
        <div class="row">

            <h2 class="font-30 text-extrabold mb-30 text-uppercase">Key Highlights of E-Summmit'18</h2>


            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="table-contents text-center">
                        <div class="table-header brand-hover">
                            <div class="package-name">
                                <span>Free Sessions</span>
                            </div>

                            <div class="package-price">
                                <span class="currency-symbol">$</span>

                            </div>
                        </div>
                        <!-- /.table-header -->

                        <div class="table-info">
                            <ul>
                                <li class="text-bold text-black">Talk on "How to make money online"</li>
                                <li class="text-bold">Mad Talk by MAD OVER MARKETING</li>

                            </ul>
                        </div>
                        <!-- /.table-info -->

                        <div class="table-footer">
                            <div class="purchase-button">
                                <a class="btn btn-lg text-capitalize waves-effect waves-light" href="">Buy Now</a>
                            </div>
                        </div>
                        <!-- /.table-footer -->
                    </div>
                    <!-- /.table-contents -->
                </div>
                <!-- /.pricing-table -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2 class="text-bold">Social Night</h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp;Networking with <strong>investors and CEO's.</strong>
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp; Networking Dinner
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp; Community Meetups
                </h2>
            </div>
            <div class="col-md-4">
                <h2 class="text-bold">Certificates and prizes to all participants</h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp; Prizes worth Rs <strong>1 lac</strong>
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"> <i class="material-icons">star</i>&nbsp;Grant worth Rs <strong>15 lacs</strong>
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp;Incubation and Mentorship
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"> <i class="material-icons">star</i>&nbsp;Investor's Pitch
                </h2>
            </div>
            <div></div>

        </div>
    </div>
</section>


<section class="content-promo-box  padding-top-100 padding-bottom-120">
    <div class="container">
        <div class="row">

            <h2 class="font-30 text-extrabold mb-30 text-uppercase">Key Highlights of E-Summmit'18</h2>


            <div class="col-md-4">

                <h2 class="text-bold">&nbsp;Interactive Talk by an YouTuber
                </h2>

                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>Interactive talk by an YouTuber</h2>
                <!--  <img src="Esummit18/assets/img/youtube.jpg" alt="E-Summit KIIT"> -->

                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>"The Mad Talk"&nbsp;by MAD OVER MARKETING</h2>
            </div>
            <div class="col-md-4">
                <h2 class="text-bold">Social Night</h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp;Networking with <strong>investors and CEO's.</strong>
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp; Networking Dinner
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp; Community Meetups
                </h2>
            </div>
            <div class="col-md-4">
                <h2 class="text-bold">Certificates and prizes to all participants</h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp; Prizes worth Rs <strong>1 lac</strong>
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"> <i class="material-icons">star</i>&nbsp;Grant worth Rs <strong>15 lacs</strong>
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"><i class="material-icons">star</i>&nbsp;Incubation and Mentorship
                </h2>
                <h2 class="font-16 text-uppercase text-roboto"> <i class="material-icons">star</i>&nbsp;Investor's Pitch
                </h2>
            </div>
            <div></div>

        </div>
    </div>
</section>

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
            <h2 class="section-title text-uppercase text-extrabold">E-Summit '18 Tracks Intro</h2>
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
<section class="section-padding" id="2">
    <div class="container">

        <!--
        <div class="text-center mb-80">
            <img src="Esummit18/assets/img/logo-combo.png" alt="">

            <p class="section-title">Presents</p>
            <h2 class="section-title text-uppercase text-extrabold" id="aboutus">KIIT Entrepreneurship Summit 2018</h2>
            <p class="section-sub dark-text font-20 font-roboto">E-Summit is Eastern India's largest business and technology acquaintance to the youth with thousands of participants from across the country.</p>

        </div>
-->

        <div class="row">
            <div class="col-md-12">

                <div class="round-tab text-center">
                    <h1 class="text-bold mb-40">Schedule</h1>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-22" class="waves-effect waves-light" role="tab" data-toggle="tab"> Innovation Track</a></li>
                        <li role="presentation"><a href="#tab-23" class="waves-effect waves-light" role="tab" data-toggle="tab">Business Track</a></li>
                        <li role="presentation"><a href="#tab-24" class="waves-effect waves-light" role="tab" data-toggle="tab">Tech Track</a></li>
                        <li role="presentation"><a href="#tab-25" class="waves-effect waves-light" role="tab" data-toggle="tab">Startup Track</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="panel-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-22">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td>"Brand first or Sell first" (C7- AUDI) (Saurabh Uboweja, Founder, CEO & Chief Brand Strategy, Brands of Desire) (Open for All Participants) </td>
                                                        
                                                        <td rowspan="3">MAKOVATION (C-12, AUDI)




                                                        </td>
                                                        <td rowspan="1">"WOMEN IN TECHNOLOGY AND CONNECTED DEVICES" BY DIKSHA DEO, Founder & Chief Innovation Officer, IncubSENCE(Audi, C6)				

</td>

                                                    </tr>
                                                    <tr>  
                                                        <th>11 AM - 12 PM</th>
                                                        <td rowspan="1">"Creating an Innovation Mindset (The Change Begins with You)" BY AKASH SHUKLA, C12, Audi
                                                        </td>
                                                        <td rowspan="3">MAKOVATION PITCHING SESSION (CAMPUS 12, AUDI)</td>
                                                     





                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>
                                                        <td>WORKSHOP ON DESIGN THINKING STARTS! (C12, Audi)</td>




                                                    </tr>

                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>
                                                        <td rowspan="3"> WORKSHOP ON DESIGN THINKING (C12, Audi)





                                                        </td>
                                                        
                                                        <td rowspan="4">MAKOVATION(C-12, AUDI)





                                                        </td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>
                                                        <td rowspan="2">MAKOVATION PITCHING SESSION (CAMPUS 12, AUDI)







                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>




                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>
                                                        <td rowspan="2">"The MAD Talk" by Mad Over Marketing(Siddhant Moore, Founder MOM) (C7- AUDI) (Open for All Participants)
                                                        </td>
                                                        <td rowspan="2">Closing Ceremony
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>
                                                        <td>Cool Session-"Making money with Youtube and Coding"(C6- AUDI) by Hitesh Choudhary, Tech Video Creator at Youtube (Open for All Participants) </td>



                                                    </tr>
                                                    <tr>
                                                        <th>10 AM - 5PM</th>
                                                        <td colspan="2" style="text-align: centre;">S T A R T U P F A I R </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-23">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td>"Brand first or Sell first" (C7- AUDI) (Saurabh Uboweja, Founder, CEO & Chief Brand Strategy, Brands of Desire) (Open for All Participants) </td>
                                                        <td rowspan="3">Session on SEO,SMO, and Adwords (C7- AUDI)- ADVIT SAHADEV


                                                        </td>
                                                        <td>"WOMEN IN TECHNOLOGY AND CONNECTED DEVICES" BY DIKSHA DEO(SEMINAR HALL 1, C6) </td>

                                                    </tr>
                                                    <tr>
                                                        <th>11 AM - 12 PM</th>
                                                        <td rowspan="2">"An opportunity to become your own Boss" BY ASHISH MOHANTY, Founder 9start (C-7, AUDI)
                                                        </td>
                                                        <td rowspan="3">BUSINESS SIMULATION GAME (CH-5, C6)

                                                        </td>





                                                    </tr>
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>




                                                    </tr>

                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>
                                                        <td rowspan="3">"HOW TO BUILD A CASE STUDY" (C7- AUDI)



                                                        </td>
                                                        <td rowspan="4">CASE STUDY COMPETITION (C7- AUDI)


                                                        </td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>
                                                        <td rowspan="2">BUSINESS SIMULATION GAME (CH-5, C6)





                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>




                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>
                                                        <td rowspan="2">"The MAD Talk" by Mad Over Marketing(Siddhant Moore, Founder MOM) (C7- AUDI) (Open for All Participants)
                                                        </td>
                                                        <td rowspan="2">Closing Ceremony
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>
                                                        <td>Cool Session-"Making money with Youtube and Coding"(C6- AUDI) by Hitesh Choudhary, Tech Video Creator at Youtube (Open for All Participants) </td>



                                                    </tr>
                                                    <tr>
                                                        <th>10 AM - 5PM</th>
                                                        <td colspan="2" style="text-align: centre;">S T A R T U P F A I R </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-24">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td>"Brand first or Sell first" (C7- AUDI) (Saurabh Uboweja, Founder, CEO & Chief Brand Strategy, Brands of Desire) (Open for All Participants) </td>
                                                        <td rowspan="2">DESIGN MEETUP (CH-8, C6) BY RAMAKRISHNA V
                                                        </td>
                                                        <td>"WOMEN IN TECHNOLOGY AND CONNECTED DEVICES" BY DIKSHA DEO(SEMINAR HALL 1, C6) </td>

                                                    </tr>
                                                    <tr>
                                                        <th>11 AM - 12 PM</th>
                                                        <td rowspan="2">FlytCODE (C-6, BANQUET HALL) BY ACHAL NEGI, Head of Business Development FLYTBASE Inc	
	</td>
                                                        <td rowspan="3">FlytCODE (CH-8, C6) and WORKSHOP ON BLOCKCHAIN (SEMINAR HALL 1, C6)



</td>





                                                    </tr>
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>
                                                        <td>FlytCODE (CH-5, C-6) and WORKSHOP ON AR/VR Lab C6</td>



                                                    </tr>

                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>
                                                        <td rowspan="3">fLYTcode(C-6, BANQUET HALL)

                                                        </td>
                                                        <td rowspan="4">FlytCODE (CH-5, C-6) and WORKSHOP ON AR/VR Lab C6</td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>
                                                        <td rowspan="2">FlytCODE (CH-8, C6) and WORKSHOP ON BLOCKCHAIN (SEMINAR HALL 1, C6)







                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>




                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>
                                                        <td rowspan="2">"The MAD Talk" by Mad Over Marketing(Siddhant Moore, Founder MOM) (C7- AUDI) (Open for All Participants)
                                                        </td>
                                                        <td rowspan="2">Closing Ceremony
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>
                                                        <td>Cool Session-"Making money with Youtube and Coding"(C6- AUDI) by Hitesh Choudhary, Tech Video Creator at Youtube (Open for All Participants) </td>



                                                    </tr>
                                                    <tr>
                                                        <th>10 AM - 5PM</th>
                                                        <td colspan="2" style="text-align: centre;">S T A R T U P F A I R </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                                                <div role="tabpanel" class="tab-pane fade in active" id="tab-25">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td>"Brand first or Sell first" (C7- AUDI) (Saurabh Uboweja, Founder, CEO & Chief Brand Strategy, Brands of Desire) (Open for All Participants)			</td>
                                                        <td rowspan="3">STARTUP MEET in Association with Google Business Group (CH-6, C6)
</td>
                                                        <td>"WOMEN IN TECHNOLOGY AND CONNECTED DEVICES" BY DIKSHA DEO(SEMINAR HALL 1, C6)				</td>

                                                    </tr>
                                                    <tr>
                                                        <th>11 AM - 12 PM</th>
                                                         <td rowspan="2">STARTUP MEET in Association with Google Business Group (CH-6, C6)</td>
                                                         <td rowspan="3">STARTUP MEET in Association with Google Business Group (CH-6, C6)</td>





                                                    </tr>
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>
                                                



                                                    </tr>

                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>
                                                        <td rowspan="3"> STARTUP MEET in Association with Google Business Group (CH-6, C6)







                                                        </td>
                                                        
                                                        <td rowspan="4">STARTUP MEET in Association with Google Business Group (CH-6, C6)







                                                        </td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>
                                                        <td rowspan="2">STARTUP MEET in Association with Google Business Group (CH-6, C6)









                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>




                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>
                                                        <td rowspan="2">"The MAD Talk" by Mad Over Marketing(Siddhant Moore, Founder MOM) (C7- AUDI) (Open for All Participants)
                                                        </td>
                                                        <td rowspan="2">Closing Ceremony
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>
                                                        <td>Cool Session-"Making money with Youtube and Coding"(C6- AUDI) by Hitesh Choudhary, Tech Video Creator at Youtube (Open for All Participants) </td>



                                                    </tr>
                                                    <tr>
                                                        <th>10 AM - 5PM</th>
                                                        <td colspan="2" style="text-align: centre;">S T A R T U P F A I R </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.border-bottom-tab -->

            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
</section>

<section class="content-promo-box padding-top-100 padding-bottom-120 gray-bg" id="tracks">
    <div class="container">

        <div class="row">
            <h1 class="font-90 black-text text-extrabold text-uppercase">Explore All Tracks</h1>
            <p class="black-text mb-40 font-20"> Keeping in mind the requirements and interests of the students, as well as the current industry trends, we have designed the following four tracks for the participants.</p>

            <div class="col-sm-3">
                <a href="techtrack" target="_blank">
                    <div class="featured-item border-box radius-4 hover brand-hover">
                        <img src="Esummit18/assets/img/tech_track_poster.jpg" alt="Tech Track">
                    </div>
                    <!-- /.featured-item -->
                </a>
            </div>
            <div class="col-sm-3">
                <a href="innovationtrack" target="_blank">
                    <div class="featured-item border-box radius-4 hover  brand-hover-innovation">
                        <img src="Esummit18/assets/img/innovation_track_poster.jpg" alt="Innovation Track">

                    </div>
                    <!-- /.featured-item -->
                </a>
            </div>
            <div class="col-sm-3">
                <a href="businesstrack" target="_blank">
                    <div class="featured-item border-box radius-4 hover brand-hover-business">
                        <img src="Esummit18/assets/img/business_track_poster.jpg" alt="Innovation Track">
                    </div>
                    <!-- /.featured-item -->
                </a>
            </div>
            <div class="col-sm-3">
                <div class="featured-item border-box radius-4 hover brand-hover-startup">
                    <img src="Esummit18/assets/img/startup_track_poster.jpg" alt="Startup Planet Track">

                </div>
                <!-- /.featured-item -->
            </div>
        </div>
    </div>
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
                            <span class="dark-text">Workshops</span>
                          </a>
                            </h3>
                        </div>
                        <div id="collapse-one" class="panel-collapse collapse in">
                            <div class="">
                                <h2 class="font-20 line-height-40 font-roboto">
                                    Turbocharged workshops on <strong>Augmented Reality</strong> and <strong>Virtual Reality</strong>.Workshop on <strong>blockchain</strong> so you find out what it is and why you need to know about it and Dynamic workshop on <strong>Design Thinking.</strong>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-two">
                            <span class="dark-text">Sessions</span>
                          </a>
                            </h3>
                        </div>
                        <div id="collapse-two" class="panel-collapse collapse">
                            <div class="">
                                <h2 class="font-20 line-height-40 font-roboto">
                                    Hard Hitting sessions on <strong>HR and Operations,SEO,SMO,Adwords,Inbound Marketing and Content Entrepreneurship.</strong>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-three">
                            <span class="dark-text">Pitching</span>
                          </a>
                            </h3>
                        </div>
                        <div id="collapse-three" class="panel-collapse collapse">
                            <div class="">
                                <h2 class="font-20 line-height-40 font-roboto">
                                    Break a leg! You get to pitch your ideas to India’s biggest investors and mentors.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-four">
                            <span class="dark-text">Youtuber and Mad Talk</span>
                          </a>
                            </h3>
                        </div>
                        <div id="collapse-four" class="panel-collapse collapse">
                            <div class="">
                                <h2 class="font-20 line-height-40 font-roboto">
                                    Fresh off the press,we have the <strong>best youtubers</strong> coming up and our very favorite <strong>mad talk over marketing.</strong>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-one" href="#collapse-five" class="collapsed">
                            <span class="dark-text">Hackdrone and Makovation</span>
                          </a>
                            </h3>
                        </div>
                        <div id="collapse-five" class="panel-collapse collapse">
                            <div class="">
                                <h2 class="font-20 line-height-40 font-roboto">
                                    Enthralling and unique kind of <strong>hackathon</strong> for product development and <strong>drone building.</strong>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->

            <div class="col-md-6">
                <h2 class="font-25 text-bold text-uppercase mb-30">KIIT E-Summit '18 Official Trailer</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9akwOPXrAVo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

        </div>
    </div>
    <!-- /.container -->
</section>



<section class="section-padding" id="2">
    <div class="container">



        <div class="row">
            <div class="col-md-12">

                <div class="round-tab text-center">
                    <h1 class="text-bold mb-40">Schedule</h1>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-22" class="waves-effect waves-light" role="tab" data-toggle="tab"> Innovation Track</a></li>
                        <li role="presentation"><a href="#tab-23" class="waves-effect waves-light" role="tab" data-toggle="tab">Business Track</a></li>
                        <li role="presentation"><a href="#tab-24" class="waves-effect waves-light" role="tab" data-toggle="tab">Tech Track</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="panel-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-22">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td rowspan="3">MAKOVATION <br> Venue:&nbsp; C-12, AUDI </td>
                                                        <td rowspan="2">DESIGN MEETUP <br> Venue:&nbsp;CH-8 ,C6 <br> Speaker:&nbsp;RAMAKRISHNA V
                                                        </td>
                                                        <td>KEYNOTE SESSION <br> Speaker:&nbsp; DIKSHA DEO <br> Venue:&nbsp;SEMINAR HALL 1, Campus-6 </td>

                                                    </tr>
                                                    <tr>
                                                        <th>11 AM - 12 PM</th>
                                                        <td rowspan="2">Workshop on Design Thinking starts</td>
                                                        <td rowspan="2">
                                                            MAKOVATION PITCHING SESSION <br> Venue:&nbsp;CAMPUS 12, AUDI


                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>
                                                        <td>FLYTcode <br> Venue:&nbsp;Conference Hall:5,Campus-6 and <br> Workshop on AR/VR <br> Venue:&nbsp;Lab 6
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>




                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>

                                                        <td rowspan="4">FlytCODE <br> Venue:&nbsp;Conference Hall-5,Campus-6 and<br> Workshop on AR/VR <br> Venue:&nbsp;Lab c6
                                                        </td>
                                                        <td rowspan="4">MAKOVATION <br> Venue:&nbsp;C-12, AUDI</td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>
                                                        <td rowspan="2">Makovation starts</td>
                                                        <td rowspan="2">Pitching</td>
                                                        <td rowspan="3">
                                                            MAKOVATION PITCHING SESSION <br> Venue:&nbsp;CAMPUS 12, AUDI


                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>



                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>

                                                        <td rowspan="2">Interactive Talk by YouTuber</td>
                                                        <td rowspan="2">
                                                            Cool Session-"Making money with Youtube and Coding"<br> Venue:&nbsp;C6- AUDI <br> Speaker:&nbsp; Hitesh Choudhary, Tech Video Creator at Youtube Open for All Participants
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>



                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-23">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td rowspan="">"Brand first or Sell first" Keynote Session <br> Venue:&nbsp; C7- AUDI <br> Speaker:&nbsp;Saurabh Uboweja, Founder, CEO & Chief Brand Strategy, Brands of Desire </td>
                                                        <td rowspan="3">Session on SEO,SMO, and Adwords <br> Venue:&nbsp; C7- AUDI <br> Speaker:&nbsp; ADVIT SAHADEV

                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>11 AM - 12 PM</th>
                                                        <td rowspan="2">
                                                            CONTENT ENTREPRENEURSHIP <br> Speaker:&nbsp; ASHISH MOHANTY, Founder 9start <br> Venue:&nbsp; C-7, AUDI

                                                        </td>
                                                        <td rowspan="2">
                                                            BUSINESS SIMULATION GAME <br> Venue:&nbsp;Conference Hall-5, Campus6


                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>




                                                    </tr>
                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>




                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>
                                                        <td rowspan="3">"HOW TO BUILD A CASE STUDY" <br> Venue:&nbsp;C7- AUDI

                                                        </td>
                                                        <td rowspan="4">
                                                            Case Study Competetion <br> Venue:&nbsp;Campus-7,Audi
                                                        </td>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>
                                                        <td rowspan="3">
                                                            BUSINESS SIMULATION GAME <br> venue:&nbsp; Conference Hall-5, Campus6


                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>



                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>
                                                        <td rowspan="2">"The MAD Talk" by Mad Over Marketing <br> Speaker:&nbsp;Siddhant More, Founder MOM <br> Venue:&nbsp;C7- AUDI
                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>
                                                        <td></td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-24">
                                <p>
                                    <div class="col-xs-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Time/Date</th>
                                                        <th>March 9</th>
                                                        <th>March 10</th>
                                                        <th>March 11</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th>10 AM - 11 AM</th>
                                                        <td>"Brand first or Sell first" Keynote Session <br> Venue:&nbsp; C7- AUDI <br> Speaker:&nbsp;Saurabh Uboweja, Founder, CEO & Chief Brand Strategy, Brands of Desire </td>


                                                    </tr>
                                                    <tr>
                                                        <th>11 AM - 12 PM</th>
                                                        <td rowspan="2">
                                                            FlytCODE <br> Venue: &nbsp;C-6, BANQUET HALL <br> Speaker:&nbsp; ACHAL NEGI, Head of Business Development FLYTBASE Inc

                                                        </td>
                                                        <td rowspan="3">
                                                            FlytCODE <br> Venue: Conference Hall-8, Campus-6 and <br> WORKSHOP ON BLOCKCHAIN <br> Venue:SEMINAR HALL 1, C6




                                                        </td>





                                                    </tr>
                                                    <tr>
                                                        <th>12 PM - 1 PM</th>



                                                    </tr>
                                                    <tr>
                                                        <th>1 PM - 2 PM</th>
                                                        <td>Lunch</td>


                                                    </tr>
                                                    <tr>
                                                        <th>2 PM - 3 PM</th>
                                                        <td rowspan="3">
                                                            FLYTcode <br> Venue:&nbsp;C-6,Banquet Hall
                                                        </td>
                                                        <td>Lunch</td>
                                                        <td>Lunch</td>

                                                    </tr>
                                                    <tr>
                                                        <th>3 PM - 4 PM</th>


                                                        <td rowspan="3">
                                                            FlytCODE <br> Venue: Conference Hall-8, Campus-6 and <br> WORKSHOP ON BLOCKCHAIN <br> Venue:SEMINAR HALL 1, C6

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>4 PM - 5 PM</th>



                                                    </tr>
                                                    <tr>
                                                        <th>5 PM - 6 PM</th>
                                                        <td rowspan="2">"The MAD Talk" by Mad Over Marketing <br> Speaker:&nbsp;Siddhant More, Founder MOM <br> Venue:&nbsp;C7- AUDI
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <th>6 PM - 7 PM</th>
                                                        <td>Cool Session-"Making money with Youtube and Coding"<br> Venue:&nbsp;C6- AUDI <br> Speaker:&nbsp; Hitesh Choudhary, Tech Video Creator at Youtube</td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.border-bottom-tab -->

            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
</section>

<section id="join" class="section-padding event-banner-2 bg-fixed parallax-bg  overlay purple-overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 white-text">
                <h2 class="font-40 mb-30 white-text line-height-50"><span class="text-bold brand-color">Hurry Up!</span> Limited seats available for each track.</h2>

                <p>Register Now and Get a chance win cash prizes.<br> Pitch your Idea and get a chance for Incubation, Grant Money, and many more facilities.</p>
                <p>Showcase your innovative products and get more audience and also get a chance to pitch your Idea.</p>


                <br>



            </div>
            <!-- /.col-md-6 -->



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

                            </div>
                            <!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <div class="input-field">
                                    <input id="phone" type="tel" name="phone" class="validate">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->

                        </div>
                        <!-- /.row -->

                        <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="newEmail" type="email" name="newEmail" class="validate">
                            <label for="newEmail" data-error="wrong" data-success="right">Email</label>
                        </div>

                        <div class="input-field">
                            <label class="sr-only" for="email">Password</label>
                            <input id="newPass" type="password" name="newPass" class="validate">
                            <label for="newPass" data-error="wrong" data-success="right">Password</label>
                        </div>
                        <div class="input-field">
                            <label class="sr-only" for="">Repeat Password</label>
                            <input id="repeatPass" type="password" name="repeatPass" class="validate">
                            <label for="repeatPass" data-error="wrong" data-success="right">Repeat Password</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="ref_id" class="validate" id="ref_id">
                            <label for="ref_id">Referral Id</label>
                        </div>
                        <button type="submit" class="waves-effect waves-light btn blue mt-30">Register Now</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<section class="section-padding" id="speaker">
    <div class="container">

        <div class="text-center mb-80">
            <h2 class="section-title text-uppercase text-extrabold">Previous Speakers!</h2>
            <h5 class="text-uppercase text-bold">(Conclave Of Entrepreneurship, Leadership and Technology)</h5>
            <p class="section-sub dark-text font-16">Conclave of Entrepreneurship Leadership and Technology (CELT), at KIIT University, Bhubaneswar was aimed at fostering entrepreneurial skill among the students worldwide and enabling the process of identifying, nurturing, training and establishing startups.<br />It promoted openness of knowledge, network, contacts and opportunities</p>

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
                    </div>
                    <!-- /author-info-wrapper -->
                </div>
                <!-- /.widget_tt_author_widget -->
            </div>
            <!-- /.col-md-4 -->

            <div class="col-md-4">
                <div class="widget widget_tt_author_widget featured-item flat-border-box">

                    <div class="author-info-wrapper">
                        <div class="author-avatar">
                            <img src="Esummit18/assets/img/speakers/apurv-chamaria-celt.jpg" alt="">


                            <h2>Apurva Chamaria</h2>
                            <span>Vice President,HCL Technologies</span>
                        </div>

                        <p>Apurva Chamaria is the Vice President and Head of Corporate Marketing for HCL Technologies, a 7 Bn US$ global IT major. </p>
                        <hr>
                        <br>
                        <hr>

                        <hr>
                    </div>
                    <!-- /author-info-wrapper -->
                </div>
                <!-- /.widget_tt_author_widget -->
            </div>
            <!-- /.col-md-4 -->


            <div class="col-md-4">
                <div class="widget widget_tt_author_widget featured-item flat-border-box">

                    <div class="author-info-wrapper">
                        <div class="author-avatar">
                            <img src="Esummit18/assets/img/speakers/balaji-viswanathan-celt.png">


                            <h2>Mr. Balaji Viswanathan</h2>
                            <span>CEO of Invento Robotics</span>
                        </div>

                        <p>To all Quora readers Mr. Balaji Viswanathan, one of India's most followed and viewed writers on Quora.. He was a part of "Windows 7" Core development team and then was a part of the startup factory at Live Labs, Microsoft.
                        </p>

                        <hr>
                        <br>
                        <hr>

                        <hr>
                    </div>
                    <!-- /author-info-wrapper -->
                </div>
                <!-- /.widget_tt_author_widget -->
            </div>
            <!-- /.col-md-4 -->



        </div>
        <!-- /.row -->

        <a href="speakers" target="_blank">
            <h5 class="text-uppercase grey-text text-bold" style="color: #ff3e3e;">View All Speakers...</h5>
        </a>

    </div>
    <!-- /.container -->
</section>






<section id="sponsor" class="section-padding">
    <div class="container">

        <div class="text-center mb-80 wow fadeInUp">
            <h2 class="section-title text-uppercase text-extrabold">Previous Sponsors</h2>
            <p class="section-sub"></p>
        </div>



        <div class="clients-grid no-gutter">


            <div class="col-md-3 col-sm-6">
                <h3 class="text-bold">Title Sponsor</h3>
                <div class="border-box">
                    <img src="Esummit18/assets/img/sponsors/jindal.png" alt="Jindal steel">
                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->



            <div class="col-md-3 col-sm-6">
                <h3 class="text-bold">Mobility Partner</h3>
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/ola.png" alt="Ola Cabs">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->


            <div class="col-md-3 col-sm-6">
                <h3 class="text-bold">Printing Partner</h3>
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/printview.png" alt="print view">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">
                <h3 class="text-bold">Food & Beverage Partner</h3>
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/redbull.png" alt="redbull">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/carrer_launcher.png" alt="career launcher">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->



            <div class="col-md-3 col-sm-6">
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/uber.png" alt="uber">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->



            <div class="col-md-3 col-sm-6">
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/crowdera.png" alt="crowdera">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->


            <div class="col-md-3 col-sm-6">
                <div class="border-box">

                    <img src="Esummit18/assets/img/sponsors/zomato.jpg" alt="zomato">

                </div>
                <!-- /.border-box -->
            </div>
            <!-- /.col-md-3 -->

        </div>

        <br>
        <a href="sponsors" target="_blank">
            <h5 class="text-uppercase grey-text text-bold" style="color: #ff3e3e;">See List of Sponsors...</h5>
        </a>


</section>
@endsection @section('scripts')
<script src="https://unpkg.com/sweetalert2@7.11.0/dist/sweetalert2.all.min.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider-min.js" async></script>
<script type="text/javascript">
    function newsletterModal() {
        swal({
            title: '<img class="mail-icon" src="/Esummit18/assets/img/newsletter.png">',
            html: '<b>Enter you email to get our latest news before everybody else.</b><br>',
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
                    var data = {
                        "email": email,
                        "_token": '{{ csrf_token() }}'
                    };
                    $.ajax({
                        url: '/newsletter/register',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                    }).done(function(response) {

                        if (response.type == 'success') {
                            swal('Awesome!', response.message, 'success');
                        } else {
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


    $(document).ready(function() {
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
        if (event.data === 0) {
            $('.gallery-thumb').flexslider("next");
        }
    }

</script>

@endsection
