<?php
session_start();
if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
   $email=$_COOKIE["login"];
   if(isset($_GET["code"])){
      $code =$_GET["code"];
      $conn=mysqli_connect("localhost","root","","wedding");
      $rs=mysqli_query($conn,"select * from template where email='$email' AND code='$code'");
      if($r=mysqli_fetch_array($rs)){  
             
          ?>
          <!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $r["fname"]; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://use.fontawesome.com/09901d9403.js"></script>
      <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
        <link rel="stylesheet" href="css/night-mode.css">
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
  background-image: url('images/34.jpg');

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
  background-image: url('images/34.jpg');

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
<div class="night"></div>
<span id="store" prel="" pid="" prec="0"></span>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Jeevansathi.com</a>

  <!-- Toggler/collapsibe Button -->
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       
      <li class="nav-item">
        <a class="nav-link"  id="change_pass" style="cursor:pointer">Change-Password</a>
      </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
        <a class="nav-link"  id="fav" style="cursor:pointer">Favorite Profile </a>
      </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	   <li class="nav-item">
        <a class="nav-link"  href="logout.php" style="cursor:pointer;">Logout</a>
      </li> &nbsp;&nbsp;&nbsp;&nbsp;
	  <li class="nav-item">
        <a class="nav-link"  id="inbox" style="cursor:pointer">Inbox</a>
      </li>
        
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <div class="row" id="main-block" style="background-image:url(images/22.png);height:auto">
	   <div class="col-sm-12">
	
<div class="container">
	   <div class="row" style="margin-top:100px" >
			<div class="col-sm-8"  >
				<div class="row w3-card"  style="background-color:white" id="user">
                 
				    <div class="col-sm-12">
                    <?php
                    if(isset($_GET["empty"])){
						?>
                          <div class="alert alert-warning">All Field Are Required</div>
						<?php
					}
					else if(isset($_GET["again"])){
						?>
                          <div class="alert alert-danger">Try Again</div>
						<?php
					}
				   ?>
                    </div>
					<div class="col-sm-4" data-aos="fade-right">
					    <img src="profile/<?php echo $r["code"]?>.jpg" class="img-fluid">
					
					</div>
					<div class="col-sm-8" data-aos="fade-left" id="profile">
						<form method="post" action="update.php?code=<?php echo $r["code"]?>">
					     <table class="table table-hover table-borderless">
						     <tr><td>First Name : </td><td><input type="text" name="fname" value="<?php echo $r["fname"];?>" class="form-control"></td></tr>
							 <tr><td>Last Name: </td><td  ><input type="text" name="lname" value="<?php echo $r["lname"];?>" class="form-control"></td></tr>
							<tr><td>Gender : </td>
							 <td><select name="gender" class="form-control">
                                <option value="<?php echo $r["gender"];?>"><?php echo $r["gender"];?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                             </select>
                             </td> </tr>
							<tr><td>Date Of Birth : </td><td><input type="date" name="dob" value="<?php echo $r["dob"]?>"></td></tr>
							<tr><td>Caste : </td>
							 <td> <select name="caste" class="form-control">
                                <option value="<?php echo $r["caste"];?>"><?php echo $r["caste"];?></option>
                                <option value="GEN">GEN</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                             </select> </tr>
							<tr><td>Religion : </td>
							 <td> <select name="religion" class="form-control">
                                <option value="<?php echo $r["religion"];?>"><?php echo $r["religion"];?></option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Jain">Jain</option>
                                <option value="Sikh">Sikh</option>
                             </select> </td> </tr>
                             <tr><td>State : </td>
							 <td> <select name="state" class="form-control">
                                <option value="<?php echo $r["state"];?>"><?php echo $r["state"];?></option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Bihar">Bihar</option>
                             </select> </td> </tr>
                             <tr><td>Country : </td>
							 <td> <select name="country" class="form-control">
                                <option value="<?php echo $r["country"];?>"><?php echo $r["country"];?></option>
                                <option value="India">India</option>
                                <option value="Pakisthan">Pakisthan</option>
                                <option value="Australia">Australia</option>
                                <option value="SriLanka">SriLanka</option>
                             </select> </td> </tr>
                             
							<tr><td><button type="submit" class="btn btn-primary">Update Profile</button></td></tr>
							
						 </table>
                        </form>
						</div>
					
			    </div>
				<div class="col-sm-12">
                    <div class="col-sm-12"></div>
				</div>
			</div>
			<div class="col-sm-4">
			    <div class="card w3-card">
				   <div class="card-body">
				       <br><br>
				       <label>Looking For : </label>
					   <select id="search_gender" class="form-control">
						   <option value="Male">Male</option>
						   <option value="Female">Female</option>
					   </select><br>
					   <label>Caste : </label>
					    <select id="search_caste" class="form-control">
                                   <option value="OBC">OBC</option>
											   <option value="GEN">GEN</option>
											   <option value="SC">SC</option>
											   <option value="ST">ST</option>
											   <option value="SBC">SBC</option>
											   <option value="Other">Other</option>
                        </select><br>
					   <label>Religion : </label>
					    <select id="search_religion" class="form-control">
                                   <option value="Hindu">Hindu</option>
											   <option value="Islam">Islam</option>
											   <option value="Christian">Christian</option>
											   <option value="Sikh">Sikh</option>
											   <option value="Budhist">Budhist</option>
											   <option value="Other">Other</option>
                        </select><br>
						<button class="btn btn-info">Search</button>
					 </div>
				</div>
			</div>
			<div class="col-sm-12"></div>
		
		</div>
	</div>
	
	</div>
 </div>
 <!--  random profile -->
 <div class="row" id="matches">
   <div class="col-sm-12"><br><center><h2>Profile Matches</h2></center><br></div>
   <?php 
      $ur=mysqli_query($conn,"select * from template where email<>'$email'ORDER BY RAND() limit 0,4");
	  while($usr=mysqli_fetch_array($ur)){
		  $code = $usr["code"] ;
		?>
          <div class="col-sm-3">
		     <table class="table table-borderless w3-card">
			 
			 <?php 
 						    // $color="black";
						    // $fr=mysqli_query($conn,"select * from favorite where code='$code' AND email='$email'");
							// if($rp=mysqli_fetch_array($fr)){
							//    $color="red";
							// }
						?>
			    <tr><td align="center"><img src="profile/<?php echo $usr["code"]?>.jpg" class="img-fluid"></td></tr>
				<tr><td align="center"><strong><?php echo $usr["fname"]?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-heart" rel="<?php echo $usr["code"]?>" style="color:<?php echo $color?>;cursor:pointer"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="<?php echo $usr["code"]?>" class="btn btn-primary">View-Profile</button></td></tr>
			 
			 </table>
		  
		  
		  </div>

        <?php		
	  }
	?>
     <div class="col-sm-12"><br><br></div>
 
 </div>
 
 <!-- end random profile -->
 
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
          <?php
      }
   }
}
else{
    header("location:login.php");
}
?>