<?php
  // Create database connection
  include ('conn.php');
  $msg = "";
  $rf = mysqli_query($db, "SELECT * FROM building where id=1");
  $ps = mysqli_query($db, "SELECT * FROM building where id=2");
  $note = mysqli_query($db, "SELECT * FROM building where id=3");
  $jc = mysqli_query($db, "SELECT * FROM building where id=4");
  $es = mysqli_query($db, "SELECT * FROM building where id=5");
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CESA Tech-Fest 2K19</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    body,html {
    background-image: url("images/slides/1.jpg");
    height: 40%;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}
  </style>
<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php"  style="color: #e332ff;font-family: algerian">CESA TECH-FEST 2K19</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		      <li><a href="index.php">Home</a></li>
          <li><a href="index.php">Events</a></li>
          <li><a href="index.php">About</a></li> 
          <li><a href="team.html">Our Team</a></li>
          <li><a href="index.php">Registration</a></li>
          <li><a href="index.php">Contact</a></li>   
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  
</section>
<!-- header section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated" style="color: #e332ff;font-family: algerian;font-size: 50px;"><b><u>Building  Making</u></b></h2>
                <p class="wow fadeInDown animated" style="color: white"><b>Event Co-Ordinators:</b></p>
                <p class="wow fadeInDown animated" style="color: white">Omkar Dhondrikar(+91 9960453447)</p>
                <p class="wow fadeInDown animated" style="color: white">Balasaheb Munde(+91 8412029497)</p>
            </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 services text-center">
        <div class="services-content" style="padding-left:25px;padding-right: 25px;padding-top: 5px;padding-bottom: 10px;">
          <h5><b><li>Registration Fees</li></b></h5>
            <?php
            while ($row = mysqli_fetch_array($rf)) {
             echo "".$row['text']."";
            }
            ?>
        </div>
      </div>
       <div class="col-md-12 col-sm-12 services text-center">
        <div class="services-content" style="padding-left:25px;padding-right: 25px;padding-top: 5px;padding-bottom: 10px;">
          <h5><b><li>Problem Statement</li></b></h5>
          
            <?php
            while ($row = mysqli_fetch_array($ps)) {
             echo "".$row['text']."";
            }
            ?>
          
        </div>
      </div>   
      <div class="col-md-12 col-sm-12 services text-center">
        <div class="services-content" style="padding-left:25px;padding-right: 25px;padding-top: 5px;padding-bottom: 10px;">
          <h5><b><li>Note</li></b></h5>
         <?php
            while ($row = mysqli_fetch_array($note)) {
             echo "".$row['text']."";
            }
            ?>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 services text-center">
        <div class="services-content" style="padding-left:25px;padding-right: 25px;padding-top: 5px;padding-bottom: 10px;">
          <h5><b><li>Judging Criteria</li></b></h5>
          <?php
            while ($row = mysqli_fetch_array($jc)) {
             echo "".$row['text']."";
            }
            ?>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 services text-center">
        <div class="services-content" style="padding-left:25px;padding-right: 25px;padding-top: 5px;padding-bottom: 10px;">
          <h5><b><li>Event Schedule</li></b></h5>
            <?php
            while ($row = mysqli_fetch_array($es)) {
             echo "".$row['text']."";
            }
            ?>
        </div>
      </div>
      </div>      
            <div class="section-header">
                <p class="wow fadeInDown animated"><h3 style="color: white;">Designed And Developed By SDC...</h3>
            </div>

<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
    </div>
    </section>
</body>
</html>