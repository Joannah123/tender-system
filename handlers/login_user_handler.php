<?php

include('../config/config.php');
session_start();


if(isset($_POST['login'])){
   $email = mysqli_real_escape_string($connection, $_POST['email']);
   $password = mysqli_real_escape_string($connection, $_POST['password1']);

   

//    $query = "INSERT INTO user (`email`, `password`) VALUES ('$email', '$password') ";
//    mysqli_query($connection, $query);
$query= "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0){
    
    $_SESSION['email'] = $email;
    header("Location: home_page.php");
    exit();
}else{
    echo "I dont know you". "<br>";
}

}



?>