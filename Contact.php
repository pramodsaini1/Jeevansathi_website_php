<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://use.fontawesome.com/09901d9403.js"></script>
    <script src="https://use.fontawesome.com/09901d9403.js"></script>
 <script>
  $(document).ready(function(){
    $(".btn.btn-success").click(function(){
      var name=$("#name").val();
      var email=$("#email").val();
      var mobile=$("#mobile").val();
      var subject=$("#subject").val();
      var msg=$("#message").val();
       $.ajax({
          url:"contact_us.php",
          type:"POST",
          data:{name:name,email:email,mobile:mobile,subject:subject,msg:msg},
          success:function(data){
              if(data=="success"){
              $("#record").html("<div class='alert alert-success'>Will Contact As Soon As Possible</div>");
             }
             else if(data=="again"){
              $("#record").html("<div class='alert alert-warning'>Try Again</div>");
            }
          }
      });
    })
  })    
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
  background-image: url('images/38.jpg');

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
  background-image: url('images/38.jpg');

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
   


<div class="container-fluid" >
 
   <div class="row" style="background-color:#f9f9f9;margin-top:55px">
       <div class="col-sm-12"><center><h1 style="font-size:40px"><strong>Contact Us</strong></h1></center></div>
       <div class="col-sm-12"><center><br></center></div>
      
       <div class="col-sm-6">
           <div class="card card-default">
           
            <div class="card-body">
               <div id="record"></div>
              <br>
                             
                  
                    <div id="block1">
                            
                      <label>Name <span style="color:red">*</span></label>
                      <input type="text" id="name" placeholder=" Enter-Name" class="form-control input-lg" required><br>
                       <label>Email <span style="color:red">*</span></label>
                      <input type="email" id="email"  placeholder="Enter Email-ID" class="form-control" required><br>
                      <label>Mobile</label>
                      <input type="number" id="mobile" placeholder="Mobile" class="form-control"><br>
                      <label>Subject <span style="color:red">*</span></label>
                      <input type="text" id="subject" placeholder="Subject" class="form-control" required><br>
                      <label>Message <span style="color:red">*</span></label>
                      <textarea rows=5 class="form-control" id="message" style="resize:none" required></textarea><br>
                      <button id="2" class="btn btn-success" rel="block1">Submit</button>
                      </div>
                      
                       
                      
                </form>
              </div></div>
          <br><br>
          
       </div>
       <div class="col-sm-6">
          <h2> Jeevansathi.com, the world's oldest and most successful matchmaking service, has been trusted since 1996 by people all over the world to help them find their soulmates. Today, hundreds of thousands of people have met their life partners through our revolutionary matchmaking service and countless others have made some very special friends.<br><br>

Jeevansathi.com was founded by me in 1996 with one simple objective - to provide a superior matchmaking experience by expanding the opportunities available to meet potential life partners. Since then we have created a world renowned service that has touched the lives of millions of people all over the world. We have, however, never rested on our laurels.  </h2>
            
       </div>
        <div class="col-sm-12"><center><br></center></div>
   </div>
   
   
   
   
   <div class="row" style="background-color:yellow">
      <div class="col-sm-12" style="color:white"><br><br>
          <center>
              <strong><h1>For Any Query Whatsapp</h1>
              <h2><a href="https://wa.me/8905648522" style="color:white;text-decoration:none" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> +91-8905648522</a></h2></strong>
          </center>
          <br><br>
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


   

 