<?php
session_start();
	if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
		
		$conn=mysqli_connect("localhost","root","","wedding");
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		$fcode="";
		if(isset($_REQUEST["id"]) && isset($_REQUEST["msg"])){

			$tcode=mysqli_real_escape_string($conn,$_REQUEST["id"]);
			
					$temail="";
					$rt=mysqli_query($conn,"SELECT * from template where code='$tcode'");
					if($tr=mysqli_fetch_array($rt)){
						$temail=$tr["email"];
					}
					$rt=mysqli_query($conn,"SELECT * from template where email='$email'");
					if($tr=mysqli_fetch_array($rt)){
						$fcode=$tr["code"];
					}
					$code="";
					$a=array();
					for($i='a';$i<='z';$i++){
						array_push($a,$i);
						   if($i=='z')
							break;
						}
					for($i=0;$i<=9;$i++){
						array_push($a,$i);
						}
					for($i='A';$i<='Z';$i++){
						array_push($a,$i);
						   if($i=='Z')
							break;
						}
					$b=array_rand($a,6);
					for($i=0;$i<5;$i++){
						$code=$code.$a[$b[$i]];
					}
					$sn=0;
			        $rs=mysqli_query($conn,"SELECT MAX(sn) from inbox1");
					if($r=mysqli_fetch_array($rs)){
						$sn=$r[0];
					}
					$sn++;

					$msg=mysqli_real_escape_string($conn,$_REQUEST["msg"]);
					$dt=date("d M,Y");
					if(mysqli_query($conn,"INSERT into inbox1 (sn,code,tcode,temail,fcode,email,msg,dt) values($sn,'$code','$tcode','$temail','$fcode','$email','$msg','$dt')")>0){
					         echo "success";
					}


			
		}
	}
?>
