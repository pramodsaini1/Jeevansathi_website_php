<?php
session_start();
				  $conn=mysqli_connect("localhost","root","","wedding");
  if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
	 
	  $email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
	  $rs=mysqli_query($conn,"select * from template where email='$email'");
	  if($rd=mysqli_fetch_array($rs)){

					 if(isset($_REQUEST["code"])){
						 $code=mysqli_real_escape_string($conn,$_REQUEST["code"]);
						 $ur=mysqli_query($conn,"select * from template where code='$code'");
						 if($r=mysqli_fetch_array($ur)){
							 ?>
								  <div class="col-sm-12"><br><div class="alert"></div><br></div>
									<div class="col-sm-4">
										<img src="<?php echo $r["image"]?>" class="img-fluid">
									
									</div>
									<div class="col-sm-8">
										 <table class="table  table-borderless">
                                              <tr class="opened_1">
									<td class="day_label">First Name :</td>
									<td class="day_value"><?php echo$r["fname"]?> </td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Last Name :</td>
									<td class="day_value"><?php echo$r["lname"]?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Gender :</td>
									<td class="day_value"><?php echo$r["gender"]?></td>
								</tr>
								<tr class="opened_1">
									<td class="day_label">DOB :</td>
									<td class="day_value"><?php echo$r["dob"]?> </td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo$r["caste"]?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo$r["religion"]?></td>
								</tr>
								
								<tr class="opened_1">
									<td class="day_label">Country :</td>
									<td class="day_value"><?php echo$r["country"]?></td>
								</tr>
								<tr class="opened_1">
									<td class="day_label">State :</td>
									<td class="day_value"><?php echo$r["state"]?></td>
								</tr>
											<tr><td colspan=2><label>Message : </label><br>
											  <textarea rows="3" class="form-control" id="msg" style="resize:none"></textarea><br><br>
											  <button class="btn btn-danger" id="<?=$r["code"]?>">Submit Message</button></td></tr>
										 </table>
											 
									
									</div>
							 
							 
							 <?php
							 
						 }
					 }
	  }
  }
?>