<?php
    session_start();
    include ('conn.php');
    $error = '';
    if(isset($_POST['submit'])){
        
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $collegename= $_POST['collegename'];
        $event = $_POST['event'];
       
        $sql_u = "SELECT * FROM events WHERE email='$email' AND event LIKE '%$event%'";
        
        $res_u = mysqli_query($db, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {
            $_SESSION['registration'] = 'already';
        }
        else{
            $sql="INSERT INTO events(name,email,phone,collegename,event) values('$name','$email','$phone','$collegename','$event');";

            if(mysqli_query($db,$sql)) {
                $_SESSION['registration'] = 'success';
            }   
            else {
                $_SESSION['registration'] = 'failed';

            }
        } 
    }


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

<?php

    if(isset($_SESSION['registration'])) {
        if($_SESSION['registration']=='success')   {
            echo '<script>alert("Registration Success")</script>';
            unset($_SESSION['registration']);
        }
        else if($_SESSION['registration']=='already') {
            echo '<script>alert("Already registered")</script>';
            unset($_SESSION['registration']);
        }
        else {
            echo '<script>alert("Sorry :( Failed Registration</script>';
            unset($_SESSION['registration']);
        }
    }
?>    
    <style>
        input[type="checkbox"]{
           width: 15px; 
           height: 15px;
           background-color:  #fff; 
      }
      
    </style>
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php" style="font-family: algerian;">CESA TECH-FEST 2K19</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		 <li><a href="#banner">Home</a></li>
          <li><a href="#services">Events</a></li>
          <li><a href="#content-3-10">About</a></li> 
          <li><a href="team.html">Our Team</a></li>
          <li><a href="#registration">Registration</a></li>
          <li><a href="#contact">Contact</a></li>  
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text --> 
    <div class="banner" id="banner"> 
	<div class="slider-banner">
            <div data-lazy-background="images/slides/1.jpg"> 
                
                <!--<p data-pos="['90%', '110%', '75%', '44%']" data-duration="700" data-effect="move" style="font-size: 45px;color: #ccccff">
                      Welcome!!!!!!
                </p>--> <br>
                <h1 data-pos="['30%', '-70%', '38%', '25%']" data-duration="700" data-effect="move">
                        <b style="color: #cb21ff; font-size:5vw;">CESA Tech-Fest 2K19</b>
                </h1>
            </div>
            <div data-lazy-background="images/slides/2.jpg"> 
            </div>
             
        </div>
      <!-- banner text --> 
    </div> 
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro" style="background-color: #000000;padding-top: 0px;padding-bottom: 0px;">
<!--<link rel="stylesheet" type="text/css" href="css/styles.css">-->
  <div class="container" style="background-color: #000000;">
    <div class="col-md-6 col-md-6 text-center">
      <script type="text/javascript">
      const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Feb 15, 2019 10:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      

    }, second)





</script>
<div class="container" style="color: #cb21ff;text-align: center;">
  <ul>
    <li style="display: inline-block;font-size: 2.0em;list-style-type: none;padding: 1em;text-transform: uppercase;font-family: algerian;"><span id="days" style="display: block;
  font-size: 5.5rem;font-family: algerian"></span>days</li>
    <li style="display: inline-block;font-size: 2.0em;list-style-type: none;padding: 1em;text-transform: uppercase;font-family: algerian;"><span id="hours" style="display: block;
  font-size: 5.5rem;font-family: algerian;"></span>Hours</li>
    <li style="display: inline-block;font-size: 2.0em;list-style-type: none;padding: 1em;text-transform: uppercase;font-family: algerian;"><span id="minutes" style="display: block;
  font-size: 5.5rem;font-family: algerian;"></span>Minutes</li>
    <li style="display: inline-block;font-size: 2.0em;list-style-type: none;padding: 1em;text-transform: uppercase;font-family: algerian;"><span id="seconds" style="display: block;
  font-size: 5.5rem;font-family: algerian;"></span>Seconds</li>
  </ul>
     <div class="wow fadeInDown animated" style="font-size: 2.0em;padding: 1em;font-family: algerian;">Date : 15,16 Feb 2019</div>
</div>

    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Our <b> EVENTS</b></h2>
                <p class="wow fadeInDown animated">We have organised the following Events, just take a view at them....</p>
            </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center">
        <div class="services-content">
          <h5 style="text-align: center;"><b><li><a href="buildingmaking.php">Build It</a></li></b></h5>
          <a href="buildingmaking.php"><img src="images/build.jpg" style="height: 100%;width: 100%"></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center">
        <div class="services-content">
          <h5 style="text-align: center;"><b><li><a href="quiz.php">Quiz</a></li></b></h5>
          <a href="quiz.php"><img src="images/quiz.jpeg" style="height: 100%;width: 100%"></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center">
        <div class="services-content">
          <h5 style="text-align: center;"><b><li><a href="autocad.php">Autocad</a></li></b></h5>
          <a href="autocad.php"><img src="images/autocad.jpeg" style="height: 100%;width: 100%"></a>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-2 services text-center" style="padding-top: 30px;"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5 style="text-align: center;"><b><li><a href="poster.php">Poster Paper Presentation</a></li></b></h5>
            <a href="poster.php"><img src="images/paper1.jpeg" style="height: 10%;width: 100%"></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center" style="padding-top: 30px;">
        <div class="services-content">
          <h5 style="text-align: center;"><b><li><a href="pubg.php">PUBG</a></li></b></h5>
            <a href="pubg.php"><img src="images/pubg.jpg" style="height: 100%;width: 100%;"></a>
        </div>
      </div>
    </div>
  </div>
                    <center><h3 class="wow fadeInDown animated"><a href ="schedule.pdf">Click here for detailed schedule.</a></h3></center> 
