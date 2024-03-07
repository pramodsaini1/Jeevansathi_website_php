<?php
session_start();
	if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
       $conn = mysqli_connect("localhost","root","","wedding");		
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		?>
		  <div class="container">
		    <div class="row">
				   <div class="col-sm-12">
				           <h3>Change Password</h3>
						   <label>Current Password : </label>
						   <input type="password" class="form-control" id="cp" required><br>
						   <button class="w3-btn w3-red">Submit</button><br><br><br><br>
				   </div>
			  </div>
		  </div>
		<?php
    }
?>