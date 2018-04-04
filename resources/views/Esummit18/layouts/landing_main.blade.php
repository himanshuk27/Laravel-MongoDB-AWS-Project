<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,user-scalable=no">
    <meta name="description" content="@yield('description')" />
    <meta name="author" content="Team KIIT E-Cell 2017-2018">
    <meta name="keywords" content="@yield('keywords')">

    <link rel="apple-touch-icon" sizes="57x57" href="/Esummit18/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/Esummit18/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/Esummit18/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/Esummit18/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Esummit18/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/Esummit18/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/Esummit18/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/Esummit18/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/Esummit18/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/Esummit18/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Esummit18/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/Esummit18/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Esummit18/favicons/favicon-16x16.png">
    <link rel="manifest" href="/Esummit18/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">


    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- FontAwesome CSS -->
    <link href="Esummit18/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Material Icons CSS -->
    <link href="Esummit18/assets/fonts/iconfont/material-icons.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="Esummit18/assets/css/animate.min.css" rel="stylesheet">
    <!-- materialize -->
    <link href="Esummit18/assets/vendors/materialize/materialize.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <!--link href="Esummit18/assets/bootstrap/bootstrap.min.css" rel="stylesheet"-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- shortcodes -->
    <link href="Esummit18/assets/css/shortcodes/shortcodes.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="Esummit18/assets/css/style.css" rel="stylesheet">

    <link href="Esummit18/assets/skins/esummit18.css" rel="stylesheet">


    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="Esummit18/assets/vendors/revolution/css/settings.css">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="Esummit18/assets/vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="Esummit18/assets/vendors/revolution/css/navigation.css"> @yield('css')

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '111549111', 'auto');
        ga('send', 'pageview');

    </script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>

