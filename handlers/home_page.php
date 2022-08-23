<?php
session_start();
  if($_SESSION['email']){
    echo "Welcome you are now logged in!";
  }else{
    header("Location: signup.php");
  }
 

?>