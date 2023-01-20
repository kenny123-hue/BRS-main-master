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
      <a class="navbar-brand" href="#"><img src="images/favicon.ico" alt="logo"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar -->
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
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
            <a class="nav-link" href="service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
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

<!-- hero area -->
<section class="hero-section hero" data-background="" style="background-image: url(images/hero-area/banner-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center zindex-1">
        <h1 class="mb-3">The Most Advanced<br>
           Records Service</h1>
        <p class="mb-4">Just Show Up & Get Served<br>
          No More Paperwork.</p>
        <a href="{{ url('login') }}" class="btn btn-secondary btn-lg" >Get Started</a>
        <!-- banner image -->
        <img class="img-fluid w-100 banner-image" src="images/hero-area/banner-img.png" alt="banner-img">
      </div>
    </div>
  </div>


  <!-- background shapes -->
  <div id="scene">
    <img class="img-fluid hero-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="">
    <img class="img-fluid hero-bg-2 left-right-animation" src="images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-3 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-4 up-down-animation" src="images/background-shape/green-dot.png" alt="">
    <img class="img-fluid hero-bg-5 left-right-animation" src="images/background-shape/blue-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-6 up-down-animation" src="images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-7 left-right-animation" src="images/background-shape/yellow-triangle.png" alt="">
    <img class="img-fluid hero-bg-8 up-down-animation" src="images/background-shape/service-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-9 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
  </div>
</section>
<!-- /hero-area -->

<!-- feature -->
<section class="section feature mb-0" id="feature">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Awesome Features</h2>
        <p class="mb-100">No need to worry about loosing booklets and files anymore.<br>Let your clients access their records on the go. </p>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-ruler-pencil feature-icon mr-4"></i>
          </div>
          <div>
            <h4>Awesome Vendor Service</h4>
            <p>Focus on serving your clients
              & let us focus on availing those records.</p>
          </div>
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-layout-cta-left feature-icon mr-4"></i>
          </div>
          <div>
            <h4>Easy Accessability</h4>
            <p>Access Your Records From
              Wherever & Whenever.</p>
          </div>
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-split-v-alt feature-icon mr-4"></i>
          </div>
          <div>
            <h4>Fast API Intergration</h4>
            <p>Get our services up and running within minutes
              from your system.</p>
          </div>
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-layers-alt feature-icon mr-4"></i>
          </div>
          <div>
            <h4>Organized Operations</h4>
            <p>We aim to disrupt current records
               proivision. By offering a seamless and effortless record service.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img class="feature-bg-1 up-down-animation" src="images/background-shape/feature-bg-1.png" alt="bg-shape">
  <img class="feature-bg-2 left-right-animation" src="images/background-shape/feature-bg-2.png" alt="bg-shape">
</section>
<!-- /feature -->

<!-- marketing -->
<section class="section-lg seo">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="seo-image">
          <img class="img-fluid" src="images/marketing/marketing.png" alt="form-img">
        </div>
      </div>
      <div class="col-md-5">
        <h2 class="section-title">A Complete Range Of Health Recording Services!</h2>
        <p>Long gone are the days where cards and booklets were used.<br>
         We are offering a service that lets you use your identity to access your files
         irrespective of your location. Have a seemless & hustle free experience accessing medical care.
        </p>
      </div>
    </div>
  </div>
  <!-- background image -->
  <img class="img-fluid seo-bg" src="images/backgrounds/seo-bg.png" alt="seo-bg">
  <!-- background-shape -->
  <img class="seo-bg-shape-1 left-right-animation" src="images/background-shape/seo-ball-1.png" alt="bg-shape">
  <img class="seo-bg-shape-2 up-down-animation" src="images/background-shape/seo-half-cycle.png" alt="bg-shape">
  <img class="seo-bg-shape-3 left-right-animation" src="images/background-shape/seo-ball-2.png" alt="bg-shape">
</section>
<!-- /marketing -->

