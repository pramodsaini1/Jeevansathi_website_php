<?php
session_start();
if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
	$email=$_COOKIE["login"];
	if(isset($_GET["code"])){
		$code=$_GET["code"];
		if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["gender"]) && !empty($_POST["dob"]) && !empty($_POST["caste"]) && !empty($_POST["religion"])&& !empty($_POST["state"]) && !empty($_POST["country"])){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$gender=$_POST["gender"];
			$dob=$_POST["dob"];
			$caste=$_POST["caste"];
			$religion=$_POST["religion"];
			$state=$_POST["state"];
			$country=$_POST["country"];
			$conn=mysqli_connect("localhost","root","","wedding");
			if(mysqli_query($conn,"update template set fname='$fname',lname='$lname',gender='$gender',caste='$caste',religion='$religion',state='$state',country='$country',dob='$dob' where email='$email' AND code='$code'")>0){
				header("location:view_profile.php?updated=1");
			}
			else{
				header("location:edit.php?again=1");
			}
		}
		else{
			header("location:edit.php?empty=1");
		}
	}
	else{
		header("location:view_profile.php?code_err=1");
	}
}
else{
	header("location:login.php");
}
					 
		 
		
?>