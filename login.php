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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://use.fontawesome.com/09901d9403.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
  <script>
  window.console = window.console || function(t) {};

  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<style>
.fa-facebook {
  background-color: #3b5998;
  margin-right: 10px;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-google-plus {
  background-color: #3b5998;
  margin-right: 10px;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-twitter {
  background-color: #55acee;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
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
  background-image: url('images/37.jpg');

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
  background-image: url('images/37.jpg');

  /* Full height */
 height:auto;
  width:100%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
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
   
 
<div class="container-fluid" id="Login">
    <div class="row">
	  <div class="col-sm-7" data-aos="fade-right">
	    <img src = "images/login.jpg" class="img-fluid">
        </div>
		<div class="col-sm-5" data-aos="flip-left" >	
								   <div class="card card-default" style="margin-top:80px">
            <div class="card-header" id="msg"><center><img src="images/11.png" style="width:50px;height:50px"> Jeevansathi.com Login </center></div>
            <div class="card-body">
              <?php
              if(isset($_GET["invalid_password"])){
                ?>
                 <div class="alert alert-warning">Invalid Password</div>
                <?php
              }
             else if(isset($_GET["invalid"])){
                ?>
                 <div class="alert alert-danger">Invalid Record</div>
                <?php
              }
              
              ?>
               <form method="post" action="check.php">
                 <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                    <input type="email" class="form-control input-lg" name="email" placeholder="Email" required>
                  </div>
                  
                  <br>
                   
                 <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control input-lg" name="pass" placeholder="Password" required>
                  </div>
                  
                
                <div class="input-group mb-3 input-group-lg">
                    
                    <input type="submit" class="btn btn-info" value="Login">
                   
                  </div>
                 </form>
					      
						 </div>
						 <div class="card-footer">
                   
                               <button id="register" class="btn btn-success" style='color:white;float:right'><a style="text-decoration:none;color:white" href="Register.php">New User ? Register</a></button>
            </div>
						 </div>
			          </div>
				
    </div>				  
</div>
	   
 


<div class="container-fluid">
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
        
    </div> 


</div> 

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

<script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>

    <script id="rendered-js" >
AOS.init({
duration: 1200 });
//# sourceURL=pen.js
  </script>




  