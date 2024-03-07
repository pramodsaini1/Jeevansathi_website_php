<?php
session_start();
if(empty($_POST["email"]) ||empty($_POST["pass"])){
	header("location:login.php?empty=1");
}
else{
	$email=strtolower($_POST["email"]);
	$pass=md5($_POST["pass"]);
	$conn=mysqli_connect("localhost","root","","wedding");
	$rs=mysqli_query($conn,"select * from template where email='$email'");
	if($r=mysqli_fetch_array($rs)){
		if($r["password"]==$pass){
            setcookie("login",$email,time()+3600);
			$_SESSION["user"]=$email;
			header("location:view_profile.php");
		}
		else{
            header("location:login.php?invalid_password=1");
		}
	}
	else{
         header("location:login.php?invalid=1");
	}
   
}  
 
		
?>