<body id="top" data-spy="scroll" data-target="#materialize-menu" data-offset="100">


    <!--header start-->
    <header id="header" class="tt-nav transparent-header">

        <div class="header-sticky semi-transparent">

            <div class="container">
                <div id="materialize-menu" class="menuzord">

                    <!--logo start-->
                    <a href="/" class="logo-brand">
                            <img src="Esummit18/assets/img/logo_small.png" alt=""/>
                        </a>
                    <!--logo end-->

                    <!-- onepage menu start-->
                    <ul class="nav menuzord-menu pull-right light op-nav">
                        <li>
                            <a href="/" data-scroll>Home</a>
                        </li>
                        <li>
                            <a href="/campuspreneur">Campuspreneur</a>
                        </li>
                        <li>
                            <a href="/#aboutus" data-scroll>About E-Summit '18 </a>
                        </li>
                        <li>
                            <a href="/#speaker" data-scroll>Previous Speakers</a>
                        </li>
                       
                        <li><a href="javascript:void(0)">Tracks</a>
                            <ul class="dropdown">
                                <li><a href="innovationtrack">Innovation Track</a></li>
                                <li><a href="businesstrack">Business Track</a></li>
                                <li><a href="techtrack">Tech Track</a></li>
                                <li><a href="startuptrack">Startup Planet</a></li>
                            </ul>
                        </li>
                        <!--li>
                                <a href="/#schedule" data-scroll>Schedule</a>
                            </li-->

                        <li>
                            <a href="/#sponsor" data-scroll>Sponsor</a>
                        </li>

                        <li>
                            <a href="/#join" class="join-btn" data-scroll>Register</a>
                        </li>
                        <li>
                            <a href="/dashboard" class="join-btn">Sign In</a>
                        </li>
                    </ul>

                    <!-- onepage menu end-->

                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    @yield('content')


    <footer class="footer footer-four">
        <div class="primary-footer dark-bg text-center">
            <div class="container">

                <a id="up" href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>

                <ul class="social-link tt-animate ltr mt-20">
                    <li><a target="_blank" href="https://www.facebook.com/kiitecell"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/kiit_ecell"><i class="fa fa-twitter"></i></a></li>

                    <li><a target="_blank" href="https://www.linkedin.com/company/13346906/"><i class="fa fa-linkedin"></i></a></li>

                    <li><a target="_blank" href="https://www.instagram.com/ecell_kiit/"><i class="fa fa-instagram"></i></a></li>

                </ul>

                <hr class="mt-10">

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            <img style="width: 192px; height:72px;" src="Esummit18/assets/img/logo_white.png" alt="E-Summit'18 Logo">
                        </div>

                        <span class="copy-text">Copyright &copy; 2018 <a href="https://ecell.org.in/">KIIT ECell</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Designed By <a href="#">ECell Web Team</a> &nbsp; | &nbsp; <a href="faq">FAQ</a></span>

                        <p>
                            <span class="copy-text">For General Queries,contact +91 8917412458(Sugandha)</span> &nbsp; | &nbsp;
                            <span class="">For Website Queries,contact +91 9434583497(Soumyadeep)</span><br>


                            <span class="copy-text">For Track Queries,contact +91 8763722872 (Sam)</span> &nbsp; | &nbsp;
                            <span class="">For Payment  Queries,contact +91 8839322705 (Ayush)</span>
                        </p>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        </div>
        <!-- /.primary-footer -->


    </footer>

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-position">
            <img style="width:240px; height: 90px;" src="Esummit18/assets/img/logo.png" alt="E-Summit'18 Logo">
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>

    @yield('modal')

    <!-- jQuery -->
    <script src="Esummit18/assets/js/jquery-3.2.1.min.js"></script>
    <script src="Esummit18/assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="Esummit18/assets/bootstrap/bootstrap.min.js"></script>
    <script src="Esummit18/assets/vendors/materialize/materialize.min.js"></script>
    <script src="Esummit18/assets/js/menuzord.js"></script>
    <script src="Esummit18/assets/js/bootstrap-tabcollapse.min.js"></script>
    <script src="Esummit18/assets/js/jquery.easing.min.js" async></script>
    <script src="Esummit18/assets/js/smooth-menu.js" async></script>
    <script src="Esummit18/assets/js/jquery.stellar.min.js" async></script>
    <script src="Esummit18/assets/js/imagesloaded.js" async></script>
    <script src="Esummit18/assets/js/jquery.inview.min.js" async></script>
    <script src="Esummit18/assets/js/wow.min.js" async></script>
    <!--script src="Esummit18/assets/vendors/flexSlider/jquery.flexslider-min.js"></script-->
    <script src="Esummit18/assets/js/scripts.js"></script>

    <script>
        new WOW({
            mobile: false
        }).init();

    </script>

    <!-- RS5.0 Core JS Files -->
    <script src="Esummit18/assets/vendors/revolution/js/jquery.themepunch.tools.min.js" async></script>
    <script src="Esummit18/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js" async></script>

    <!-- RS5.0 Init  -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".materialize-parallax").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [700, 600, 500, 500],
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    disable_onmobile: "on"
                },

            });
        });

    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5a4ab212d7591465c706772b/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <!--End of Tawk.to Script-->

    <script type="text/javascript">
        $('#regForm').on('submit', function(e) {

            e.preventDefault();

            var $action = "login/newReg";
            var $data = $(this).serialize();
            var $this = $(this);

            $this.prevAll('.alert').remove();

            var pass1 = $("#newPass").val();
            var pass2 = $("#repeatPass").val();

            if (pass1 == pass2) {
                if (pass1.length >= 5) {
                    $.ajax({
                        url: $action,
                        type: 'POST',
                        data: $data,
                        dataType: 'json',

                        success: function(response, error, status) {
                            if (response.type == 'error') {

                                $this.before('<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> ' + response.message + '</div>');
                            }

                            if (response.type == 'success') {

                                $this.before('<div class="alert success-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-thumbs-o-up"></i> ' + response.message + '</div>');
                                $this.trigger("reset");
                            }
                        },
                        error: function(response, error, status) {
                            //alert(response.responseText); 
                            $this.before('<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> ' + error + '</div>');
                        }
                    });
                } else {
                    $this.before('<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i>Minimum Password Length is 5</div>');
                }



            } else {
                $this.before('<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i>Password not Matched</div>');
            }





        });

    </script>


    @yield('scripts')





</body>

</html>
