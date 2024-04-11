<?php
session_start();
if(isset($_COOKIE["login"]) && isset($_SESSION["user"])){
    $email=$_COOKIE["login"];
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        $oldImagePath ="";
         $conn=mysqli_connect("localhost","root","","wedding");
         $rs=mysqli_query($conn,"select * from template where email='$email' AND code='$code'");
        if($r=mysqli_fetch_array($rs)){
           $oldImagePath=$r["image"];
        }
        $newImagePath = "profile/" . $code.".jpg" ;
         if(mysqli_query($conn,"update template set image='$newImagePath' where email='$email' AND code='$code'")>0){
             if(file_exists($oldImagePath)){
                unlink($oldImagePath);
                 
                        if(move_uploaded_file($_FILES['image']['tmp_name'],$newImagePath)){
                            header("location:view_profile.php?image_updated=1");
                        }
                        else{
                            header("location:view_profile.php?err=1");
                        }
                   
             }
        }
        

    }
}
?>