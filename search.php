<?php
session_start();
   if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
	     $conn = mysqli_connect("localhost","root","","wedding");
		  $email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		  
		  if(isset($_REQUEST["gender"]) && isset($_REQUEST["caste"]) && isset($_REQUEST["religion"])&& isset($_REQUEST["num"])){
		      $gender=mysqli_real_escape_string($conn,$_REQUEST["gender"]);
			  $caste=mysqli_real_escape_string($conn,$_REQUEST["caste"]);
			  $religion=mysqli_real_escape_string($conn,$_REQUEST["religion"]);
			  $id=intval($_REQUEST["num"]);
			  $start=$id*2;
			  ?>
			    <div class="col-sm-12"><br><br></div>
			  <?php
			  $rs=mysqli_query($conn,"select * from template where email<>'$email' AND gender='$gender'AND caste='$caste' AND religion='$religion' order by sn limit $start,2");
			  $flag=0;
			  while($r=mysqli_fetch_array($rs)){
				  $flag++ ;
				  ?>
				    <div class="row">
				            <div class="col-sm-4">
										<img src="profile/<?php echo $r["code"];?>.jpg" class="img-fluid">
									
									</div>
									<div class="col-sm-8">
										 <table class="table  table-borderless">
											 <tr><td>First Name : </td><td id="d-fname"><?php echo $r["fname"];?></td></tr>
											 <tr><td>Last Name : </td><td id="d-lname"><?php echo $r["lname"];?></td></tr>
											<tr><td>Gender : </td><td><?php echo $r["gender"];?></td></tr>
											<tr><td>Date Of Birth : </td><td id="d-dob"><?php echo $r["dob"];?></td></tr>
											 <tr><td>Caste : </td><td id="d-caste"><?php echo $r["caste"];?></td></tr>
											<tr><td>Religion : </td><td><?php echo $r["religion"];?></td></tr>
											<tr><td colspan=2 align=center><button class="btn btn-dark" id="<?php echo $r["code"];?>">View Profile</button></td></tr>
										 </table>
											 
									
									</div>
					</div>
				  
				  <?php
			  }
			  if($flag==2){
			?>
				<div class="col-sm-12"><center><button class="w3-button w3-red" id="<?php echo ($id+1);?>">Load More</button></center><br></div>
            <?php
		  
		  
		  
		  
		  }	  
     }
   
   
   }
?>