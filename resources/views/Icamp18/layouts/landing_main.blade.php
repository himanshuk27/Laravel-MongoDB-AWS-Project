<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')" />
<!-- Stylesheets -->
<link href="/Icamp18/assets/css/bootstrap.css" rel="stylesheet">
<link href="/Icamp18/assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/Icamp18/assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/Icamp18/assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="/Icamp18/assets/css/style.css" rel="stylesheet">
<link href="/Icamp18/assets/css/responsive.css" rel="stylesheet">
<meta name="theme-color" content="#000000" />

@yield('css')


<link rel="shortcut icon" href="/Icamp18/favicons/favicon.ico" type="image/x-icon">
<link rel="icon" href="#" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header">

        <!-- Main Box -->
        <div class="main-box">
            <div class="auto-container">
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="/logo" height="40" width="100" alt="Icamp'18"></a> <span style="color: white;padding: 10px;font-size: 20px;">Icamp'18</span><br>
                       </div>
                       
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="#home">Home</a>

                                    </li>
                                    <li ><a href="#about">About</a>

                                    </li>
                                    <li><a href="#why">Why Icamp</a>

                                    </li>
                                    <li><a href="#testimonials">Testimonials</a>

                                    </li>                                    
<!--                                    <li><a href=""></a>List of Companies</li>-->
<!--
                                    <li><a href="index.html#">Stats</a>

                                    </li>
                                          <li><a href="index.html#">Past Companies</a>

                                    </li>
                                    
-->
										<li><a href="companies">Companies List</a>

                                    </li>
                                       <li><a href="/login">Login/Register</a></li>
                                    <li><a href="#">Contact Us</a></li>
                               
                             
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Search Box-->
<!--
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="http://t.commonsupport.com/sakai/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
-->
                    </div>
                    <!--Nav Outer End-->
                </div>    
            </div>
        </div>
    </header>
    <!--End Main Header -->
    @yield('content')

    <!--Main Footer-->
    <footer class="main-footer">
        <!--footer upper-->
        <div class="footer-upper" style="background-image:url(images/background/pattern.png)">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="/logo" alt="" /></a>
                                    </div>
<!--                                    <div class="text">Keep up on our always evolving startup culture. Enter your e-mail and subscribe to our newsletter.</div>-->
                                  
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>QUICK LINKS</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="https://interncamp.ecell.org.in" target="_blank">Internship Camp '18</a></li>
                                            <li><a href="https://ecell.org.in" target="_blank">KIIT Entrepreneurship Cell</a></li>
                                            <li><a href="https://kiit.ac.in" target="_blank">Kalinga Institute of Industrial Technology</a></li>
                                            <li><a href="https://2018.esummit.org.in" target="_blank">KIIT E-Summit '18</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>Contact Us</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="index.html#"><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> KIIT Entrepreneurship Cell, 1st Floor KIIT Training and Placement Cell, KIIT, Bhubaneswar</p></a></li>
                                            <li><a href="index.html#"><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91-9583785500</p></a></li>
                                             <li><a href="index.html#"><p><i class="fa fa-phone"></i> <strong>For tech. queries call:</strong> +91-9051799755</p></a></li>
                                            <li><a href="index.html#"><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:pcr@ecell.org.in">pcr@ecell.org.in</a></p></a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget newsletter-widget">
                                    <h2>SUBSCRIBE US</h2>
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                                <button type="submit" class="theme-btn btn-style-three">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <ul class="social-icon-one">
                                        <li><a href="index.html#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="index.html#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="index.html#"><span class="fa fa-vine"></span></a></li>
                                        <li><a href="index.html#"><span class="fa fa-pinterest"></span></a></li>
                                        <li><a href="index.html#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright"><p>Made with <span style="color: red;">❤ </span>  by <br>
        <a href="//ecell.org.in" target="_blank">
          <span class="marked">KIIT Ecell Techies</span>
        </a>
      </p></div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="/Icamp18/assets/js/jquery.js"></script> 
<script src="/Icamp18/assets/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="/Icamp18/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/Icamp18/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/Icamp18/assets/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="/Icamp18/assets/js/jquery.fancybox.js"></script>
<script src="/Icamp18/assets/js/owl.js"></script>
<script src="/Icamp18/assets/js/wow.js"></script>
<script src="/Icamp18/assets/js/bxslider.js"></script>
<script src="/Icamp18/assets/js/appear.js"></script>
<script src="/Icamp18/assets/js/script.js"></script>
<script>$(document).ready(function () {
    $("a").on("click", function (i) {
        if ("" !== this.hash) {
            i.preventDefault();
            var e = this.hash;
            $("html, body").animate({
                scrollTop: $(e).offset().top
            }, 1000, function () {
                window.location.hash = e
            })
        }
    })
});</script>


<!--script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aaef4a986ebf4dc">
    
</script-->


@yield('scripts')
</body>
</html>