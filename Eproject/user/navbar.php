
<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:../admin/login.php');
}
else{
    echo "<style>
    #login_tag{
        display:none;
      }
      hr{
        display:none;
      }
    </style>";
}


function isPageActive($currentPage, $pageName) {
  return ($currentPage === $pageName) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  
</head>
<style>
.userimg{
  height: 40px;
}
.btnlink a{
  color:white;
   }
  .btnlink{
    background-color: #0e1d34;
    padding: 8px;
    margin-left: 80px;
    margin-right: 80px;
    border-radius: 70px;
  
  }
  .scroll-top {
    background: rgb(15 24 79 / 74%);
}
.mm{
  color:#0b2c62;
font-weight:bold ;

}
.get-a-quote .php-email-form {
    background: #f0f0f0;
}
.headings{
    color: #01155e;
   }
   .breadcrumbs nav ol {
    color: #133568;
}
</style>
<body>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Courier</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
<li><a href="home.php" class=" <?= isPageActive($currentPage, 'home') ?> ">Home</a></li>
          <li><a href="about.php" class=" <?= isPageActive($currentPage, 'about') ?>">About</a></li>
          <li><a href="services.php" class=" <?= isPageActive($currentPage, 'services') ?>">Services</a></li>
          <li><a href="pricing.php" class=" <?= isPageActive($currentPage, 'pricing') ?>">Pricing</a></li>
          <li><a href="calpricing.php" class=" <?= isPageActive($currentPage, 'calpricing') ?>">Calculate Pricing</a></li>
          <li><a href="order.php" class="<?= isPageActive($currentPage, 'order') ?>">Order</a></li>
          <li>
          <div class="dropdown">
          <a  href="#" id="userDropdown" role="button">
          
            <i><?php echo $_SESSION['user_name'];?></i>
           
            <img class="img-profile userimg rounded-circle" src="assets/img/user-icon.png">
        </a>
      
  <ul style="width:50px" class="dropdown-menu" >
    <li id="login_tag"><a class="" href="../admin/login.php"> 
       <i class="fas fa-list" style="font-size:9px">&nbsp; Log In</i>

</a>
</li>
<hr>
    <li><a class="" href="../admin/logout.php">
      <i class="fas fa-sign-out-alt " style="font-size:9px">&nbsp; Log out</i>
     
    </a>
  </li>
  </ul>
</div>
</li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>