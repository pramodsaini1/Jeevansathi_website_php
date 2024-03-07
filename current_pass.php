<?php
session_start();
 	if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
       $conn = mysqli_connect("localhost","root","","wedding");				
		$email=$_COOKIE["login"];
		if(isset($_POST["cp"])){
			$cp=md5(mysqli_real_escape_string($conn,$_POST["cp"]));
			$rs=mysqli_query($conn,"select * from  template where email='$email'");
			if($r=mysqli_fetch_array($rs)){
			   if($r["password"]==$cp){
                  echo"success";
               }
			   else{
				echo"invalid";
			   }				   
			}
			
		}
		 
		
	}
?>