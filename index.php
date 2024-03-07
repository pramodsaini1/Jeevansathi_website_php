<?php
session_start();
if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
  header("location:view_profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jeevansathi Website</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <script src="https://use.fontawesome.com/09901d9403.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <script>
  window.console = window.console || function(t) {};

  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
  <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
 	   
   
 <style>
.fa {
  padding: 20px;
  font-size: 25px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-instagram {
  background: #125688;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.parallax {
  /* The image used */
  background-image: url('images/39.jpg');

  /* Full height */
 height:auto;
  width:100%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  /* The image used */
  background-image: url('images/39.jpg');

  /* Full height */
 height:auto;
  width:100%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.flip-card {
  background-color: transparent;
  width: 500px;
  height: 750px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
p{
font-family: 'Texturina';font-size: 22px;	
}
</style>
</head>
  <body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Jeevansathi.com</a>

  <!-- Toggler/collapsibe Button -->
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       
	  	   <li class="nav-item" style="float:right">
        <a class="nav-link" href="register.php" style="cursor:pointer;color:white"> Registration</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
        <a class="nav-link" style="cursor:pointer;color:white" href="login.php" >Login</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" style="cursor:pointer;color:white" href="contact.php" > Contact</a>
      </li>

    </ul>
  </div>
</nav>
 
<div id="demo" class="carousel slide" data-ride="carousel">

<?php
            if(isset($_COOKIE["login"])){
				include("view_profile.php");
				?>
				<div class="row"  style="background-color:#DEDFE3;" id="header">
        

  <div class="parallax">  

	<div class="col-sm-12" ><br><br><br><center><h2 style="color:#93F217">Trusted by Millions</h2></br></br></br></center>   
<div class="row">
			  <div class="col-sm-3" style="color:white">
		     <h3>Company</h3>
		     <table class="table table-hover table-borderless">
			     <tr style="color:white"><td  style="border:none" style="color:white">About Us </td></tr>
				  <tr style="color:white"><td style="border:none">Shaadi Blog</td></tr>
				   <tr style="color:white"><td style="border:none">Careers</td></tr>
				    <tr style="color:white"><td style="border:none">Award</td></tr>
					 <tr style="color:white"><td style="border:none">Contact Us</td></tr>
					  
			 </table>
		
		  </div>
		  <div class="col-sm-3" style="color:white">
		     <h3>More</h3>
		     <table class="table table-hover table-borderless">
			     <!--<a href="#" class="w3-bar-item w3-button" style="width:25% !important">VIP Shaadi</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Select Shaadi</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Sangam</a><br><br>
	<a href="#" class="w3-bar-item w3-button" style="width:25% !important">Shaadi Centers</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Success Story</a><br><br>-->
	        <tr style="color:white"><td  style="border:none" style="color:white">VIP Shaadi </td></tr>
				  <tr style="color:white"><td style="border:none">Select Shaadi</td></tr>
				   <tr style="color:white"><td style="border:none">Sangam</td></tr>
				    <tr style="color:white"><td style="border:none">Shaadi Centers</td></tr>
					 <tr style="color:white"><td style="border:none">Success Stories</td></tr>
					  
					  
			 </table>
		
		</div>
		<div class="col-sm-3" style="color:white">
		   <h3>Privacy & You</h3>
		     <table class="table table-hover table-borderless">
			     <!--<tr class="w3-bar-item w3-button" style="width:25% !important">Terms of Use</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Privacy Policy</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Be Safe Online</a><br><br>
	<a href="#" class="w3-bar-item w3-button" style="width:25% !important">Shaadi Centers</a><br><br>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">Report Misuse</a><br><br>-->
					     <tr style="color:white"><td  style="border:none" style="color:white">Terms of Use </td></tr>
				  <tr style="color:white"><td style="border:none">Be Safe Online</td></tr>
				   <tr style="color:white"><td style="border:none">Shaadi Centers</td></tr>
				    <tr style="color:white"><td style="border:none">Report Misuse</td></tr>
					 <tr style="color:white"><td style="border:none">Events</td></tr>
					   
			 </table>
		
		
		</div>
				<div class="col-sm-3" style="color:white">
		    <h3>Contact</h3>
			<h4> Pugal Road<br> Karni Industrial Area<br> Bikaner<br> Rajasthan<br> 334004<br>
		
		</div>
		</div>
		<div class="row">
	    <div class="col-sm-12">
	        <center> <h3 style="color:white">Follow Us :  <a href="https://www.facebook.com/profile.php?id=100060203576938"  class="social-network social-circle" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;<a href="https://twitter.com/PramodK82377407" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp; <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp; <a href="https://www.instagram.com/pramodkumarsaini12/" target="_blank"><i class="fa fa-instagram"></i></a></h3></center>
	    </div>
	</div>
				<br>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <center><p><b><h1 style="color:white">Jeevansathi.com © 2021</h1>  .<h3 style="color:white">All Rights Reserved  <br> Design by <a href="http://Jeevansathi.com/" target="_blank">Jeevansathi.com</a></b></h3> </p></center>
	        </div>
      </div>
	  
	  
	   </div>
        
    </div>    <!-- end parallax -->
    
				
				<?php
				
			}
			else{
				
 			
         ?>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	 <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>

  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="img-fluid">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="img-fluid">
    </div>
    
	<div class="carousel-item">
      <img src="images/3.jpg" class="img-fluid">
    </div>
	<div class="carousel-item">
      <img src="images/4.jpg" class="img-fluid">
    </div>
	<div class="carousel-item">
      <img src="images/5.jpg" class="img-fluid">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="container">
  <div class="row">
     <div class="col-sm-12"><br><br><center><h1 style="color:#D90029">Find your Special Someone</br></br></h2></center></div>
	  <div class="col-sm-4"data-aos="fade-right"><i class="fa fa-user-circle" aria-hidden="true" style="font-size:130px;color:#009DD9"></i><h2 style="color:#009DD9">Sign Up</h2><br><h5 >Register for free & put up your Profile</h5></br></div>
       <div class="col-sm-4"data-aos="fade-right"><i class="fa fa-handshake-o" aria-hidden="true" style="font-size:130px;color:#009DD9"></i><h2 style="color:#009DD9">Connect</h2><br><h5 >Select & Connect with Matches you like</h5></br></div>
	  <div class="col-sm-4"data-aos="fade-right"><i class="fa fa-comments" aria-hidden="true" style="font-size:130px;color:#009DD9"></i><h2 style="color:#009DD9">Interact</h2><br><h5 >Become a Premium Member & Start a Conversation</h5></br></div>

 </div>
</div>
    
	
    
	<div class="col-sm-12" style="background-color:#F4E9F2"><br><br><br><center><h2 style="color:red">6 Million Success Stories & Counting</h2></br></br></br></center>
	<div class="row" id="story">
	<div class="col-sm-4">
	    <div class="flip-card" >
		  <div class="flip-card-inner">
             <div class="flip-card-front">
	              <img src="images/6.jpg" class="img-fluid" class="card-img-top" alt="Card image"  >
	         </div>
	        <div class="flip-card-back">
		       <h4 class="card-title">Mohit & Priyanka</h4>
		      <p class="card-text">They say that matches are made in heaven and you will find them when it's the right time ! I believed the same and joined Jeevansathi.com. I was looking for a partner who is passionate about her career...</p>
				<a href ="#" class="btn btn-success">See Profile</a>
		   </div>
	     </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </div>
	 </div>
	 <div class="col-sm-4">
			 <div class="flip-card"  >	
			   <div class="flip-card-inner">
				   <div class="flip-card-front">		 
						<img src="images/9.jpg" class="img-fluid" class="card-img-top" alt="Card image"  >
					</div>
					 <div class="flip-card-back">
						<h4 class="card-title">Sweta & Rishi</h4>
						 <p class="card-text">I made profile on shaadi.com in pursuit to find my perfect match. So, I connected with Sweta. We talked to each other to know the compatibility, likes and expectations. And it was a great chemistry wi...</p>
						 <a href ="#.php" class="btn btn-info">See Profile</a>
				   </div>
				 </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   </div>
	   </div>
	 <div class="col-sm-4">
			 <div class="flip-card"  >
                  <div class="flip-card-inner">
				     <div class="flip-card-front">			 
	 	                <img src="images/8.jpg" class="img-fluid" class="card-img-top" alt="Card image" >
		             </div>
				 <div class="flip-card-back">
                      <h4 class="card-title">Vivek & Anubhuti</h4>
                      <p class="card-text">Our parents talked over Jeevansathi.com after we mutually liked each other, that was the first step towards our success story & we are very thankful for such a wonderful concept Jeevansathi.com has. Then finall...</p>
	                  <a href ="#.php" class="btn btn-primary">See Profile</a>
			   </div>
			 </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	     </div>
     </div>
</div>
<div class="row">
     <div class="col-sm-12" style="background-color:#F0F3EB"><br><br><br><center><h2 style="color:#93F217">Introducing Shaadi Meet!</h2></br></br></br></center>
 	   <div class="row">
	       <div class="col-sm-6 zoom" data-aos="fade-up">
	          <img src ="images/10.png" class="img-fluid">
	        </div>
			<div class="col-sm-6"data-aos="fade-up">
			   <img src="https://img2.shaadi.com/assests/2020/images/meet-badge.svg" data-aos="fade-right"class="img-fluid">
			   <h2>Now meet your Matches over<br>
video call</h2><br><br><br><br>
                <h3 style="color:#DC1B64">Available on the Jeevansathi.com App</h3><br><br>
				<img data-aos="fade-right" src="https://img2.shaadi.com/assests/2020/images/google-play-badge.svg" class="img-fluid">&nbsp;&nbsp;&nbsp;
				<img data-aos="fade-right" src ="https://img2.shaadi.com/assests/2020/images/apple-store-badge.svg" class="img-fluid">
			 </div>
	   </div>
	
	 </div>
</div>
    <div class="row" data-aos="fade-up">
			 <div class="col-sm-12" style="background-color:white"><br><br><br><center><img src="images/11.png" class="img-fluid"></br><br></center>
		<center><h2 style="color:#F65E13" data-aos="fade-right">Jeevansathi.com-Trusted by over 35 Million Members</h2></center><br><br>
		<center><p data-aos="fade-right"><i><b>Jeevansathi.com, one of India's best known brands and the world's largest matrimonial service was founded with a simple objective - to help people find<br>
		happiness. The company pioneered online matrimonials in 1996 and continues to lead the exciting matrimony category after more than a decade. By<br>
		redefining the way Indian brides and grooms meet for marriage, Shaadi.com has created a world-renowned service that has touched over 35 million..</b></i></p></center>
		  </div>
    </div>
  <!-- parallex -->
<div class="row"  style="background-color:#DEDFE3;" id="header">
        

  <div class="parallax">  

	<div class="col-sm-12" ><br><br><br><center><h2 style="color:#93F217">Trusted by Millions</h2></br></br></br></center>   
<div class="row">
			  <div class="col-sm-3" style="color:white">
		     <h3>Company</h3>
		     <table class="table table-hover table-borderless">
			     <tr style="color:white"><td  style="border:none" style="color:white">About Us </td></tr>
				  <tr style="color:white"><td style="border:none">Shaadi Blog</td></tr>
				   <tr style="color:white"><td style="border:none">Careers</td></tr>
				    <tr style="color:white"><td style="border:none">Award</td></tr>
					 <tr style="color:white"><td style="border:none">Contact Us</td></tr>
					  
			 </table>
		
		  </div>
		  <div class="col-sm-3" style="color:white">
		     <h3>More</h3>
		     <table class="table table-hover table-borderless">
	        <tr style="color:white"><td  style="border:none" style="color:white">VIP Shaadi </td></tr>
				  <tr style="color:white"><td style="border:none">Select Shaadi</td></tr>
				   <tr style="color:white"><td style="border:none">Sangam</td></tr>
				    <tr style="color:white"><td style="border:none">Shaadi Centers</td></tr>
					 <tr style="color:white"><td style="border:none">Success Stories</td></tr>
					  
					  
			 </table>
		
		</div>
		<div class="col-sm-3" style="color:white">
		   <h3>Privacy & You</h3>
		     <table class="table table-hover table-borderless">
					     <tr style="color:white"><td  style="border:none" style="color:white">Terms of Use </td></tr>
				  <tr style="color:white"><td style="border:none">Be Safe Online</td></tr>
				   <tr style="color:white"><td style="border:none">Shaadi Centers</td></tr>
				    <tr style="color:white"><td style="border:none">Report Misuse</td></tr>
					 <tr style="color:white"><td style="border:none">Events</td></tr>
					   
			 </table>
		
		
		</div>
				<div class="col-sm-3" style="color:white">
		    <h3>Contact</h3>
			<h4> Pugal Road<br> Karni Industrial Area<br> Bikaner<br> Rajasthan<br> 334004<br>
		
		</div>
		</div>
		<div class="row">
	    <div class="col-sm-12">
	        <center> <h3 style="color:white">Follow Us :  <a href="https://www.facebook.com/profile.php?id=100060203576938"  class="social-network social-circle" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;<a href="https://twitter.com/PramodK82377407" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp; <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp; <a href="https://www.instagram.com/pramodkumarsaini12/" target="_blank"><i class="fa fa-instagram"></i></a></h3></center>
	    </div>
	</div>
				<br>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <center><p><b><h1 style="color:white">Jeevansathi.com © 2021</h1>  .<h3 style="color:white">All Rights Reserved  <br> Design by <a href="http://Jeevansathi.com/" target="_blank">Jeevansathi.com</a></b></h3> </p></center>
	        </div>
      </div>
	  
	  
	   </div>
        
    </div>    <!-- end parallax -->
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>
  
      <script id="rendered-js" >
AOS.init({
  duration: 1200 });
//# sourceURL=pen.js
    </script>

  

  <script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
  
	  </body>
</html>
	  <?php
			}
			?>
