<?php
session_start();
$conn=mysqli_connect("localhost","root","","wedding");
if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
	  $email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
	    $code="";
 		   $rs = mysqli_query($conn,"select * from favorite where email='$email'");
		   while($r=mysqli_fetch_array($rs)){
			   $code=$r["code"];
			   $rp = mysqli_query($conn,"select * from template where code='$code'");
			   while($rf=mysqli_fetch_array($rp)){
				   ?>
								  <div class="col-sm-12"><br><div class="alert"></div><br></div>
									<div class="col-sm-4">
										<img src="profile/<?=$rf["code"]?>.jpg" class="img-fluid">
									    <i style="color:red;font-size:25px;" class ="fa fa-heart"></i>
									</div>
									<div class="col-sm-8">
										 <table class="table  table-borderless">
                                              <tr class="opened_1">
									<td class="day_label">First Name :</td>
									<td class="day_value"><?php echo$rf["fname"]?> </td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Last Name :</td>
									<td class="day_value"><?php echo$rf["lname"]?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Gender :</td>
									<td class="day_value"><?php echo$rf["gender"]?></td>
								</tr>
								<tr class="opened_1">
									<td class="day_label">DOB :</td>
									<td class="day_value"><?php echo$rf["dob"]?> </td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo$rf["caste"]?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo$rf["religion"]?></td>
								</tr>
								
								<tr class="opened_1">
									<td class="day_label">Country :</td>
									<td class="day_value"><?php echo$rf["country"]?></td>
								</tr>
								<tr class="opened_1">
									<td class="day_label">State :</td>
									<td class="day_value"><?php echo$rf["state"]?></td>
								</tr>
								</table>
								</div>
								<?php
				   
				   
			   }
			   
		   }
		   
		   

  }
?>