<!-- service -->
<section class="section-lg service">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-5 order-2 order-md-1">
        <h2 class="section-title">Powerful Layout, Details and Insights</h2>
        <p class="mb-4">Get a detailed analysis of your medical or car service records through our 
          interactive platforms which are web, app and ussd. For hospitals and businesses get a service number via our merchant account that will enable your customers access your services 
          and store your records securely.
          </p>
        <ul class="pl-0 service-list">
          <li><i class="ti-layout-tab-window text-purple"></i>Responsive on any device</li>
          <li><i class="ti-layout-placeholder text-purple"></i>Very easy to access and use</li>
          <li><i class="ti-support text-purple"></i>Effective support</li>
        </ul>
      </div>
      <div class="col-md-7 order-1 order-md-2">
        <img class="img-fluid layer-3" src="images/service/service.png" alt="service">
      </div>
    </div>
  </div>
  <!-- background image -->
  <img class="img-fluid service-bg" src="images/backgrounds/service-bg.png" alt="service-bg">
  <!-- background shapes -->
  <img class="service-bg-shape-1 up-down-animation" src="images/background-shape/service-half-cycle.png" alt="background-shape">
  <img class="service-bg-shape-2 left-right-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
</section>
<!-- /service -->

<!-- team -->

  <!-- backgound image -->
  <img src="images/backgrounds/team-bg.png" alt="team-bg" class="img-fluid team-bg">
  <!-- background shapes -->
  <img class="team-bg-shape-1 up-down-animation" src="images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="team-bg-shape-2 left-right-animation" src="images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="team-bg-shape-3 left-right-animation" src="images/background-shape/team-bg-triangle.png" alt="background-shape">
  <img class="team-bg-shape-4 up-down-animation img-fluid" src="images/background-shape/team-bg-dots.png" alt="background-shape">
</section>
<!-- /team -->

<!-- pricing -->
<section class="section-lg pb-0 pricing" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Our Packages</h2>
        <p class="mb-50">  <br>
          Check our user accounts and access privilages </p>
      </div>
      <div class="col-lg-10 mx-auto">
        <div class="row justify-content-center">
          <!-- pricing table -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="rounded text-center pricing-table table-1">
              <h3>User Account</h3>
              
              <p> Open to everyone,
                  App or Web Free,
                  USSD access & service
              </p>
              <a href="#" class="btn pricing-btn px-2">Get Started</a>
            </div>
          </div>
          <!-- pricing table -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="rounded text-center pricing-table table-2">
              <h3>Standard Account</h3>
              
              <p>For Clinics,
                 Pharmacies,
                 Community Health Centres  
              </p>
              <a href="#" class="btn pricing-btn px-2">Try It Out</a>
            </div>
          </div>
          <!-- pricing table -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="rounded text-center pricing-table table-3">
              <h3>Premium Account</h3>
              
              <p>For Hospitals,
                 Referal centres,
                 Major health centres
              </p>
              <a href="#" class="btn pricing-btn px-2">Let's Partner</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img class="pricing-bg-shape-1 up-down-animation" src="images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="pricing-bg-shape-2 up-down-animation" src="images/background-shape/seo-half-cycle.png" alt="background-shape">
  <img class="pricing-bg-shape-3 left-right-animation" src="images/background-shape/team-bg-triangle.png" alt="background-shape">
</section>
<!-- /pricing -->

<!-- client logo slider -->
<section class="section">
  <div class="container">
      <div class="client-logo-slider align-self-center">
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
      </div>
  </div>
</section>
<!-- /client logo slider -->

<!-- newsletter -->
<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Subscribe to our newsletter</h2>
        <p class="mb-5">Receive updates, news and deals</p>
      </div>
      <div class="col-lg-8 col-sm-10 col-12 mx-auto">
        <form method ='post' action="{{url('index')}}">
          {{ csrf_field() }}
          <div class="input-wrapper position-relative">
            <input type="email" name="email" class="newsletter-form" id="email" placeholder="Enter your email">
            <button type="submit" value="send" class="btn newsletter-btn">subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img class="newsletter-bg-shape left-right-animation" src="images/background-shape/seo-ball-2.png" alt="background-shape">
</section>
<!-- /newsletter -->

<!-- footer -->
<footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <a href="index">
          <img class="img-fluid" src="images/favicon.ico" alt="logo">
        </a>
      </div>
      <!-- footer menu -->
      <nav class="col-lg-8 align-self-center mb-5">
        <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="index.html">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#feature">Feature</a></li>
          <li class="list-inline-item"><a href="about">About</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
          <li class="list-inline-item"><a href="contact.html">Contact</a></li>
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