<?php
if(empty($_POST["fname"]) ||empty($_POST["lname"]) || empty($_POST["email"]) ||	empty($_POST["pass"]) ||empty($_POST["gender"]) ||	empty($_POST["caste"]) ||empty($_POST["religion"]) || empty($_POST["state"]) ||empty($_POST["country"]) ||empty($_POST["dob"])){
	 header("location:Register.php?empty=1");
}
else{
			$fname = $_POST["fname"] ;
			$lname = $_POST["lname"] ;
			if(!preg_match("/^([a-zA-Z' ]+)$/",$fname)){
				header("location:Register.php?invalid_firstname=1");
			}
			if(!preg_match("/^([a-zA-Z' ]+)$/",$lname)){
				header("location:Register.php?invalid_lastname=1");
			}
			$email = validation($_POST["email"]) ;
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("location:Register.php?invalid_email=1");
			}
			$pass  =md5(validation($_POST["pass"]));//password_hash($pass,PASSWORD_DEFAULT)
			$gender = $_POST["gender"] ;
			$caste   = $_POST["caste"] ;
			$religion  = $_POST["religion"] ;
			$state = $_POST["state"] ;
			$country = $_POST["country"] ;
			$dob     = $_POST["dob"] ;
			$sn = 0 ;
			$conn  = mysqli_connect("localhost","root","","wedding") ;
			$rs  = mysqli_query($conn,"select MAX(sn) from template") ;
			if($r = mysqli_fetch_array($rs)){
				$sn = $r[0] ;
			}
			$sn++ ;
			
			$code = "" ;
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
		    $target ="profile/" . $code.".jpg" ;
			if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
				  if(mysqli_query($conn,"insert into template(sn,code,fname,lname,email,password,gender,caste,religion,state,country,dob,image) values($sn,'$code','$fname','$lname','$email','$pass','$gender','$caste','$religion','$state','$country','$dob','$target')")>0){
 					 header("location:Register.php?record_inserted=1");
				 }
				else{
					  header("location:Register.php?again=1");
				}
			}
			else{
				echo "sorry there  was a problem uploading your file." ;
			  header("location:Register.php?err=1") ;
				
			}
		    
			
		}
		function validation($data){
			$data=trim($data);
			$data=htmlspecialchars($data);
			$data=strtolower($data);
			return $data;
		}
		
		
		
?>