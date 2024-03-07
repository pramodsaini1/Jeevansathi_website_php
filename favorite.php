<?php
session_start();
		if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
			 
			    $email=$_COOKIE["login"] ;
				$conn = mysqli_connect("localhost","root","","wedding");
				if(isset($_REQUEST["code"])){
					$code = mysqli_real_escape_string($conn,$_REQUEST["code"]);
					$rs = mysqli_query($conn,"select*from favorite where code='$code' AND email='$email'");
					if($r=mysqli_fetch_array($rs)){
						  if(mysqli_query($conn,"delete from favorite where email='$email' AND code='$code'")>0){
				                echo "delete";
			              }
	                }
				 else{
					 if(mysqli_query($conn,"insert into favorite values('$email','$code')")>0){
							echo "success";
					 }	
                 }
			
		   }
		}		  

?>		  