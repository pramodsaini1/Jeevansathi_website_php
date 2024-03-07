<?php
session_start();
   if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
	     $conn = mysqli_connect("localhost","root","","wedding");
		  $email= $_COOKIE["login"];
 		  
?>







<div class="col-sm-12"><br><center><h2>Profile Matches</h2></center><br></div>
   <?php 
      $ur=mysqli_query($conn,"select * from template where email<>'$email' ORDER BY RAND() limit 0,4");
	  while($usr=mysqli_fetch_array($ur)){
		  $src = $usr["image"] ;
		  $code=$usr["code"];
		?>
          <div class="col-sm-3">
		     <table class="table table-borderless w3-card">
			 <?php 
						    $color="black";
						    $fr=mysqli_query($conn,"select * from favorite where code='$code' AND email='$email'")or die(mysqli_error($conn));
							if($rp=mysqli_fetch_array($fr)){
							   $color="red";
							}
						?>
			    <tr><td align="center"><img src="<?php echo $src?>" class="img-fluid"></td></tr>
				<tr><td align="center"><strong><?php echo $usr["fname"]?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-heart" rel="<?php echo $usr["code"]?>" style="color:<?php echo $color?>;cursor:pointer"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="<?php echo $usr["code"]?>" class="btn btn-primary">View-Profile</button></td></tr>
			 
			 </table>
		  
		  
		  </div>

        <?php		
	  }
	?>
     <div class="col-sm-12"><br><br></div>
	 <?php
   }
 ?>
 