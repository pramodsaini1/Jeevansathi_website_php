<?php
       if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["mobile"]) && isset($_POST["subject"]) && isset($_POST["msg"])){
		   
		   $name = $_POST["name"] ;
		   	$email = $_POST["email"] ;
		   $mobile = $_POST["mobile"] ;
		   $subject = $_POST["subject"] ;
		   $message = $_POST["msg"] ;
		   $sn = 0 ;
			$conn  = mysqli_connect("localhost","root","","wedding") ;
			$rs  = mysqli_query($conn,"select MAX(sn) from contact") ;
			if($r = mysqli_fetch_array($rs)){
				$sn = $r[0] ;
			}
			$sn++ ;
			
			$code = " " ;
			$a = array() ;
			for($i = 'A';$i<='Z';$i++){
				  array_push($a,$i) ;
				    if($i=='Z') 
					   break ;
			}
			for($i = 'a';$i<='z';$i++){
				  array_push($a,$i) ;
				    if($i=='z') 
					   break ;
			}
			for($i = 0;$i<=9;$i++){
				  array_push($a,$i) ;
			}
			$b = array_rand($a,6) ;
			for($i=0;$i<sizeof($b);$i++){
				$code = $code.$a[$b[$i]] ;
			}
			$code = $code."_".$sn ;
			if(mysqli_query($conn,"insert into contact (sn,code,name,email,mobile,subject,message) values($sn,'$code','$name','$email', '$mobile','$subject','$message')")>0){
				echo"success" ;
			}
		    else{
				echo"again" ;
 			}
			
	  }
		   

   
?>