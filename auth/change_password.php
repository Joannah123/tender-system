<?php
include ("../config/config.php");

$errors = array();
 if(isset($_POST['change_password'])){
    $email = $_POST['email'] ;
    $oldpwd = $_POST['oldpwd'];
    $newpwd = $_POST['newpwd'];
    $confpwd = $_POST['confpwd'];
   
    if(empty($email)){
        array_push($errors, "You must enter email");
    }
    if(empty($oldpwd)){
        array_push($errors, "You must enter old password");
    }
    if(empty($newpwd)){
            array_push($errors, "You must enter new password");
    }
    if(empty($confpwd)){
            array_push($errors, "You must enter confirm password");
    }
    if(strlen($newpwd < 6)){
        array_push($errors, "Password must be atleast six characters");
    }
    if($newpwd != $confpwd){
        array_push($errors, "Passwords do not match");
    }
    if(count($errors) > 0){
        for($i=0; $i < count($errors); $i++){
            echo "$errors[$i]" ."<br>";
        }
    }else{
        
        $query = "SELECT * FROM user WHERE  email = '$email' ";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)>0){
        $update = "UPDATE user SET password = '$newpwd' WHERE email = '$email' ";
        mysqli_query($connection, $update);
    }else{
        echo "It does not exist, Try again!";
    }

    }
    

 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change my password</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="oldpwd">Old Password</label>
            <input type="password" name="oldpwd">
        </div>

        <div>
            <label for="newpwd">New Password</label>
            <input type="password" name="newpwd">
        </div>

        <div>
            <label for="confpwd">Confirm Password</label>
            <input type="password" name="confpwd">
        </div>

        <div>
            <button name="change_password">Change Password</button>
        </div>
    </form>
</body>
</html>