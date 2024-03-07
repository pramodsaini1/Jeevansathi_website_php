<?php
      setcookie("login","",time()-1);
      session_destroy();
      header("location:login.php");	  
 ?>