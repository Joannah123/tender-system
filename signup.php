<?php
// echo "I heart Joe";
// $myArray = array("Anna", "Joe", "Wizzy", "Honest");
// print_r($myArray);

// $myArray =array("Joan", "lisa", "Nana", "Benjamin", "Wills","Alexsys");
// for($i = 0; $i<6; $i++){
//     print_r($myArray[$i]. " ");
// }
// if($_POST){
    // $family = array ("anna", "Joe", "Mom","Lavender");
//     $isKnown = false;
//     foreach($family as $value){
//         if($value == $_POST['name']){
//             $isKnown = true;
//         }
//     }

//     if($isKnown){

//         echo "Hi there". $_POST['name'] . "!";
//     }
//     else{
//         echo "I dont know you";
//     }
// }

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submission</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200;700&display=swap');
        body{
            width: 1440px;
            background-color: #06038D;
            font-family: 'Outfit', sans-serif;
            display: flex;
            justify-content: center;
           align-items: center;
        }
        .container{
            background-color: white;
            width: 300px;
            height: 420px;
        }
        .register{
            width: 210px;
                height:35px;
                margin-top: 10px;
                background-color: #06038D;
                border: none;
                border-radius: 5px;
                color: white;
                font-weight:700 ;
                font-size: 15px;
        }
        .input{
            width: 200px;
                height: 25px;
                margin-bottom: 10px;
        }
        .form{
           padding-top: 5px;
            text-align: center;
        }
        label{
            font-weight: 700;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            color: orangered;
            
        }
        p{
            color: #D2D2CF;
        }
    </style>
</head>
<body>
   <!-- registration Form -->
   <div class="container">
   <form action="./handlers/register_user_handler.php" method="post" class="form">
    <h3>Create Your Account</h3>
    <div>
    <label for="username">Enter your username</label>
      <input type="username" name="username" class="input">
    </div>

    <div>
        <label for="email">Type your email here</label>
        <input type="email" name="email" class="input">
    </div>

    <div>
        <label for="password">Enter your password</label>
        <input type="password" name="password1" class="input">
    </div>

    <div>
        <label for="confirm_password">Confirm your password</label>
        <input type="password" name="password2" class="input">
    </div>
    
    <div>
        <button name="register" class="register">Register</button>
    </div>

    <div>
        <p>Already have an account? <a href="./login.php">Login</a></p>
    </div>
   
   </form>

   </div>
   


</body>
</html> 