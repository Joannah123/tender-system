<?php
include('../config/config.php');

$errors = array();
if(isset($_POST['register'])){

    
    $username= mysqli_real_escape_string($_POST['username']);
    $email= mysqli_real_escape_string($_POST['email']);
    $password1 =mysqli_real_escape_string($_POST['password1']);
    $password2 = mysqli_real_escape_string($_POST['password2']);

    //checking if they're empty
    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if(empty($password1)){
        array_push($errors, "Password is required");
    }
    if(empty($password2)){
        array_push($errors, "Confirm password is required");
    }
    if ($password1 != $password2) {
        array_push($errors, "Passwords do not match!");
    }
    if (strlen($password1) < 6) {
        array_push($errors, "Password must be atleast 6 characters long");
    }
    if (count($errors) > 0) {
        for ($i = 0; $i < count($errors); $i++) {
            echo $errors[$i] . "<br>";
        }
    }
    else{
      $query = "INSERT INTO user  VALUES('$username', '$email', '$password1')";
      mysqli_query($connection, $query);
    }
}
?>