</section>
<!-- services section --> 
<!--About-->
<section id="content-3-10" class="content-block data-section nopad content-3-10">
	<div class="image-container col-sm-6 col-xs-12 pull-left">
        <a href="images/portfolio/img13.jpg"><img src="images/portfolio/img13.jpg" alt="" style="height: 100%;width: 100%;"></a>
		</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
				<div class="editContent">
					<h3><b>ABOUT GCOE, JALGAON</b></h3>
				</div>
				<div class="editContent">
					<p>Government College Of Engineering, Jalgaon is an autonomous institute of Government of Maharashtra. It is one of the well-known college of the region. It is the only autonomous institute of engineering in the North Maharashtra University</p>

          <h3><b>ABOUT CESA TECH-FEST</b></h3>
					<p>CESA Tech-Fest is a fest organised by the Govt. College of Engineering, Jalgaon every year. This gives a platform to the student of the institute to explore their talents in the various fields. It also provides a platform where the students can can show their managerial skills.</p>
          <p>CESA Tech-Fest is great platform for the students of various institutes to show their technical skills by participating in the various technical events held here.</p>
				</div>
			</div>
		</div><!-- /.row-->
	</div><!-- /.container -->
</section>

<section id="registration" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Registration</h2>
                <p class="wow fadeInDown animated">Please fill the complete information to register.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="POST" action="index.php" name="from1"> <!--id="cform"-->
          <input name="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." required>
          <input name="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." required>
          <input name="phone" type="tel" pattern="[789][0-9]{9}" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Phone Number..." required >
          <input name="collegename" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your College name..." required>
          <input name="event" type="text" id="selectedtext" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Event Names you want to register...(click the event below)" required readonly style="background-color: white;">
          <input type="text" id="count" placeholder="Total Selected Events" style="text-align: center;background-color: white;" readonly>
          <div class="selector">
        
          <input type="checkbox" class="chkbx" value='Build it' style="margin: 10px 5px 10px 20px;" />Building Making   <input type="checkbox" class="chkbx" value='PUBG ' style="margin: 10px 5px 10px 20px;"/>PUBG   <input type="checkbox" class="chkbx" value='Poster presentation ' style="margin: 10px 5px 10px 20px;"/>Poster Presentation   <input type="checkbox" class="chkbx" value='Quiz ' style="margin: 10px 5px 10px 20px;"/>Quiz    <input type="checkbox" class="chkbx" value='Autocad 'style="margin: 10px 5px 10px 20px;"/>Autocad
      </div>
    
          
          <script src="http://code.jquery.com/jquery-latest.js"></script>
          <script type="text/javascript">
          $(document).ready(function(){
          $('.chkbx').click(function(){
          var text="";
          $('.chkbx:checked').each(function(){
          text+=$(this).val()+ ',';
          });
          text=text.substring(0,text.length-1);
          $('#selectedtext').val(text);
          var count = $("[type='checkbox']:checked").length;
          $('#count').val($("[type='checkbox']:checked").length);
        });
    });
</script> 
            
              <input type="submit" name="submit" class="submitBnt" value="Send" >
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>



</section>
<!-- contact section --> 
<!-- Footer section -->
<section id="contact" class="section">
<footer class="footer">
<div class="container-fluid">
<div class="row">
	 <div class="col-sm-12">
			<center><h2 style="margin-top:0;color:#fff;">Contact us</h2>
    		<address style="color:#fff;">
    			<strong>Government College of Engineering Jalgaon</strong><br>
    			National Highway No-6<br>
    			Jalgaon-425002<br>
    			Maharashtra<br>
    			<abbr title="Phone">Tel:</abbr> 0257 2281522
    		
            </address>
            <div class="footerText"
                    style="color:#fff;text-align:center;padding:5px 20px;" 
                >
                      Designed And Developed By <a target="_blank" href="https://sdc.gcoej.ac.in" >SDC...</a>
            </div>
         </center>
	 </div>
	 </div>
</div>
</footer>
</section>
            <div class="section-footer">
                <p class="wow fadeInDown animated"><h3></h3>
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
<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-banner').DrSlider({
				'transition': 'fade',
				showNavigation: false,
				progressColor: "#9e015e"
			});
		});
	</script>
    </body>
</html>