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
  
  <!-- Animated text-->
    <link href="css/animated-text.css" rel="stylesheet">

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





<!-- Banner Start -->
<section class="section banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				 <h2 class="cd-headline clip is-full-width mb-4 ">
				 	Sign Up For<br>
                    <span class="cd-words-wrapper text-color">
                        <b class="is-visible">An Auto Merchant Account.</b>
                        <b>Digitize Records.</b>
                        <b>Better Service Provision.</b>
                    </span>
                </h2>
                <p>We help you manage and access your patients records easily.<br>Fill the form and get your service number to get started.</p>
			</div>
		</div>
	</div>
</section>







<!--registration form-->




<form method="post" role="form" enctype="multipart/form-data" action="{{ 'health' }}" >
  @csrf
<div class="container"> 
  <div class="card"> 
    <div class="form"> 
      <div class="left-side"> 
        <span> <img src="images/product/product-5.jpg"> </span> 
      </div> 
      <div class="right-side"> 
        <div class="login"> 
           
        </div>  <div class="social"> 
          
        </div> 
        <hr> 
        <div class="or"> <p>Basic Details</p> </div> 

        <div class="input_div"> 
        <div class="input_text"> 
            <input class="first_name" type="text" required name="name" id="name"> <label>Facility Name</label> 
             @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
          </div> 

          <div class="input_text" > 
              <input class="last_name" type="text" required name="phone" id="phone"> <label>Phone</label> 
            </div> 
             @error('phone')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
        </div>

        <div class="input_div"> 


             <div class="input_text" > 
              <input class="last_name" type="text" required name="location" id="location"> <label>Address</label> 
            </div>  


            <div class="input_dropdown" >
               <label for="counties_id" type="dropdown" >County</label>
                            <select onchange="getSub_Counties(this.value)"  class="select-search form-control" name="counties_id" id="counties_id">
                                <option value="" ></option>
                                @foreach($counties as $county)
                                    <option {{ (old('counties_id') == $county->id ? 'selected' : '') }} value="{{ $county->id }}">{{ $county->name }}</option>
                                @endforeach
                            </select>
              </div> 

               <div class="input_dropdown" >
                            <label for="sub__counties_id" type="dropdown" >Sub-county </label>
                            <select required data-placeholder="Select State First" class="select-search form-control" name="sub__counties_id" id="sub__counties_id">
                                <option value=""></option>
                                @foreach($sub__counties as $sub__county)
                                    <option {{ (old('sub__counties_id') == $sub__county->id ? 'selected' : '') }} value="{{ $sub__county->id }}">{{ $sub__county->name }}</option>
                                @endforeach
                            </select>
                        </div>
          
        </div>


          <div class="input_div">
            <div class="input_text" > 
              <input class="last_name" type="text" required name="f_description" id="f_description"> <label>Description</label> 
            </div> 

            <div class="input_text" > 
              <input class="last_name" type="text" required name="cor" id="cor"> <label>Certificate Of Registration</label> 
            </div>
            
             
              <div class="input_dropdown label">
              <label  for="category" type="dropdown" > </label>  
                            <select required name="category" placeholder="Category" class="select-search form-control" id="category">
                                <option>Chemist/Pharmacy</option>
                                <option>Clinic</option>
                                <option>Community Facility</option>
                                <option>Health Dispensary</option>
                                <option>Health Centres</option>
                                <option>County Hospitals</option>
                                <option>County Referral Hospitals</option>
                                <option>National Referral Hospital</option>
                            </select>
            </div>

             
            </div> 

          
          <hr> 
            
              
              

            <div class="or"> <p>Applicant Details</p> </div>

            <div class="input_div">

            <div class="input_text"> 
            <input class="first_name" type="text" required name="aname" id="aname"> <label>Name</label> 
            @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
          </div> 

           <div class="input_text" > 
              <input class="last_name" type="text" required name="aphone" id="aphone"> <label>Phone</label> 
              @error('phone')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror

            </div> 

            </div> 

            <div class="input_div"> 
          

           

             <div class="input_text" > 
              <input class="last_name" type="text" required name="aID" id="aID"> <label>ID</label> 
            </div> 

            <div class="input_text" > 
              <input class="last_name" type="text" required name="kra" id="kra"> <label>KRA</label> 
            </div> 
        </div>


            <div class="input_text" > 
              <input class="email" name="email" id="email" type="text" required> <label>Email</label> </div> 
              

             
                <div class="tick"> <small class="check"><i class="fa fa-check"></i></small> 
                <p>Creating an account means you agree with our <a href="terms_of_use">Terms of Service</a> and our <a href="privacy_policy">Privacy Policy</a> </p> 
              </div> 
              <div class="button"> 
                <button type="submit" class="create">Create Account</button> </div> 
                <div class="last"> 
                  <p>This site is protected by reCAPATCHE and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p> </div> 
                </div> 
              </div> 
            </div>
</div>





</form>



















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

<script src="js/animated-text.js"></script>

</body>
</html>