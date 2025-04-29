<?php


    include("db.php");
    include("new_project_class.php");

    $new_project = new new_project_work;


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Project Work</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <!-- for sweet alert of cart page payment method -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center light-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Project</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home<br></a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li>
                <?php 
                
                    if(!empty($_SESSION['user_id']))
                    {
                        /* echo '<a href="logout.php" class="nav-link">Logout</a>'; */
                        echo '<li class="dropdown"><a href="#"><span> Account </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                  <li class="dropdown"><a href="#"><span> My Account </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                      <li><a href="#">My Profile</a></li>
                                      <li><a href="#">Edit Profile</a></li>
                                      <li><a href="#">Change Password</a></li>
                                      <li><a href="logout.php">Log out</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li class="dropdown notification-icon"><a href="notifications.php"><i class="bi bi-bell"></i></a></li>';
                    }
                    else
                    { 
                        echo'<a href="login1.php" class="nav-link">Login</a></li>
                            <li><a href="register.php" class="na-link">Register</a></li>';
                    }
                ?>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Notification Icon -->
        <!-- <div class="notification-icon">
          <a href="notifications.php"><i class="bi bi-bell"></i></a>
        </div> -->
        <!-- End Notification Icon -->

      </div>

    </div>

  </header>
