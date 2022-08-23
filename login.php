<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
        body{
            background-color: #06038D;
            width: 1440px;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Raleway', sans-serif;
        }
        .container{
            background-color: white;
            width: 260px;
            height: 300px;
            padding-left: 30px;
            }
            label{
                display: block;
                font-weight: 700;
            }
            .input{
                width: 200px;
                height: 25px;
                margin-bottom: 10px;
            }
            .login{
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
            .outside{
                position: relative;
                top: 230px;
                right: 290px;
              
                }
                .outside p{
                    color:  #D2D2CF;
                }
                .outside a{
                    color: white;
                    text-decoration: none;
                }
                a:hover{
                    color: orangered;
                }
                

    </style>
</head>
<body>
    <div class="container">
    <form action="./handlers/login_user_handler.php" method="post">
        <h3>Login to your Account</h3>
        <div class="label">
            <label for="email">Enter your email</label>
            <input type="email" name="email" placeholder="example@gmail.com" class="input">
        </div>

        <div>
            <label for="password">Enter your password</label>
            <input type="password" name="password1" placeholder="......" class="input">
        </div>

        <div>
            <button name="login" class="login">Login</button>
        </div>

    </form>
  
    </div>

    <div class="outside">
            <p>Don't have an account?<a href="./signup.php">Register Here</a></p>
            <p>Forgot password? <a href="">Recover Password</a></p>
        </div>
    
</body>
</html>