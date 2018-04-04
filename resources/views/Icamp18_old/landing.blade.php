<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Internship Camp 2018, Entrepreneurship Cell KIIT">
  <meta name="author" content="ecell.org.in">

  <title>Internship Camp 2018 | KIIT Ecell</title>

  <!--  favicon -->
  <link rel="shortcut icon" href="/Icamp18/assets/img/ico/favicon.png">        

  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
  <!-- FontAwesome CSS -->
  <link href="/Icamp18/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Material Icons CSS -->
  <link href="/Icamp18/assets/fonts/iconfont/material-icons.css" rel="stylesheet">
  <!-- animated-headline -->
  <link href="/Icamp18/assets/css/animated-headline.css" rel="stylesheet">
  <!-- shortcodes -->
  <link href="/Icamp18/assets/css/shortcodes/shortcodes.css" rel="stylesheet">
  <!-- materialize -->
  <link href="/Icamp18/assets/materialize/css/materialize.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="/Icamp18/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Style CSS -->
  <link href="Icamp18/style.css" rel="stylesheet">
</head>

<body id="top">

  <section class="banner-1 bg-fixed parallax-bg fullscreen-banner valign-wrapper" data-stellar-background-ratio="0.5">
    <div class="valign-cell">
      <div class="container">
       <div class="comingsoon-wrapper text-center">
         <div class="logo">
           <a href="#">
            <img style="width:200px; height: 100px" src="/Icamp18/assets/img/logo.png" alt="">
          </a>
        </div>

        <div class="mb-50">
         <h1 class="intro-title black-text text-uppercase">Internship Camp '18</h1>
         <p class="sub-intro lead">The internship camp provides a networking platform to all the start-ups and corporate firms to exchange ideas and find the right talent.</p>
       </div>



       <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="subscribe-wrapper text-center">
            <form class="subscribe-form mailchimp" name="emailForm" id="emailForm" action="newsletter/reg">

              <div class="input-field">
                <label class="sr-only" for="email">Email</label>
                <input type="email" name="user_email" class="validate" >

                <!-- to showing error message -->
                <label for="subscribeEmail" data-error="wrong" data-success="right">Type your email</label>
              </div>

              <button id="email_sub" type="submit" class="btn btn-lg pink waves-effect waves-light mt-30 text-capitalize">Subscribe Now</button>

              <!-- to showing success messages -->
              <p class="subscription-success text-center grey-text"></p>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </div><!-- /.subscribe-wrapper -->
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.comingsoon-wrapper -->

  </div><!-- /.container -->
</div><!-- /.valign-cell -->
</section>


<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       <h2 class="font-25 text-bold text-uppercase mb-30">What is ICamp '18?</h2>
       <p>The Internship Camp, which is to be held in Feb 2018, is an initiative of KIIT Entrepreneurship Cell which aims to provide internship opportunities to undergraduate students from the field of technology, biotechnology, management, designing and law from Bhubaneswar and our home university. KIIT Entrepreneurship Cell takes pride to provide this platform for the second time in a row. Keeping in mind the last year’s success we have targeted to bring in 60 plus corporate and starts-ups from different regions and create 500 plus internship opportunities for the students.</p>



     </div>
     <div class="col-md-5 col-md-offset-1">
       <h2 class="font-25 text-bold text-uppercase mb-30">Have any question?</h2>
       <p>You can use contact form below or contact us via e-mail at: <a href="#">pcr@ecell.org.in</a></p>

       <form class="comingsoon-contact" name="contact-form" id="contactForm" action="sendemail.php" method="POST">

         <div class="row">
           <div class="col-md-6">
             <div class="input-field">
               <input type="text" name="name" class="validate" id="name">
               <label for="name">Name</label>
             </div>

           </div><!-- /.col-md-6 -->

           <div class="col-md-6">
             <div class="input-field">
               <label class="sr-only" for="email">Email</label>
               <input id="email" type="email" name="email" class="validate" >
               <label for="email" data-error="wrong" data-success="right">Email</label>
             </div>
           </div><!-- /.col-md-6 -->
         </div><!-- /.row -->

         <div class="input-field">
           <textarea name="message" id="message" class="materialize-textarea" ></textarea>
           <label for="message">Message</label>
         </div>

         <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30 text-capitalize">Send Message</button>
       </form>

     </div>
   </div><!-- /.row -->
 </div>
</section>



<footer class="footer footer-four">
  <div class="primary-footer brand-bg text-center">
    <div class="container">

      <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
        <i class="material-icons">&#xE316;</i>
      </a>

      <ul class="social-link tt-animate ltr mt-20">
        <li><a href="https://www.facebook.com/kiitecell" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/kiit_ecell" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/company/13346906/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.instagram.com/ecell_kiit/" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>

      <hr class="mt-15">

      <div class="row">
        <div class="col-md-12">

          <span class="copy-text">Copyright &copy; 2017 <a href="https://ecell.org.in" target="_blank">KIIT Ecell</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Designed By <a href="https://ecell.org.in/team#tech" target="_blank">Ecell Tech Team</a></span>

        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.primary-footer -->

</footer>


<!-- Preloader -->
<div id="preloader">
  <div class="preloader-position"> 
    <img src="/Icamp18/assets/img/logo.png" style="width: 200px; height: 100px;" alt="logo" >
    <div class="progress">
      <div class="indeterminate"></div>
    </div>
  </div>
</div>
<!-- End Preloader -->

<!-- jQuery -->
<script src="/Icamp18/assets/js/jquery-2.1.3.min.js"></script>
<script src="/Icamp18/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/Icamp18/assets/materialize/js/materialize.min.js"></script>
<script src="/Icamp18/assets/js/jquery.easing.min.js"></script>
<script src="/Icamp18/assets/js/coundown-timer.js"></script>
<script src="/Icamp18/assets/js/smoothscroll.min.js"></script>
<script src="/Icamp18/assets/js/jquery.stellar.min.js"></script>
<script src="/Icamp18/assets/js/imagesloaded.js"></script>
<script src="/Icamp18/assets/js/jquery.inview.min.js"></script>
<script src="/Icamp18/assets/js/menuzord.js"></script>
        <!--script src="/Icamp18/assets/js/ajaxchimp.js"></script>
          <script src="/Icamp18/assets/js/ajaxchimp-config.js"></script-->
            <script src="/Icamp18/assets/js/scripts.js"></script>

            <script type="text/javascript">             

              $('#emailForm').on('submit',function(e){
               e.preventDefault();
               var $action = $(this).prop('action');
               var $data = $(this).serialize();
               var $this = $(this);

               $(this).prevAll('.alert').remove();

               $.ajax({
                url: $action,
                type : 'POST',
                data : $data,
                dataType    : 'json',
                }).done(function(data) {
                 if( data.type=='error' ){

                  $this.before( '<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> '+data.message+'</div>' );
                }

                if( data.type=='success' ){

                  $this.before( '<div class="alert success-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-thumbs-o-up"></i> '+data.message+'</div>' );
                  $this.trigger("reset");
                }
              }).fail(function(data, status, xhr, $form) {
                $this.before( '<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> '+status+'<br>'+xhr+'</div>' );
              
            });


             });



           </script>

         </body>

         </html>