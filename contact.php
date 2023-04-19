<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fav.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main1.css">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:shilpacriti@gmail.com">shilpacriti@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 81713 83552</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
    
        <a href="https://www.facebook.com/profile.php?id=100075757016596" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/shilpa_criti/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/shilpa-criti-58a09b223/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html">Flattern</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
         <li><a href="index.html" class="active"><b>Welcome</b></a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
   
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>welcome</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Welcome</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Database connection
  $conn = new mysqli('localhost','u473657915_root','Priya@2000','u473657915_test3');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into login2(name,email,subject,message) values(?,?,?,?)");
    $stmt->bind_param("ssss", $name,$email,$subject,$message);
    $execval = $stmt->execute();

    $stmt->close();
    $conn->close();
  }
?>
 <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(assets/img/slide/slide-2.jpeg);">
          <span class="login100-form-title-1">
          Welcome to Shilpacriti!.
          </span>
        </div>

        </div>
      </div>
    </main>

<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Shilpacriti</h3>
            <p>
              1st floor D-104Resizone,  residency,<br>Mayur Vihar, sahastradhara road, <br> Dehradun,Uttaranchal 248001<br><br>
              <strong>Phone:</strong> +91 81713 83552<br>
              <strong>Email:</strong> shilpacriti@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="testimonials.html">Testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>
            </ul>
          </div>
 
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Posters</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Flyers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Brochures</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Visiting cards</a></li>
            </ul>
          </div>

         <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Wedding invite’s</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Logo designs </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Short video</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Birthday invitation cards</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Graphic Design</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Shilpacriti</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
         
          Designed by <a href="#" style="color:#ffff00;">PriyasCreation</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="https://www.facebook.com/profile.php?id=100075757016596" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/shilpa_criti/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="https://www.linkedin.com/in/shilpa-criti-58a09b223/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>