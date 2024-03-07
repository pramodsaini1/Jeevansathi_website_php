<?php
session_start();
	if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
 		$conn=mysqli_connect("localhost","root","","wedding");
		$email=mysqli_real_escape_string($conn,$_COOKIE["login"]);
		
		$id=0;
		$n=2;
		if(isset($_REQUEST["num"])){
			  $id=intval($_REQUEST["num"]);
		}
		$start=$id*$n;
		$count=0;
		$rec=mysqli_query($conn,"SELECT * from inbox1 where temail='$email' order by sn desc limit $start,$n " );
		  while($sm=mysqli_fetch_array($rec)){
			            $count++;
					    $femail=$sm[5];
						$fr=mysqli_query($conn,"SELECT * from template where email='$femail' " );
						if($rf=mysqli_fetch_array($fr)){
						?>	
							<div class="row">
							   <div class="col-sm-3">
							       <center><img class="img-fluid" src="profile/<?php echo $rf["code"]?>.jpg"></center>
							   
							   </div>
							   <div class="col-sm-9">
							       <h3 class="user-msg" id="<?php echo $rf["code"]?>" style="cursor:pointer"><?php echo $rf["fname"]?></h3>
								   <p><?php echo $sm["msg"]?></p>
								   <button class="w3-button w3-blue" rel="<?php echo $rf["code"]?>">Message</button>
							   </div>
							</div>
							<div class="row"><div class="col-sm-12"><br></div></div>
						<?php	
						}
						
		  }
		  if($count==$n){
			?>
				<div class="col-sm-12"><center><button class="w3-btn w3-blue" id="<?php echo ($id+1)?>">Load More</button></center></div>
            <?php			
		  }
		
	}
?>