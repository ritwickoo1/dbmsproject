<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .login-box{
            width: 320px;
            height: 420px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
        .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .login-box p{
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .login-box input{
            width: 100%;
            margin-bottom: 20px;
        }
        .login-box input[type="text"], input[type="password"]{
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .login-box input[type="submit"]{
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        .login-box input[type="submit"]:hover{
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }
        .login-box a{
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }
        .login-box a:hover{
            color: #ffc107;
        }
    </style>
</head>
<body>
    <!-- Create login form using html and css -->
    <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="btn" type="submit" name="submit" value="Sign in">
        </form>
    </div>
</body>
</html>