<?php
session_start();
	if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
       $conn = mysqli_connect("localhost","root","","wedding");								
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		if(isset($_REQUEST["np"]) && isset($_REQUEST["rp"])){
			
			$np=md5(mysqli_real_escape_string($conn,$_REQUEST["np"]));
			$rp=md5(mysqli_real_escape_string($conn,$_REQUEST["rp"]));
			if($np==$rp){
			   if(mysqli_query($conn,"update template set password='$np' where email='$email'")>0){
					echo "success";
			   }		   
			}
		}
	}
?>