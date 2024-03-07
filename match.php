<?php
session_start();
	if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
       $conn = mysqli_connect("localhost","root","","wedding");						
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		?>
		  <div class="container">
		    <div class="row">
			       <div class="col-sm-12" id="palert"></div>
				   <div class="col-sm-12">
		                     <h3>Change Password</h3>
							 
							   <label>New Password : </label>
							   <input type="password" class="form-control" id="np" required><br>
							   <label>Retype Password : </label>
							   <input type="password" class="form-control" id="rp" required><br>
							   <button class="w3-button w3-purple">Change Password</button><br><br>
							   <br><br>
				   </div>
			</div>
		</div>
		<?php
    }
?>