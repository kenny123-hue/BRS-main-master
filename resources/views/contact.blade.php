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
      <a class="navbar-brand" href="/"><img src="images/favicon.ico" alt="logo"></a>
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
            <a class="nav-link" href="service">Service</a>
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

<!-- contact -->
<section class="section-lg contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Contact</h2>
            </div>
        </div>
        <div class="row contact-bg p-5 rounded mb-5">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <form action="#">
                    <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
                    <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
                    <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                    <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                    <button type="submit" value="send" class="btn btn-secondary">SEND MESSAGE</button>
                </form>
            </div>
            <div class="col-lg-5">
                <p class="mb-5">If you'll like to know more about our solutions, designs and cloud services, or get advice on your own technological challenges. Get in touch with us. With dedicated engineers on-hand 24/7,      we’re set up to become an extension of your team.</p>
                <a href="tel:+442081446356" class="text-color h5 d-block">+254 791 285 163</a>
                <a href="support@bleam.co.ke" class="mb-5 text-color h5 d-block">support@bleam.co.ke</a>
                <p>Moi Avenue<br>Nairobi Kenya</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-layers-alt round-icon blue mr-2"></i> Sales</h5>
                    <p class="mb-0">A motivated team with the skills to push your numbers forward.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-desktop round-icon green mr-2"></i> Help & Support</h5>
                    <p class="mb-0">For any challanges or issues that might come up, Our H & S team has got you covered.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-panel round-icon orange mr-2"></i> Legal Department</h5>
                    <p class="mb-0">We are compliant with all required licences and policies as par the law.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img class="contact-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
    <img class="contact-bg-2 left-right-animation" src="images/background-shape/green-half-cycle.png" alt="background-shape">
    <img class="contact-bg-3 up-down-animation" src="images/background-shape/green-dot.png" alt="background-shape">
    <img class="contact-bg-4 left-right-animation" src="images/background-shape/service-half-cycle.png" alt="background-shape">
    <img class="contact-bg-5 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
</section>
<!-- /contact -->

<!-- footer -->
<footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <a href="/">
          <img class="img-fluid" src="images/favicon.ico" alt="logo">
        </a>
      </div>
      <!-- footer menu -->
      <nav class="col-lg-8 align-self-center mb-5">
        <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="/">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="/#feature">Feature</a></li>
          <li class="list-inline-item"><a href="about">About</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="/#pricing">Pricing</a></li>
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