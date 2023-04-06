<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- <title>EMP Services</title> -->
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_theme_file_uri('/assets/images/favicon.png') ?>" rel="icon">
  <link href="<?php echo get_theme_file_uri('/assets/images/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
  <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <?php
    wp_head();
  ?>

  <!-- =======================================================
  * Template Name: EMP Services Ltd - v1.4.0
  * Template URL: https://empservices.co.ke/EMP Services Ltd-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://empservices.co.ke/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <?php
            if(function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
        ?>
        <img src="<?php echo $logo[0] ?>" alt="">
        <span></span>
      </a>


      <nav id="navbar" class="navbar">
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul>%3$s</ul>'
                )
            );
        ?>
        <!-- <ul> -->
          <!-- <li><a class="nav-link scrollto active" href="./">Home</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li><a href="corpdesk/">COPRPDESK</a></li> -->
          <!-- <li><a href="cloud-brix/">CLOUD-BRIX</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="contact/">Contact</a></li> -->
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        <!-- </ul> -->
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->      

    </div>
  </header><!-- End Header -->