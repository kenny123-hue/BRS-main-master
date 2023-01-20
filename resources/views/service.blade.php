<!DOCTYPE html>



<html lang="eng">

<head>
  <meta charset="utf-8">
  <title>Bleam</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/Venobox/venobox.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- Main Stylesheet -->
  <link href="css/style copy.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- navigation -->
<section class="fixed-top navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index"><img src="images/favicon.ico" alt="logo"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar -->
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item dropdown dropdown-hover" >
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Products</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
              <li><a class="dropdown-item" href="records">Bleam Recording Service</a></li>
              <li><a class="dropdown-item" href="health">Bleam Health Service</a></li>
              <li><a class="dropdown-item" href="auto">Bleam Auto Service</a></li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
           <li class="nav-item">
            <a class="nav-link page-scroll" href="#">Service</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link page-scroll" href="/#pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
        </ul>
        <a href="{{ url('login') }}" class="btn btn-primary ml-lg-3 primary-shadow">Try Free</a>
      </div>
    </nav>
  </div>
</section>
<!-- /navigation -->

<!-- service -->
<section class="section-lg service-bg-image position-relative" style="background-image: url(images/backgrounds/service-page.png);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Easy To Use</h2>
                <p class="mb-100">Technology is disruptive because of how conviniently it empowers and enriches lives.No hustle No bustle. Just show up & get served.<br>Get well and keep on with life.</p>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon blue mb-4"></i>
                    <h4>Awesome results</h4>
                    <p>Digitize your workload as a professional. Serve your clients and patients better and diligently.<br><br>Increaase your reach, productivity and efficiency while saving lives like the hero you are.</p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4 translate-y-150">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon green mb-4"></i>
                    <h4>Easy to customize</h4>
                    <p>Our services allow you to customize in accordance with your needs, taste and system.<br><br></p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon orange mb-4"></i>
                    <h4>24 Hours Open</h4>
                    <p>We guarantee a 24 hour up time on all our services.<br><br>Get service at any time of the day at your own convenience and enjoy an empowered life.</p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4 translate-y-150">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon blue mb-4"></i>
                    <h4>Maximum Support</h4>
                    <p>For any challanges, we have a robust team that will walk you through this journey.<br><br> Contact us and our support team will offer you immediate and responsive feedback.</p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon green mb-4"></i>
                    <h4>Low Budget</h4>
                    <p>Healthcare shouldn't cost much. Especially when it is already unequitable. We aim to bridge this gap.<br><br>By providing affordable services at competitive rates that bring comfort to your pocket.</p>
                </div>
            </div>
            <!-- service item -->
            <div class="col-sm-6 mb-4 translate-y-150">
                <div class="rounded bg-white p-4 shadow-primary">
                    <i class="ti-layers-alt round-icon orange mb-4"></i>
                    <h4>Great service</h4>
                    <p>Our aim is to transform service provision across all boards. To do this customer satisfaction is at the core of all our values.<br><br>   .</p>
                </div>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img class="service-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="">
    <img class="service-bg-2 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">
    <img class="service-bg-3 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
    <img class="service-bg-4 left-right-animation" src="images/background-shape/green-dot.png" alt="">
    <img class="service-bg-5 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
</section>
<!-- /service -->

<!-- footer -->
<footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <a href="index.html">
          <img class="img-fluid" src="images/favicon.ico" alt="logo">
        </a>
      </div>
      <!-- footer menu -->
      <nav class="col-lg-8 align-self-center mb-5">
        <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="index">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#feature">Feature</a></li>
          <li class="list-inline-item"><a href="about">About</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
          <li class="list-inline-item"><a href="contact">Contact</a></li>
        </ul>
      </nav>
      <!-- footer social icon -->
      <nav class="col-12">
        <ul class="list-inline text-lg-right text-center social-icon">
          <li class="list-inline-item">
            <a class="facebook" href="https://web.facebook.com/BleamSupport"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="twitter" href="https://twitter.com/bleam_inc"><i class="ti-twitter-alt"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="instagram" href="https://www.instagram.com/bleam_inc/"><i class="ti-instagram"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="linkedin" href="#"><i class="ti-linkedin"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/Venobox/venobox.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>